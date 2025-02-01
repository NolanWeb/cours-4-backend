<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class PersonneTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = PersonneTest::createClient();
        $client->request('GET', '/personne');

        self::assertResponseIsSuccessful();
    }
}