<?php

namespace SmallAdsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use SmallAdsBundle\Entity\SmallAd;
use \DateTime;

/**
 * @Route("/ads")
 */
class SmallAdController extends Controller {

    /**
     * @Route("/create")
     */
    public function createAction(Request $req) {
        $user = $this->container->get("security.context")->getToken()->getUser();
        $smallAd = new SmallAd();

        $form = $this->createFormBuilder($smallAd)
                ->setMethod("POST")
                ->add("title", "text", ["label" => "Podaj tytuł: "])
                ->add("description", "textarea", ["label" => "Dodaj opis: "])
                ->add("categories", EntityType::class, [
                    "class" => "SmallAdsBundle:Category", "choice_label" => "name",
                    "label" => "Wybierz kategorię: "])
                ->add("photos", "file", ["label" => "Wgraj foto (pliki: .jpg, .png)",
                    "data_class" => null,
                    "required" => false])
                ->add("save", "submit", ["label" => "Zapisz"])
                ->getForm();

        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $smallAd = $form->getData();
            $smallAd->setUser($user);
            $smallAd->setStartDate(new dateTime());
            $smallAd->setEndDate(new dateTime(date("Y-m-d H:i:s", time() + 3600 * 24 * 7)));

            $photos = $smallAd->getPhotos();
            if ($photos) {
                $photoName = date("YmdHis") . mt_rand(1, 9000) . "." . $photos->guessExtension();
                $photos->move($this->getParameter('img_directory'), $photoName);
                $smallAd->setPhotos($photoName);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($smallAd);
            $em->flush();
            return $this->redirectToRoute("smallads_smallad_show");
        }

        return $this->render('SmallAdsBundle:SmallAd:create.html.twig', array(
                    "form" => $form->createView()
        ));
    }

    /**
     * @Route("/edit")
     */
    public function editAction() {
        return $this->render('SmallAdsBundle:SmallAd:edit.html.twig', array(
                        // ...
        ));
    }

    /**
     * @Route("/show")
     */
    public function showAction() {
        return $this->render('SmallAdsBundle:SmallAd:show.html.twig', array(
                        // ...
        ));
    }

    /**
     * @Route("/showAll")
     */
    public function showAllAction() {
        return $this->render('SmallAdsBundle:SmallAd:show_all.html.twig', array(
                        // ...
        ));
    }

    /**
     * @Route("/{categoryId}/showAllByCategory")
     */
    public function showAllByCategoryAction($categoryId) {
        return $this->render('SmallAdsBundle:SmallAd:show_all.html.twig', array(
                        // ...
        ));
    }

    /**
     * @Route("/{adId}/delete")
     */
    public function deleteAction() {
        return $this->render('SmallAdsBundle:SmallAd:delete.html.twig', array(
                        // ...
        ));
    }

}
