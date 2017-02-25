<?php

namespace SmallAdsBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommentControllerTest extends WebTestCase
{
    public function testCreatecomment()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createComment');
    }

    public function testEditcomment()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editComment');
    }

    public function testShowallcommentsbyad()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showAllCommentsByAd');
    }

    public function testDeletecomment()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteComment');
    }

}
