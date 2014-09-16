<?php

/* IpapCalculatorBundle:Calculator:salida.html.twig */
class __TwigTemplate_6cb7ca041454fa684f76e65cd0f218c6b61f4f9997aefd4ef141be47738419aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
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

    // line 4
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6283bff_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6283bff_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6283bff_estilos_1.css");
            // line 7
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />   
    ";
        } else {
            // asset "6283bff"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6283bff") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6283bff.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />   
    ";
        }
        unset($context["asset_url"]);
        // line 8
        echo "       
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    Probando Less Css en Symfony 2
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ipapfacturacion/images/pajaros_bailando.gif"), "html", null, true);
        echo "\"/>    
    <h1>Prueba de PreCompilador LESS CSS</h1>
    ";
        // line 18
        $this->displayBlock('sidebar', $context, $blocks);
        // line 25
        echo "    <div class='div'>
        <h1 class='centrar'>Algo aqu&iacute</h1>
    </div>
    <br>
    <br>
    <label for=\"textbox\">Texto:</label>
    <input type=\"text\" id=\"textbox\" placeholder=\"introduce un texto\" />
";
    }

    // line 18
    public function block_sidebar($context, array $blocks = array())
    {
        // line 19
        echo "    <ol>
\t<li class=\"hyperlink\">UNO </li>
\t<li>Dos</li>
\t<li>Tres</li>
    </ol>
    ";
    }

    public function getTemplateName()
    {
        return "IpapCalculatorBundle:Calculator:salida.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 19,  92 => 18,  81 => 25,  79 => 18,  73 => 16,  70 => 15,  65 => 12,  62 => 11,  57 => 8,  43 => 7,  39 => 6,  34 => 5,  31 => 4,);
    }
}
