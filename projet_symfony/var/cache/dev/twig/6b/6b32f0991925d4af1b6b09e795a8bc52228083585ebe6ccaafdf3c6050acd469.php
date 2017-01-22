<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_9ab99efd3743c9cf6c8dd7b5a214b8e095b9dc9afdd72673c1d9a2ff7a7a5c0c extends Twig_Template
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
        $__internal_35620600a9e6cf3a4264931e944c353a41d4e15b8905200bc09796bd3f845928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35620600a9e6cf3a4264931e944c353a41d4e15b8905200bc09796bd3f845928->enter($__internal_35620600a9e6cf3a4264931e944c353a41d4e15b8905200bc09796bd3f845928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_06fef974f28112d7191febfa4e54b1c73f50c2dc4ca9a55509473bf81c998ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06fef974f28112d7191febfa4e54b1c73f50c2dc4ca9a55509473bf81c998ce3->enter($__internal_06fef974f28112d7191febfa4e54b1c73f50c2dc4ca9a55509473bf81c998ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_35620600a9e6cf3a4264931e944c353a41d4e15b8905200bc09796bd3f845928->leave($__internal_35620600a9e6cf3a4264931e944c353a41d4e15b8905200bc09796bd3f845928_prof);

        
        $__internal_06fef974f28112d7191febfa4e54b1c73f50c2dc4ca9a55509473bf81c998ce3->leave($__internal_06fef974f28112d7191febfa4e54b1c73f50c2dc4ca9a55509473bf81c998ce3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
