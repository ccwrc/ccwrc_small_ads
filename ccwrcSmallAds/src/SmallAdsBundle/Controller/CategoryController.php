<?php

namespace SmallAdsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CategoryController extends Controller
{
    /**
     * @Route("/createCategory")
     */
    public function createCategoryAction()
    {
        return $this->render('SmallAdsBundle:Category:create_category.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/editCategory")
     */
    public function editCategoryAction()
    {
        return $this->render('SmallAdsBundle:Category:edit_category.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showAllCategories")
     */
    public function showAllCategoriesAction()
    {
        return $this->render('SmallAdsBundle:Category:show_all_categories.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deleteCategory")
     */
    public function deleteCategoryAction()
    {
        return $this->render('SmallAdsBundle:Category:delete_category.html.twig', array(
            // ...
        ));
    }

}
