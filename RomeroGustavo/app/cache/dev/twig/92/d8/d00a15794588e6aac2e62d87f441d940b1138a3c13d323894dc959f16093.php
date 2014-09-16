<?php

/* IpapCalculatorBundle:Calculator:operation.html.twig */
class __TwigTemplate_92d8d00a15794588e6aac2e62d87f441d940b1138a3c13d323894dc959f16093 extends Twig_Template
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
        echo "IpapCalculatorBundle:Calculator:operation";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    
<h1>Calculadora básica:</h1>

<label for=\"ab\">Valores pasados como par&aacutemetros</label><br>
<label for=\"a\">VALOR A</label>
<input type=\"text\" name=\"a\" id=\"a\" value=";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["varA"]) ? $context["varA"] : $this->getContext($context, "varA")), "html", null, true);
        echo "><br>
<label for=\"b\">VALOR B</label>
<input type=\"text\" name=\"b\" id=\"b\" value=";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["varB"]) ? $context["varB"] : $this->getContext($context, "varB")), "html", null, true);
        echo "><br>

<div>
</div>
El resultado de la operaci&oacute;n ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["operacion"]) ? $context["operacion"] : $this->getContext($context, "operacion")), "html", null, true);
        echo "<br> 
";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["varA"]) ? $context["varA"] : $this->getContext($context, "varA")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["operando"]) ? $context["operando"] : $this->getContext($context, "operando")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["varB"]) ? $context["varB"] : $this->getContext($context, "varB")), "html", null, true);
        echo " es:  ";
        echo twig_escape_filter($this->env, (isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")), "html", null, true);
        echo "<br>

<br>
<br>
 ";
        // line 21
        $context["frutas"] = array(0 => "manzana", 1 => "naranaja", 2 => "citricos");
        // line 22
        echo " ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 23
            echo "     ";
            echo twig_escape_filter($this->env, (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) . " ") . twig_cycle((isset($context["frutas"]) ? $context["frutas"] : $this->getContext($context, "frutas")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))), "html", null, true);
            echo "
     <br>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo " 
";
    }

    public function getTemplateName()
    {
        return "IpapCalculatorBundle:Calculator:operation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  81 => 23,  76 => 22,  74 => 21,  61 => 17,  57 => 16,  50 => 12,  45 => 10,  38 => 5,  35 => 4,  29 => 3,);
    }
}
