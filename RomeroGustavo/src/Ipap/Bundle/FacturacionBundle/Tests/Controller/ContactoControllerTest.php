<?php

namespace Ipap\Bundle\FacturacionBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContactoControllerTest extends WebTestCase
{
    public function testContacto()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contacto');
    }

}
