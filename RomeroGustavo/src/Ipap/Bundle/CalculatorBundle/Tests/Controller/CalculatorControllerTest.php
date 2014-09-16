<?php

namespace Ipap\Bundle\CalculatorBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CalculatorControllerTest extends WebTestCase
{
    public function testOperation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'operation');
    }

}
