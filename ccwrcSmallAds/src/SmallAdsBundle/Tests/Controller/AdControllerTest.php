<?php

namespace SmallAdsBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdControllerTest extends WebTestCase
{
    public function testCreatead()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createAd');
    }

    public function testEditad()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editAd');
    }

    public function testShowad()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showAd');
    }

    public function testShowallads()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showAllAds');
    }

    public function testShowalladsbycategory()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showAllAdsByCategory');
    }

    public function testDeletead()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteAd');
    }

}
