<?php

namespace SmallAdsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use DateTime;

use SmallAdsBundle\Entity\Comment;
use SmallAdsBundle\Entity\User;

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

        $commentForm = $this->createFormBuilder($comment)
                ->setMethod("POST")
                ->add("text", "textarea", ["label" => "Skomentuj ogłoszenie: "])
                ->add("save", "submit", ["label" => "Zapisz"])
                ->getForm();

        $commentForm->handleRequest($req);
        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $comment = $commentForm->getData();
            $comment->setDate(new dateTime(date("Y-m-d H:i:s")));
            $comment->setUser($user);
            $comment->setAd($ad);
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
            return $this->redirectToRoute("smallads_ad_showad", ["id" => $id]);
        }

        return $this->render('SmallAdsBundle:Comment:create_comment.html.twig', array(
                    "id" => $id,
                    "commentForm" => $commentForm->createView()
        ));
    }

    /**
     * @Route("/editComment")
     */
    public function editCommentAction()
    {
        return $this->render('SmallAdsBundle:Comment:edit_comment.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showAllCommentsByAd")
     */
    public function showAllCommentsByAdAction()
    {
        return $this->render('SmallAdsBundle:Comment:show_all_comments_by_ad.html.twig', array(
            // ...
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

}
