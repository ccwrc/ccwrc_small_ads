<?php

namespace SmallAdsBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategoryControllerTest extends WebTestCase
{
    public function testCreatecategory()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createCategory');
    }

    public function testEditcategory()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editCategory');
    }

    public function testShowallcategories()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showAllCategories');
    }

    public function testDeletecategory()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteCategory');
    }

}
