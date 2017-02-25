<?php

namespace SmallAdsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CommentController extends Controller
{
    /**
     * @Route("/createComment")
     */
    public function createCommentAction()
    {
        return $this->render('SmallAdsBundle:Comment:create_comment.html.twig', array(
            // ...
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
     * @Route("/deleteComment")
     */
    public function deleteCommentAction()
    {
        return $this->render('SmallAdsBundle:Comment:delete_comment.html.twig', array(
            // ...
        ));
    }

}
