<?php

namespace SmallAdsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/comment")
 */
class CommentController extends Controller
{
    /**
     * @Route("/create")
     */
    public function createAction()
    {
        return $this->render('SmallAdsBundle:Comment:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/edit")
     */
    public function editAction()
    {
        return $this->render('SmallAdsBundle:Comment:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/show")
     */
    public function showAction()
    {
        return $this->render('SmallAdsBundle:Comment:show.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showAll")
     */
    public function showAllAction()
    {
        return $this->render('SmallAdsBundle:Comment:show_all.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('SmallAdsBundle:Comment:delete.html.twig', array(
            // ...
        ));
    }

}
