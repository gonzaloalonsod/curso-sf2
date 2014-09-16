<?php

/* IpapFacturacionBundle:Facturacion:contacto.html.twig */
class __TwigTemplate_f0e18949db0f5f6078398d76cf70a6cda7cb6757a39e44d3f6a42f764f131b84 extends Twig_Template
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
        echo "IpapFacturacionBundle:Contacto:contacto";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Bienvenido a nuestra página de contacto...</h1>

";
    }

    public function getTemplateName()
    {
        return "IpapFacturacionBundle:Facturacion:contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
