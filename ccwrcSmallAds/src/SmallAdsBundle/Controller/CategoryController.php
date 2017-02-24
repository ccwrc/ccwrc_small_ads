<?php

namespace SmallAdsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use SmallAdsBundle\Entity\Category;

/**
 * @Route("/category")
 */
class CategoryController extends Controller {
    
    /**
     * @Route("/create")
     */
    public function createAction(Request $req) {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Dostęp zabroniony');

        $category = new Category();
        $form = $this->createFormBuilder($category)
                ->setMethod("POST")
                ->add("name", "text", ["label" => "Podaj nazwę kategorii"])
                ->add("save", "submit", ["label" => "Zapisz"])
                ->getForm();

        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $category = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
            return $this->redirectToRoute("smallads_category_showall");
        }

        return $this->render('SmallAdsBundle:Category:create.html.twig', array(
                    "form" => $form->createView()
        ));
    }

    /**
     * @Route("/{id}/edit", requirements={"id"="\d+"})
     */
    public function editAction(Request $req, $id) {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Dostęp zabroniony');
        $category = $this->getDoctrine()->getRepository("SmallAdsBundle:Category")->find($id);

        if ($category == null) {
            throw $this->createNotFoundException("Brak ID w bazie");
        }

        $form = $this->createFormBuilder($category)
                ->setMethod("POST")
                ->add("name", "text", ["label" => "Edytuj nazwę kategorii"])
                ->add("save", "submit", ["label" => "Zapisz"])
                ->getForm();

        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $category = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("smallads_category_showall");
        }

        return $this->render('SmallAdsBundle:Category:edit.html.twig', array(
                    "form" => $form->createView()
        ));
    }

    /**
     * @Route("/show")
     */
    public function showAction() {
        //
        
        return $this->render('SmallAdsBundle:Category:show.html.twig', array(
            // ...
        ));
    }
    
    /**
     * @Route("/showAll")
     */
    public function showAllAction() {
        //

        return $this->render('SmallAdsBundle:Category:show_all.html.twig', array(
                        // ...
        ));
    }

    /**
     * @Route("/{id}/delete", requirements={"id"="\d+"})
     */
    public function deleteAction($id) {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Dostęp zabroniony');
        $category = $this->getDoctrine()->getRepository("SmallAdsBundle:Category")->find($id);

        if ($category == null) {
            throw $this->createNotFoundException("Brak ID w bazie");
        }
        
        $em = $this->getDoctrine()->getManager();
        $em->remove($category);
        $em->flush();

        return $this->redirectToRoute("smallads_category_showall");
    }

}
