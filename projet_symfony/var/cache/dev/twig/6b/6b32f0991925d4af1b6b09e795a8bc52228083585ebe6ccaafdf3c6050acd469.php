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
        $__internal_dcbc1d933a255e4f885338d8fff3062146898e3f4e9ea3fcfcd5621845c4c22c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcbc1d933a255e4f885338d8fff3062146898e3f4e9ea3fcfcd5621845c4c22c->enter($__internal_dcbc1d933a255e4f885338d8fff3062146898e3f4e9ea3fcfcd5621845c4c22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c099121d2342722e1ffd6ef7063d3c1935e037363791bf3af9aeddafdb4911d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c099121d2342722e1ffd6ef7063d3c1935e037363791bf3af9aeddafdb4911d3->enter($__internal_c099121d2342722e1ffd6ef7063d3c1935e037363791bf3af9aeddafdb4911d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_dcbc1d933a255e4f885338d8fff3062146898e3f4e9ea3fcfcd5621845c4c22c->leave($__internal_dcbc1d933a255e4f885338d8fff3062146898e3f4e9ea3fcfcd5621845c4c22c_prof);

        
        $__internal_c099121d2342722e1ffd6ef7063d3c1935e037363791bf3af9aeddafdb4911d3->leave($__internal_c099121d2342722e1ffd6ef7063d3c1935e037363791bf3af9aeddafdb4911d3_prof);

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
