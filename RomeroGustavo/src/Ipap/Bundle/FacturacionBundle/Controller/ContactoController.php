<?php

namespace Ipap\Bundle\FacturacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ContactoController extends Controller
{
    /**
     * @Route("/facturacion/contacto", name="contacto")
     * @Template("IpapFacturacionBundle:Facturacion:contacto.html.twig")
     */
    public function contactoAction()
    {
        return array('algo'=>"22");
    }

}
