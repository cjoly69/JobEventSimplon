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
        $__internal_b49999139cb245ec06eb5edea133b3dfb109ba1f95a2876f498694370b6bc807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49999139cb245ec06eb5edea133b3dfb109ba1f95a2876f498694370b6bc807->enter($__internal_b49999139cb245ec06eb5edea133b3dfb109ba1f95a2876f498694370b6bc807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a499f2925ad52e7dad603c80e079a83a76038453433dcf385b5ffdd3af42707a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a499f2925ad52e7dad603c80e079a83a76038453433dcf385b5ffdd3af42707a->enter($__internal_a499f2925ad52e7dad603c80e079a83a76038453433dcf385b5ffdd3af42707a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b49999139cb245ec06eb5edea133b3dfb109ba1f95a2876f498694370b6bc807->leave($__internal_b49999139cb245ec06eb5edea133b3dfb109ba1f95a2876f498694370b6bc807_prof);

        
        $__internal_a499f2925ad52e7dad603c80e079a83a76038453433dcf385b5ffdd3af42707a->leave($__internal_a499f2925ad52e7dad603c80e079a83a76038453433dcf385b5ffdd3af42707a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_96d0ebbacba48d59d4213b70ca13fb86e15ff09dc75e41d95f93997ea3f44e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96d0ebbacba48d59d4213b70ca13fb86e15ff09dc75e41d95f93997ea3f44e68->enter($__internal_96d0ebbacba48d59d4213b70ca13fb86e15ff09dc75e41d95f93997ea3f44e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1f2e6f9aff4835d7007bf6ea71c5f3837275b5a61c5372e470a4b14cd878c4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2e6f9aff4835d7007bf6ea71c5f3837275b5a61c5372e470a4b14cd878c4eb->enter($__internal_1f2e6f9aff4835d7007bf6ea71c5f3837275b5a61c5372e470a4b14cd878c4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1f2e6f9aff4835d7007bf6ea71c5f3837275b5a61c5372e470a4b14cd878c4eb->leave($__internal_1f2e6f9aff4835d7007bf6ea71c5f3837275b5a61c5372e470a4b14cd878c4eb_prof);

        
        $__internal_96d0ebbacba48d59d4213b70ca13fb86e15ff09dc75e41d95f93997ea3f44e68->leave($__internal_96d0ebbacba48d59d4213b70ca13fb86e15ff09dc75e41d95f93997ea3f44e68_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10286f2adfe4d5a0684b3ec503bbb7ec210827720540f6d396bceab82305a4d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10286f2adfe4d5a0684b3ec503bbb7ec210827720540f6d396bceab82305a4d1->enter($__internal_10286f2adfe4d5a0684b3ec503bbb7ec210827720540f6d396bceab82305a4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_13c26b2b015fed1a888092de9c673ffedfee129d8833aab67132a8ba2bfc3b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c26b2b015fed1a888092de9c673ffedfee129d8833aab67132a8ba2bfc3b84->enter($__internal_13c26b2b015fed1a888092de9c673ffedfee129d8833aab67132a8ba2bfc3b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_13c26b2b015fed1a888092de9c673ffedfee129d8833aab67132a8ba2bfc3b84->leave($__internal_13c26b2b015fed1a888092de9c673ffedfee129d8833aab67132a8ba2bfc3b84_prof);

        
        $__internal_10286f2adfe4d5a0684b3ec503bbb7ec210827720540f6d396bceab82305a4d1->leave($__internal_10286f2adfe4d5a0684b3ec503bbb7ec210827720540f6d396bceab82305a4d1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb60d5ab60e2be36afa428a5ac7bb6d41f13bec38dbf44e7526d9a2e2021f962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb60d5ab60e2be36afa428a5ac7bb6d41f13bec38dbf44e7526d9a2e2021f962->enter($__internal_bb60d5ab60e2be36afa428a5ac7bb6d41f13bec38dbf44e7526d9a2e2021f962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c7003e06a4c72ecab6cf5805e52f4c731646f95e46f013eca829525d0ed0f84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7003e06a4c72ecab6cf5805e52f4c731646f95e46f013eca829525d0ed0f84f->enter($__internal_c7003e06a4c72ecab6cf5805e52f4c731646f95e46f013eca829525d0ed0f84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c7003e06a4c72ecab6cf5805e52f4c731646f95e46f013eca829525d0ed0f84f->leave($__internal_c7003e06a4c72ecab6cf5805e52f4c731646f95e46f013eca829525d0ed0f84f_prof);

        
        $__internal_bb60d5ab60e2be36afa428a5ac7bb6d41f13bec38dbf44e7526d9a2e2021f962->leave($__internal_bb60d5ab60e2be36afa428a5ac7bb6d41f13bec38dbf44e7526d9a2e2021f962_prof);

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
