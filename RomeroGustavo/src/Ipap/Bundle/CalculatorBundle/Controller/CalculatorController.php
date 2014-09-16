<?php
namespace Ipap\Bundle\CalculatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class CalculatorController extends Controller
{
    /**
     * @Route("/operation/{A}/{B}/{valor}")
     * @Template()
     */
    
    public function operationAction($A=0, $B=0, $valor='suma')
    {
        $resultado;
        $operando;
        switch($valor){
            case 'suma':
                $resultado=$A+$B;
                $operando='+';
                break;
            case 'resta';
                $resultado=$A-$B;
                $operando='-';
                break;
            case 'multiplicacion':
                $resultado=$A*$B;
                $operando='*';
                break;
            case 'division':
                $resultado=$A/$B;
                $operando='/';
                break;
        }
        
        //return new Response("La suma de ".$A." + ".$B." es: ".$resultado);
        return array('varA'=>$A, 'varB'=>$B,'resultado'=>$resultado, 'operacion'=>$valor, 'operando'=>$operando);        
        //return $this->render('IpapCalculatorBundle:Calculator:operation.html.twig', array(
        //   'articulo' => $resultado));
    }
    
    /**
     * @Route("/salida")
     * @Template()
     */
    public function salidaAction(){
        return array('1'=>'2');
    }

}
