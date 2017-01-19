<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_52c9bcba44d84826f7fbea5318f28857becaf385698ba46c55319735196dd4db extends Twig_Template
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
        $__internal_42ec1e248b0770cb45a7f7a04db525a8f8a8389e22a30d9d2d57a3989cffd749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ec1e248b0770cb45a7f7a04db525a8f8a8389e22a30d9d2d57a3989cffd749->enter($__internal_42ec1e248b0770cb45a7f7a04db525a8f8a8389e22a30d9d2d57a3989cffd749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_0e10f7e37a1f0fe3915250108ed3b9be5738752386c896d5e9aa194007ae954f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e10f7e37a1f0fe3915250108ed3b9be5738752386c896d5e9aa194007ae954f->enter($__internal_0e10f7e37a1f0fe3915250108ed3b9be5738752386c896d5e9aa194007ae954f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_42ec1e248b0770cb45a7f7a04db525a8f8a8389e22a30d9d2d57a3989cffd749->leave($__internal_42ec1e248b0770cb45a7f7a04db525a8f8a8389e22a30d9d2d57a3989cffd749_prof);

        
        $__internal_0e10f7e37a1f0fe3915250108ed3b9be5738752386c896d5e9aa194007ae954f->leave($__internal_0e10f7e37a1f0fe3915250108ed3b9be5738752386c896d5e9aa194007ae954f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
