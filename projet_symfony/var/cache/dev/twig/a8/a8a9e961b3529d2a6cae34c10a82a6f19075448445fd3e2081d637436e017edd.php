<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_31616894c44433dc2d61eda866f72ae17828172057d572706835740134ae5c07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3097eb98f90c1c0cebc0e55bffb89aed02437ad595207b372a4d7b0b27e92cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3097eb98f90c1c0cebc0e55bffb89aed02437ad595207b372a4d7b0b27e92cfa->enter($__internal_3097eb98f90c1c0cebc0e55bffb89aed02437ad595207b372a4d7b0b27e92cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_7eea8def4d709df205e3047eb05377002d849b2097dc12872a3cdf6dd9207d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eea8def4d709df205e3047eb05377002d849b2097dc12872a3cdf6dd9207d3c->enter($__internal_7eea8def4d709df205e3047eb05377002d849b2097dc12872a3cdf6dd9207d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3097eb98f90c1c0cebc0e55bffb89aed02437ad595207b372a4d7b0b27e92cfa->leave($__internal_3097eb98f90c1c0cebc0e55bffb89aed02437ad595207b372a4d7b0b27e92cfa_prof);

        
        $__internal_7eea8def4d709df205e3047eb05377002d849b2097dc12872a3cdf6dd9207d3c->leave($__internal_7eea8def4d709df205e3047eb05377002d849b2097dc12872a3cdf6dd9207d3c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
