<?php

namespace SmallAdsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdController extends Controller
{
    /**
     * @Route("/createAd")
     */
    public function createAdAction()
    {
        return $this->render('SmallAdsBundle:Ad:create_ad.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/editAd")
     */
    public function editAdAction()
    {
        return $this->render('SmallAdsBundle:Ad:edit_ad.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showAd")
     */
    public function showAdAction()
    {
        return $this->render('SmallAdsBundle:Ad:show_ad.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showAllAds")
     */
    public function showAllAdsAction()
    {
        return $this->render('SmallAdsBundle:Ad:show_all_ads.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showAllAdsByCategory")
     */
    public function showAllAdsByCategoryAction()
    {
        return $this->render('SmallAdsBundle:Ad:show_all_ads_by_category.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deleteAd")
     */
    public function deleteAdAction()
    {
        return $this->render('SmallAdsBundle:Ad:delete_ad.html.twig', array(
            // ...
        ));
    }

}
