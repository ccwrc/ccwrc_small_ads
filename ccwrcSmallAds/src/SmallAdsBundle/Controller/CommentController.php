<?php

namespace SmallAdsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use DateTime;

use SmallAdsBundle\Entity\Comment;
use SmallAdsBundle\Entity\User;
use SmallAdsBundle\Form\CommentType;
use SmallAdsBundle\Form\CommentEditType;

class CommentController extends Controller {

    /**
     * @Route("/{id}/createComment", requirements={"id"="\d+"})
     */
    public function createCommentAction(Request $req, $id) {
        $user = $this->container->get("security.context")->getToken()->getUser();
        if (!($user instanceof User)) {
            $user = null;
        }
        $ad = $this->getDoctrine()->getRepository("SmallAdsBundle:Ad")->find($id);
        $comment = new Comment();

        $commentForm = $this->createForm(CommentType::class, $comment, [
            "action" => $this->generateUrl("smallads_comment_createcomment", ["id" => $id])
        ]);

        $commentForm->handleRequest($req);
        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $comment = $commentForm->getData();
            $comment->setDate(new dateTime(date("Y-m-d H:i:s")));
            $comment->setUser($user);
            $comment->setAd($ad);
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
            // powiadomienie mailowe o nowym komentarzu
            $adTitle = $ad->getTitle();
            $userEmail = $ad->getUser()->getEmail();
            $this->sendInfoMail($userEmail, $adTitle);

            return $this->redirectToRoute("smallads_ad_showad", ["id" => $id]);
        }

        return $this->render('SmallAdsBundle:Comment:create_comment.html.twig', array(
                    "commentForm" => $commentForm->createView(),
        ));
    }

    /**
     * @Route("/{id}/{adId}/editComment", requirements={"id"="\d+", "adId"="\d+"})
     */
    public function editCommentAction(Request $req, $id, $adId) {
        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Dostęp zabroniony');
        $user = $this->container->get("security.context")->getToken()->getUser();
        $comment = $this->getDoctrine()->getRepository("SmallAdsBundle:Comment")->find($id);

        if ($user !== $comment->getUser()) {
            throw $this->createNotFoundException("Brak zgodności ID");
        }

        $commentForm = $this->createForm(CommentEditType::class, $comment);

        $commentForm->handleRequest($req);
        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $comment = $commentForm->getData();
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("smallads_ad_showad", ["id" => $adId]);
        }

        return $this->render('SmallAdsBundle:Comment:edit_comment.html.twig', array(
                    "commentForm" => $commentForm->createView()
        ));
    }

    /**
     * @Route("/{id}/{adId}/deleteComment", requirements={"id"="\d+", "adId"="\d+"})
     */
    public function deleteCommentAction($id, $adId) {
        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Dostęp zabroniony');
        $user = $this->container->get("security.context")->getToken()->getUser();
        $comment = $this->getDoctrine()->getRepository("SmallAdsBundle:Comment")->find($id);

        if ($user === $comment->getUser()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($comment);
            $em->flush();
        }

        return $this->redirectToRoute("smallads_ad_showad", ["id" => $adId]);
    }

    private function sendInfoMail($userEmail, $adTitle) {
        $message = \Swift_Message::newInstance()
                ->setSubject($adTitle . " - nowy komentarz do ogłoszenia")
                ->setFrom('smalladsbundle@gmail.com')
                ->setTo($userEmail)
                ->setBody(
                $this->renderView('SmallAdsBundle:Comment:info_mail.html.twig', [
                    "adTitle" => $adTitle
                ]), 'text/html');

        $this->get('mailer')->send($message);
    }

}
