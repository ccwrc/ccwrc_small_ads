<?php

namespace SmallAdsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SmallAdController extends Controller
{
    /**
     * @Route("/create")
     */
    public function createAction()
    {
        return $this->render('SmallAdsBundle:SmallAd:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/edit")
     */
    public function editAction()
    {
        return $this->render('SmallAdsBundle:SmallAd:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/show")
     */
    public function showAction()
    {
        return $this->render('SmallAdsBundle:SmallAd:show.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showAll")
     */
    public function showAllAction()
    {
        return $this->render('SmallAdsBundle:SmallAd:show_all.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('SmallAdsBundle:SmallAd:delete.html.twig', array(
            // ...
        ));
    }

}
