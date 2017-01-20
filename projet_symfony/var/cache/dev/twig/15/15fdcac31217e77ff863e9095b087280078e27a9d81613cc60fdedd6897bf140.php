<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_d9b928cd43dbe3fc3cf01ffa26f62a0dd2cf12b5670c9fc5a14894359edb7e0b extends Twig_Template
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
        $__internal_7ecf07697caa44d84dd63e5055e66573f679c9f610ddbffcfed4b9445bf3a386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ecf07697caa44d84dd63e5055e66573f679c9f610ddbffcfed4b9445bf3a386->enter($__internal_7ecf07697caa44d84dd63e5055e66573f679c9f610ddbffcfed4b9445bf3a386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_6d85fe5e34148612c6b69daedbe891bcb9d98b1d51223e6e48571889aefb79f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d85fe5e34148612c6b69daedbe891bcb9d98b1d51223e6e48571889aefb79f6->enter($__internal_6d85fe5e34148612c6b69daedbe891bcb9d98b1d51223e6e48571889aefb79f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_7ecf07697caa44d84dd63e5055e66573f679c9f610ddbffcfed4b9445bf3a386->leave($__internal_7ecf07697caa44d84dd63e5055e66573f679c9f610ddbffcfed4b9445bf3a386_prof);

        
        $__internal_6d85fe5e34148612c6b69daedbe891bcb9d98b1d51223e6e48571889aefb79f6->leave($__internal_6d85fe5e34148612c6b69daedbe891bcb9d98b1d51223e6e48571889aefb79f6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
