<?php

namespace SmallAdsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use \DateTime;

use SmallAdsBundle\Entity\Ad;

class AdController extends Controller {

    /**
     * @Route("/createAd")
     */
    public function createAdAction(Request $req) {
        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Dostęp zabroniony');
        $user = $this->container->get("security.context")->getToken()->getUser();
        $ad = new Ad();

        $form = $this->createFormBuilder($ad)
                ->setMethod("POST")
                ->add("title", "text", ["label" => "Podaj tytuł: "])
                ->add("description", "textarea", ["label" => "Dodaj opis: "])
                ->add("category", EntityType::class, [
                    "class" => "SmallAdsBundle:Category", "choice_label" => "name",
                    "label" => "Wybierz kategorię: "])
                ->add("photoPath", "file", ["label" => "Wgraj foto (pliki: .jpg, .png)",
                    "data_class" => null,
                    "required" => false])
                ->add("save", "submit", ["label" => "Zapisz"])
                ->getForm();

        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $ad = $form->getData();
            $ad->setUser($user);
            $ad->setEndDate(new dateTime(date("Y-m-d H:i:s", time() + 3600 * 24 * 7)));

            $photoPath = $ad->getPhotoPath();
            if ($photoPath) {
                $photoName = date("YmdHis") . mt_rand(1, 9999) . "." . $photoPath->guessExtension();
                $photoPath->move($this->getParameter('uploads_img'), $photoName);
                $ad->setPhotoPath($photoName);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($ad);
            $em->flush();
            return $this->redirectToRoute("smallads_ad_showallads");
        }

        return $this->render('SmallAdsBundle:Ad:create_ad.html.twig', array(
                    "form" => $form->createView()
        ));
    }

    /**
     * @Route("/{id}/editAd", requirements={"id"="\d+"})
     */
    public function editAdAction(Request $req, $id) {
        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Dostęp zabroniony');
        $user = $this->container->get("security.context")->getToken()->getUser();
        $ad = $this->getDoctrine()->getRepository("SmallAdsBundle:Ad")->find($id);
        $oldPhotoName = $ad->getPhotoPath();

        if ($user !== $ad->getUser()) {
            throw $this->createNotFoundException("Brak pasującego ID");
        }

        $form = $this->createFormBuilder($ad)
                ->setMethod("POST")
                ->add("title", "text", ["label" => "Edytuj tytuł: "])
                ->add("description", "textarea", ["label" => "Edytuj opis: "])
                ->add("category", EntityType::class, [
                    "class" => "SmallAdsBundle:Category", "choice_label" => "name",
                    "label" => "Zmień kategorię: "])
                ->add("photoPath", "file", ["label" => "Wgraj inne zdjęcie: ",
                    "data_class" => null,
                    "required" => false])
                ->add("save", "submit", ["label" => "Zapisz"])
                ->getForm();

        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $ad = $form->getData();
            $photoPath = $ad->getPhotoPath();
            if ($photoPath === null) {
                $ad->setPhotoPath($oldPhotoName);
            } else {
                $photoName = date("YmdHis") . mt_rand(1, 9999) . "." . $photoPath->guessExtension();
                $photoPath->move($this->getParameter('uploads_img'), $photoName);
                $ad->setPhotoPath($photoName);
            }

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("smallads_ad_showalladsbyuser");
        }

        return $this->render('SmallAdsBundle:Ad:edit_ad.html.twig', array(
                    "form" => $form->createView()
        ));
    }

    /**
     * @Route("/{id}/showAd", requirements={"id"="\d+"})
     */
    public function showAdAction($id) {
        $ad = $this->getDoctrine()->getRepository("SmallAdsBundle:Ad")->find($id);

        if ($ad == null) {
            throw $this->createNotFoundException("Brak ogłoszenia o podanym ID");
        }

        return $this->render('SmallAdsBundle:Ad:show_ad.html.twig', array(
                    "ad" => $ad
        ));
    }

    /**
     * @Route("/showAllAds")
     */
    public function showAllAdsAction() {
        $ads = $this->getDoctrine()->getRepository("SmallAdsBundle:Ad")->findAll();
        $categories = $this->getDoctrine()->getRepository("SmallAdsBundle:Category")->findAll();
        //TODO przebudowac na zapytanie z porowaniem dat
        return $this->render('SmallAdsBundle:Ad:show_all_ads.html.twig', array(
                    "ads" => $ads,
                    "categories" => $categories
        ));
    }

    /**
     * @Route("/{id}/showAllAdsByCategory", requirements={"id"="\d+"})
     */
    public function showAllAdsByCategoryAction($id) {
        $ads = $this->getDoctrine()->getRepository("SmallAdsBundle:Ad")->findByCategory($id);
        $categories = $this->getDoctrine()->getRepository("SmallAdsBundle:Category")->findAll();
        //TODO przebudowac na zapytanie z porowaniem dat
        return $this->render('SmallAdsBundle:Ad:show_all_ads.html.twig', array(
                    "ads" => $ads,
                    "categories" => $categories
        ));
    }

    /**
     * @Route("/showAllAdsByUser")
     */
    public function showAllAdsByUserAction() {
        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Dostęp zabroniony');
        $user = $this->container->get("security.context")->getToken()->getUser();
        $ads = $this->getDoctrine()->getRepository("SmallAdsBundle:Ad")->findByUser($user);

        return $this->render('SmallAdsBundle:Ad:show_all_ads_by_user.html.twig', array(
                    "ads" => $ads
        ));
    }

    /**
     * @Route("/{id}/deleteAd", requirements={"id"="\d+"})
     */
    public function deleteAdAction($id) {
        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Dostęp zabroniony');
        $user = $this->container->get("security.context")->getToken()->getUser();
        $ad = $this->getDoctrine()->getRepository("SmallAdsBundle:Ad")->find($id);

        if ($user === $ad->getUser()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ad);
            $em->flush();
        }

        return $this->redirectToRoute("smallads_ad_showalladsbyuser");
    }

}
