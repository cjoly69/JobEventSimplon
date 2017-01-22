<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_bdf241645c4cf382ba511a98e963ea4b256d240ae44647916e03970b85063f1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eabb2db3f3047c3d4435993659161f042e4b8928fb4a91668dad601f2dee4519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eabb2db3f3047c3d4435993659161f042e4b8928fb4a91668dad601f2dee4519->enter($__internal_eabb2db3f3047c3d4435993659161f042e4b8928fb4a91668dad601f2dee4519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_3b4724e115d269a698697ca0c4acb070c340494e68a634961b5e5bcbcf2005a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4724e115d269a698697ca0c4acb070c340494e68a634961b5e5bcbcf2005a7->enter($__internal_3b4724e115d269a698697ca0c4acb070c340494e68a634961b5e5bcbcf2005a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eabb2db3f3047c3d4435993659161f042e4b8928fb4a91668dad601f2dee4519->leave($__internal_eabb2db3f3047c3d4435993659161f042e4b8928fb4a91668dad601f2dee4519_prof);

        
        $__internal_3b4724e115d269a698697ca0c4acb070c340494e68a634961b5e5bcbcf2005a7->leave($__internal_3b4724e115d269a698697ca0c4acb070c340494e68a634961b5e5bcbcf2005a7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_80d83ed1620a0dfbb9c8201bbfe8660fc7c4ab0246eda94d393aa5f2d82f5711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d83ed1620a0dfbb9c8201bbfe8660fc7c4ab0246eda94d393aa5f2d82f5711->enter($__internal_80d83ed1620a0dfbb9c8201bbfe8660fc7c4ab0246eda94d393aa5f2d82f5711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_55573f8920ca61d09a2a3f8bb7528082ff46d8d7eba6bf63d5a553a5ad658628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55573f8920ca61d09a2a3f8bb7528082ff46d8d7eba6bf63d5a553a5ad658628->enter($__internal_55573f8920ca61d09a2a3f8bb7528082ff46d8d7eba6bf63d5a553a5ad658628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_55573f8920ca61d09a2a3f8bb7528082ff46d8d7eba6bf63d5a553a5ad658628->leave($__internal_55573f8920ca61d09a2a3f8bb7528082ff46d8d7eba6bf63d5a553a5ad658628_prof);

        
        $__internal_80d83ed1620a0dfbb9c8201bbfe8660fc7c4ab0246eda94d393aa5f2d82f5711->leave($__internal_80d83ed1620a0dfbb9c8201bbfe8660fc7c4ab0246eda94d393aa5f2d82f5711_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d747f917fc767d518100439068e3be19fb72cf1f050735773a23a906525436ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d747f917fc767d518100439068e3be19fb72cf1f050735773a23a906525436ff->enter($__internal_d747f917fc767d518100439068e3be19fb72cf1f050735773a23a906525436ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0a42df0753077c02ae8e4b3c455863e47fe5c48c7e2f59a1943429d1eda5fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a42df0753077c02ae8e4b3c455863e47fe5c48c7e2f59a1943429d1eda5fbe->enter($__internal_a0a42df0753077c02ae8e4b3c455863e47fe5c48c7e2f59a1943429d1eda5fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_a0a42df0753077c02ae8e4b3c455863e47fe5c48c7e2f59a1943429d1eda5fbe->leave($__internal_a0a42df0753077c02ae8e4b3c455863e47fe5c48c7e2f59a1943429d1eda5fbe_prof);

        
        $__internal_d747f917fc767d518100439068e3be19fb72cf1f050735773a23a906525436ff->leave($__internal_d747f917fc767d518100439068e3be19fb72cf1f050735773a23a906525436ff_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
