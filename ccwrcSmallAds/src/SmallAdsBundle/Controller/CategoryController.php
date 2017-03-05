<?php

namespace SmallAdsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use SmallAdsBundle\Entity\Category;
use SmallAdsBundle\Form\CategoryType;

class CategoryController extends Controller {

    /**
     * @Route("/createCategory")
     */
    public function createCategoryAction(Request $req) {
        $this->denyAccessUnlessGranted("ROLE_ADMIN", null, "Dostęp zabroniony");

        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $category = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
            return $this->redirectToRoute("smallads_category_showallcategories");
        }

        return $this->render('SmallAdsBundle:Category:create_category.html.twig', array(
                    "form" => $form->createView()
        ));
    }

    /**
     * @Route("/{id}/editCategory", requirements={"id"="\d+"})
     */
    public function editCategoryAction(Request $req, $id) {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Dostęp zabroniony');
        $category = $this->getDoctrine()->getRepository("SmallAdsBundle:Category")->find($id);

        if ($category == null) {
            throw $this->createNotFoundException("Brak ID w bazie");
        }

        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $category = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("smallads_category_showallcategories");
        }

        return $this->render('SmallAdsBundle:Category:edit_category.html.twig', array(
                    "form" => $form->createView()
        ));
    }

    /**
     * @Route("/showAllCategories")
     */
    public function showAllCategoriesAction() {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Dostęp zabroniony');
        $categories = $this->getDoctrine()->getRepository("SmallAdsBundle:Category")->findAll();

        return $this->render('SmallAdsBundle:Category:show_all_categories.html.twig', array(
                    "categories" => $categories
        ));
    }

    /**
     * @Route("/{id}/deleteCategory", requirements={"id"="\d+"})
     */
    public function deleteCategoryAction($id) {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Dostęp zabroniony');
        $category = $this->getDoctrine()->getRepository("SmallAdsBundle:Category")->find($id);

        if ($category == null) {
            throw $this->createNotFoundException("Brak ID w bazie");
        }
    //TODO dodac poxniej ifa -> nie jesli sa ogloszenia aktywne
        $em = $this->getDoctrine()->getManager();
        $em->remove($category);
        $em->flush();

        return $this->redirectToRoute("smallads_category_showallcategories");
    }

}
