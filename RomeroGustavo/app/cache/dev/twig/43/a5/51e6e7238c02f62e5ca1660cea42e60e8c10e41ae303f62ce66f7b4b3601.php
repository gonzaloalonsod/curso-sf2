<?php

/* IpapFacturacionBundle:Facturacion:facturacion.html.twig */
class __TwigTemplate_43a551e6e7238c02f62e5ca1660cea42e60e8c10e41ae303f62ce66f7b4b3601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "IpapFacturacionBundle:Facturacion:facturacion";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Facturaci&oacuten </h1>
    <table>
        <thead>
            <tr>
                <td>Encabezado A</td>
                <td>Encabezado B</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("contacto");
        echo "\">Contacto</a>
                </td>
                <td>
                    <a href=\"/app_dev.php/facturacion/contacto\">Listado</a>
                </td>
            </tr>
                
        </tbody>
    </table>
    ";
        // line 26
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "IpapFacturacionBundle:Facturacion:facturacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 26,  51 => 17,  38 => 6,  35 => 5,  29 => 3,);
    }
}
