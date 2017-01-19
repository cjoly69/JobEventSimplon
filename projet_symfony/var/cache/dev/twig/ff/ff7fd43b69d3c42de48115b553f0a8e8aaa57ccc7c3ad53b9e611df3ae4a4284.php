<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d309c8bd7565076864a8185c845bde9443506653e76e18473f6882ac8447617b extends Twig_Template
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
        $__internal_023bd7aa976311debf339308ba392f8bb0d0e3bee42415045544fb8a9e37a61c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_023bd7aa976311debf339308ba392f8bb0d0e3bee42415045544fb8a9e37a61c->enter($__internal_023bd7aa976311debf339308ba392f8bb0d0e3bee42415045544fb8a9e37a61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_7f2d5025e4d623a31948b0ed10cbac72c062beaffebe56f01b7af1c5defe97ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2d5025e4d623a31948b0ed10cbac72c062beaffebe56f01b7af1c5defe97ff->enter($__internal_7f2d5025e4d623a31948b0ed10cbac72c062beaffebe56f01b7af1c5defe97ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_023bd7aa976311debf339308ba392f8bb0d0e3bee42415045544fb8a9e37a61c->leave($__internal_023bd7aa976311debf339308ba392f8bb0d0e3bee42415045544fb8a9e37a61c_prof);

        
        $__internal_7f2d5025e4d623a31948b0ed10cbac72c062beaffebe56f01b7af1c5defe97ff->leave($__internal_7f2d5025e4d623a31948b0ed10cbac72c062beaffebe56f01b7af1c5defe97ff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
