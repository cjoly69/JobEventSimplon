<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1c2610247c2699547dbe923227a0a5cfe5a3ef83069ffaebf6abd5bcdb24628d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1e6b16a48d81fd3bf4508406b3fa5f757a5027be3292b83c2b73939f8c663bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6b16a48d81fd3bf4508406b3fa5f757a5027be3292b83c2b73939f8c663bef->enter($__internal_1e6b16a48d81fd3bf4508406b3fa5f757a5027be3292b83c2b73939f8c663bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cb6f43ddcab17f8e41d8314e7e392081c1617b3cae97a01df3bbdbef7389f063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6f43ddcab17f8e41d8314e7e392081c1617b3cae97a01df3bbdbef7389f063->enter($__internal_cb6f43ddcab17f8e41d8314e7e392081c1617b3cae97a01df3bbdbef7389f063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e6b16a48d81fd3bf4508406b3fa5f757a5027be3292b83c2b73939f8c663bef->leave($__internal_1e6b16a48d81fd3bf4508406b3fa5f757a5027be3292b83c2b73939f8c663bef_prof);

        
        $__internal_cb6f43ddcab17f8e41d8314e7e392081c1617b3cae97a01df3bbdbef7389f063->leave($__internal_cb6f43ddcab17f8e41d8314e7e392081c1617b3cae97a01df3bbdbef7389f063_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2148fb81a962e91ca4c0f60e5d5ec41f2104ddaf4653f9fb8e8021de69a978d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2148fb81a962e91ca4c0f60e5d5ec41f2104ddaf4653f9fb8e8021de69a978d0->enter($__internal_2148fb81a962e91ca4c0f60e5d5ec41f2104ddaf4653f9fb8e8021de69a978d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_885875825ce372208a8a42956e82cb0a6edf87948238106d3a21473b443ff519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885875825ce372208a8a42956e82cb0a6edf87948238106d3a21473b443ff519->enter($__internal_885875825ce372208a8a42956e82cb0a6edf87948238106d3a21473b443ff519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_885875825ce372208a8a42956e82cb0a6edf87948238106d3a21473b443ff519->leave($__internal_885875825ce372208a8a42956e82cb0a6edf87948238106d3a21473b443ff519_prof);

        
        $__internal_2148fb81a962e91ca4c0f60e5d5ec41f2104ddaf4653f9fb8e8021de69a978d0->leave($__internal_2148fb81a962e91ca4c0f60e5d5ec41f2104ddaf4653f9fb8e8021de69a978d0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36c449a0a14716e58f095164429215f76dc7e5abfcda0961024d0b7bd6d5f021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c449a0a14716e58f095164429215f76dc7e5abfcda0961024d0b7bd6d5f021->enter($__internal_36c449a0a14716e58f095164429215f76dc7e5abfcda0961024d0b7bd6d5f021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f057d09574a72adea449b30448a6daf4dfae66e5470e556dfaa9c35e9233bd80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f057d09574a72adea449b30448a6daf4dfae66e5470e556dfaa9c35e9233bd80->enter($__internal_f057d09574a72adea449b30448a6daf4dfae66e5470e556dfaa9c35e9233bd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f057d09574a72adea449b30448a6daf4dfae66e5470e556dfaa9c35e9233bd80->leave($__internal_f057d09574a72adea449b30448a6daf4dfae66e5470e556dfaa9c35e9233bd80_prof);

        
        $__internal_36c449a0a14716e58f095164429215f76dc7e5abfcda0961024d0b7bd6d5f021->leave($__internal_36c449a0a14716e58f095164429215f76dc7e5abfcda0961024d0b7bd6d5f021_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8ee936be2d8931419568e01bdc4d345f949e091b376c8e650557cc759b85c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ee936be2d8931419568e01bdc4d345f949e091b376c8e650557cc759b85c0c->enter($__internal_c8ee936be2d8931419568e01bdc4d345f949e091b376c8e650557cc759b85c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2f09a056d86cba69927ad1a3aeb8aa4eb40d761928f6c3780c6262a10828a75a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f09a056d86cba69927ad1a3aeb8aa4eb40d761928f6c3780c6262a10828a75a->enter($__internal_2f09a056d86cba69927ad1a3aeb8aa4eb40d761928f6c3780c6262a10828a75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2f09a056d86cba69927ad1a3aeb8aa4eb40d761928f6c3780c6262a10828a75a->leave($__internal_2f09a056d86cba69927ad1a3aeb8aa4eb40d761928f6c3780c6262a10828a75a_prof);

        
        $__internal_c8ee936be2d8931419568e01bdc4d345f949e091b376c8e650557cc759b85c0c->leave($__internal_c8ee936be2d8931419568e01bdc4d345f949e091b376c8e650557cc759b85c0c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
