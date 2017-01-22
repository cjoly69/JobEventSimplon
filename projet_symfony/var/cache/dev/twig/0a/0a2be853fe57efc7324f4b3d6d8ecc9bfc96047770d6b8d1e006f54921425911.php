<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_462a1ca018458cfc2eea4660297591fe35129192fbf19c7b5d06cb074bfbb934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c56d4c94189cbe776f491fec1f9f75516cc441b405fbbd4e4ba3cb11eca277ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c56d4c94189cbe776f491fec1f9f75516cc441b405fbbd4e4ba3cb11eca277ce->enter($__internal_c56d4c94189cbe776f491fec1f9f75516cc441b405fbbd4e4ba3cb11eca277ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8d8caef57f07535c9719da4f10e16dc1ef8ae7f91b46d8904ccb64aad93fc69d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8caef57f07535c9719da4f10e16dc1ef8ae7f91b46d8904ccb64aad93fc69d->enter($__internal_8d8caef57f07535c9719da4f10e16dc1ef8ae7f91b46d8904ccb64aad93fc69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c56d4c94189cbe776f491fec1f9f75516cc441b405fbbd4e4ba3cb11eca277ce->leave($__internal_c56d4c94189cbe776f491fec1f9f75516cc441b405fbbd4e4ba3cb11eca277ce_prof);

        
        $__internal_8d8caef57f07535c9719da4f10e16dc1ef8ae7f91b46d8904ccb64aad93fc69d->leave($__internal_8d8caef57f07535c9719da4f10e16dc1ef8ae7f91b46d8904ccb64aad93fc69d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_412a1f4dd18bb3308a4d7040b4219bf2c9dabc7dbf7854ee705a955a4eb295c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_412a1f4dd18bb3308a4d7040b4219bf2c9dabc7dbf7854ee705a955a4eb295c4->enter($__internal_412a1f4dd18bb3308a4d7040b4219bf2c9dabc7dbf7854ee705a955a4eb295c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a21eedc095fa910f32e8688d37cf068c3c4e22eb6a0c5f8f69a4c7c68d2ef753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21eedc095fa910f32e8688d37cf068c3c4e22eb6a0c5f8f69a4c7c68d2ef753->enter($__internal_a21eedc095fa910f32e8688d37cf068c3c4e22eb6a0c5f8f69a4c7c68d2ef753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a21eedc095fa910f32e8688d37cf068c3c4e22eb6a0c5f8f69a4c7c68d2ef753->leave($__internal_a21eedc095fa910f32e8688d37cf068c3c4e22eb6a0c5f8f69a4c7c68d2ef753_prof);

        
        $__internal_412a1f4dd18bb3308a4d7040b4219bf2c9dabc7dbf7854ee705a955a4eb295c4->leave($__internal_412a1f4dd18bb3308a4d7040b4219bf2c9dabc7dbf7854ee705a955a4eb295c4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d1a1bc75335a616cd1265f31c1821558b1ac4abc1c0d3a98640d2ab4df7af5b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a1bc75335a616cd1265f31c1821558b1ac4abc1c0d3a98640d2ab4df7af5b3->enter($__internal_d1a1bc75335a616cd1265f31c1821558b1ac4abc1c0d3a98640d2ab4df7af5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0b26a9df639ac22663183335a73a1b05c78edd9383bcca5c764bb98d89e4fc88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b26a9df639ac22663183335a73a1b05c78edd9383bcca5c764bb98d89e4fc88->enter($__internal_0b26a9df639ac22663183335a73a1b05c78edd9383bcca5c764bb98d89e4fc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0b26a9df639ac22663183335a73a1b05c78edd9383bcca5c764bb98d89e4fc88->leave($__internal_0b26a9df639ac22663183335a73a1b05c78edd9383bcca5c764bb98d89e4fc88_prof);

        
        $__internal_d1a1bc75335a616cd1265f31c1821558b1ac4abc1c0d3a98640d2ab4df7af5b3->leave($__internal_d1a1bc75335a616cd1265f31c1821558b1ac4abc1c0d3a98640d2ab4df7af5b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c97d876ef818b0fb3e92a223940256f325a87cc350713798a49a4c06d66885cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97d876ef818b0fb3e92a223940256f325a87cc350713798a49a4c06d66885cc->enter($__internal_c97d876ef818b0fb3e92a223940256f325a87cc350713798a49a4c06d66885cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_36df1158ae42e6d4bed91992e9a9dae877e6918c2ef9cbb8beac5a17e77c302b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36df1158ae42e6d4bed91992e9a9dae877e6918c2ef9cbb8beac5a17e77c302b->enter($__internal_36df1158ae42e6d4bed91992e9a9dae877e6918c2ef9cbb8beac5a17e77c302b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_36df1158ae42e6d4bed91992e9a9dae877e6918c2ef9cbb8beac5a17e77c302b->leave($__internal_36df1158ae42e6d4bed91992e9a9dae877e6918c2ef9cbb8beac5a17e77c302b_prof);

        
        $__internal_c97d876ef818b0fb3e92a223940256f325a87cc350713798a49a4c06d66885cc->leave($__internal_c97d876ef818b0fb3e92a223940256f325a87cc350713798a49a4c06d66885cc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
