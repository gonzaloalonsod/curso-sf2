<?php

namespace Ipap\Bundle\FacturacionBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FacturacionControllerTest extends WebTestCase
{
    public function testFacturacion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/facturacion/{$name}');
    }

}
