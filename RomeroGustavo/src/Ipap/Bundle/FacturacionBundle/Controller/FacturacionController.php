<?php

namespace Ipap\Bundle\FacturacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use \Ipap\Bundle\FacturacionBundle\Entity\Persona;
use \Ipap\Bundle\FacturacionBundle\Entity\Servicio;
use \Ipap\Bundle\FacturacionBundle\Entity\Pais;
use Symfony\Component\HttpFoundation\Response;
use \Doctrine\Common\Collections\ArrayCollection;
class FacturacionController extends Controller
{
    /**
     * @Route("/facturacion/nuevo/{nombre}")
     * @Template("IpapFacturacionBundle:Facturacion:facturacion.html.twig")
     */
    public function facturacionAction($nombre="Gustavo")
    {
        //$pais=new Pais();
        //$pais->setNombre("ARGENTINA");
        //$pais->setDescripcion("Argentina es mi país");
        
        //$em->persist($pais);
        //$em->flush();
        //return new Response('Created product id '.$product->getId());
        
        $servicio=new Servicio();
        $servicio->setNombre('DISEÑO GRAFICO');
        $servicio->setDescripcion('DISEÑO GRAFICO');
        $servicio->setPrecio(1.00);
        $em = $this->getDoctrine()->getManager();
        $em->persist($servicio);
        //$em->flush();
        return array('pais'=>$servicio->getNombre());
        /***
        $servicio = $this->getDoctrine()->getEntityManager()
        ->getRepository('IpapFacturacionBundle:Servicio')
        ->find(1);

        if (!$servicio) {
            throw $this->createNotFoundException(
                'No service found for id '
            );
         }
         */      
    }
    
    /**
     * @Route("/facturacion/crear")
     * @Template("IpapFacturacionBundle:Facturacion:facturacion.html.twig")
     */
    public function crearAction(){                  
        $servicio=new Servicio();
        $servicio->setNombre('IMPRESION');
        $servicio->setDescripcion('IMPRESIONES VARIAS');
        $servicio->setPrecio(0,30);
        $em = $this->getDoctrine()->getManager();
        $em->persist($servicio);
        $em->flush();
        return array('servicioCreado'=>"Servicio Agregado");
    }
    
    /**
     * @Route("/facturacion/indexList", name="servicio_List")
     * @Template("IpapFacturacionBundle:Facturacion:facturacion.html.twig")
     */    
    public function indexListAction(){
        $em=$this->getDoctrine()->getManager();
        $posts = $em
                ->createQuery('SELECT s FROM IpapFacturacionBundle:Servicio s')
                ->execute();
        //$coleccion=new ArrayCollection($posts);
        $nombre="IMPRESION";
        //return new Response($posts[0]->getNombre()."<br>".$posts[0]->getDescripcion()."<br>".$posts[0]->getPrecio().
        //        "<br><br>".$posts[1]->getNombre()."<br>".$posts[1]->getDescripcion()."<br>".$posts[1]->getPrecio());
        return array('nombre'=>$nombre);
    }
}
