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
        $__internal_0be9ae4ecbce1d3dc5f834560daf4092f16e3f88c26429c8b21918fa9e45f799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be9ae4ecbce1d3dc5f834560daf4092f16e3f88c26429c8b21918fa9e45f799->enter($__internal_0be9ae4ecbce1d3dc5f834560daf4092f16e3f88c26429c8b21918fa9e45f799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_ee233f5f28e0bc4f6260e725547dc276420d81629595e462db6009a42ac3ecc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee233f5f28e0bc4f6260e725547dc276420d81629595e462db6009a42ac3ecc3->enter($__internal_ee233f5f28e0bc4f6260e725547dc276420d81629595e462db6009a42ac3ecc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be9ae4ecbce1d3dc5f834560daf4092f16e3f88c26429c8b21918fa9e45f799->leave($__internal_0be9ae4ecbce1d3dc5f834560daf4092f16e3f88c26429c8b21918fa9e45f799_prof);

        
        $__internal_ee233f5f28e0bc4f6260e725547dc276420d81629595e462db6009a42ac3ecc3->leave($__internal_ee233f5f28e0bc4f6260e725547dc276420d81629595e462db6009a42ac3ecc3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4edf2c1e7328f31a41255d3633eab9c5668681a3e4432d2433d73932deadd096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4edf2c1e7328f31a41255d3633eab9c5668681a3e4432d2433d73932deadd096->enter($__internal_4edf2c1e7328f31a41255d3633eab9c5668681a3e4432d2433d73932deadd096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc2f370ef4b0fe391206195d2394babf41edecbdcfff99e7c5e226bb441dd138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc2f370ef4b0fe391206195d2394babf41edecbdcfff99e7c5e226bb441dd138->enter($__internal_bc2f370ef4b0fe391206195d2394babf41edecbdcfff99e7c5e226bb441dd138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_bc2f370ef4b0fe391206195d2394babf41edecbdcfff99e7c5e226bb441dd138->leave($__internal_bc2f370ef4b0fe391206195d2394babf41edecbdcfff99e7c5e226bb441dd138_prof);

        
        $__internal_4edf2c1e7328f31a41255d3633eab9c5668681a3e4432d2433d73932deadd096->leave($__internal_4edf2c1e7328f31a41255d3633eab9c5668681a3e4432d2433d73932deadd096_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_26214c50377233e338df399da2145b2a8351a1844002f86142e07ff3f077b83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26214c50377233e338df399da2145b2a8351a1844002f86142e07ff3f077b83e->enter($__internal_26214c50377233e338df399da2145b2a8351a1844002f86142e07ff3f077b83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c33c27308da8d5bafd836ac0835b9b76cd5b09a65ee109dd58d46d1e050163e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33c27308da8d5bafd836ac0835b9b76cd5b09a65ee109dd58d46d1e050163e7->enter($__internal_c33c27308da8d5bafd836ac0835b9b76cd5b09a65ee109dd58d46d1e050163e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c33c27308da8d5bafd836ac0835b9b76cd5b09a65ee109dd58d46d1e050163e7->leave($__internal_c33c27308da8d5bafd836ac0835b9b76cd5b09a65ee109dd58d46d1e050163e7_prof);

        
        $__internal_26214c50377233e338df399da2145b2a8351a1844002f86142e07ff3f077b83e->leave($__internal_26214c50377233e338df399da2145b2a8351a1844002f86142e07ff3f077b83e_prof);

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
