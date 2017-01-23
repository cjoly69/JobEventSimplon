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
        $__internal_7f18472084b43086366fcd62693e4aaca7ff77fbf0a2933034ac9aa8094832fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f18472084b43086366fcd62693e4aaca7ff77fbf0a2933034ac9aa8094832fc->enter($__internal_7f18472084b43086366fcd62693e4aaca7ff77fbf0a2933034ac9aa8094832fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_15219ba085edc15f3327f38f6979fbe96b03e24c527e0da8a034bf614b48ae92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15219ba085edc15f3327f38f6979fbe96b03e24c527e0da8a034bf614b48ae92->enter($__internal_15219ba085edc15f3327f38f6979fbe96b03e24c527e0da8a034bf614b48ae92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f18472084b43086366fcd62693e4aaca7ff77fbf0a2933034ac9aa8094832fc->leave($__internal_7f18472084b43086366fcd62693e4aaca7ff77fbf0a2933034ac9aa8094832fc_prof);

        
        $__internal_15219ba085edc15f3327f38f6979fbe96b03e24c527e0da8a034bf614b48ae92->leave($__internal_15219ba085edc15f3327f38f6979fbe96b03e24c527e0da8a034bf614b48ae92_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da37f5cb0771880c12cd0f508f4e08b5a445ea9459ebb4c3dab85e0d61334789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da37f5cb0771880c12cd0f508f4e08b5a445ea9459ebb4c3dab85e0d61334789->enter($__internal_da37f5cb0771880c12cd0f508f4e08b5a445ea9459ebb4c3dab85e0d61334789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_93464fad406e36392eae9155653ef19315034d062a07b8b7c9785cb9f8067ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93464fad406e36392eae9155653ef19315034d062a07b8b7c9785cb9f8067ceb->enter($__internal_93464fad406e36392eae9155653ef19315034d062a07b8b7c9785cb9f8067ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_93464fad406e36392eae9155653ef19315034d062a07b8b7c9785cb9f8067ceb->leave($__internal_93464fad406e36392eae9155653ef19315034d062a07b8b7c9785cb9f8067ceb_prof);

        
        $__internal_da37f5cb0771880c12cd0f508f4e08b5a445ea9459ebb4c3dab85e0d61334789->leave($__internal_da37f5cb0771880c12cd0f508f4e08b5a445ea9459ebb4c3dab85e0d61334789_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0eabdc17b302f8ff19a2070ef569d400db02c66a332a030fc2703c1fae206c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eabdc17b302f8ff19a2070ef569d400db02c66a332a030fc2703c1fae206c20->enter($__internal_0eabdc17b302f8ff19a2070ef569d400db02c66a332a030fc2703c1fae206c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d5dd87671b76f87efd2cb3afec60bfeb6f210d50882ada383a629aa13f36cfcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5dd87671b76f87efd2cb3afec60bfeb6f210d50882ada383a629aa13f36cfcb->enter($__internal_d5dd87671b76f87efd2cb3afec60bfeb6f210d50882ada383a629aa13f36cfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d5dd87671b76f87efd2cb3afec60bfeb6f210d50882ada383a629aa13f36cfcb->leave($__internal_d5dd87671b76f87efd2cb3afec60bfeb6f210d50882ada383a629aa13f36cfcb_prof);

        
        $__internal_0eabdc17b302f8ff19a2070ef569d400db02c66a332a030fc2703c1fae206c20->leave($__internal_0eabdc17b302f8ff19a2070ef569d400db02c66a332a030fc2703c1fae206c20_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_77db0d7372c842fd191cd53013e8d9bbb42a1d800686bcfd67ee3d1992277b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77db0d7372c842fd191cd53013e8d9bbb42a1d800686bcfd67ee3d1992277b46->enter($__internal_77db0d7372c842fd191cd53013e8d9bbb42a1d800686bcfd67ee3d1992277b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_abe1720b14673c88fb490b41f0e4479cea3b1a66c41c11a13a0a101c63af858a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe1720b14673c88fb490b41f0e4479cea3b1a66c41c11a13a0a101c63af858a->enter($__internal_abe1720b14673c88fb490b41f0e4479cea3b1a66c41c11a13a0a101c63af858a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_abe1720b14673c88fb490b41f0e4479cea3b1a66c41c11a13a0a101c63af858a->leave($__internal_abe1720b14673c88fb490b41f0e4479cea3b1a66c41c11a13a0a101c63af858a_prof);

        
        $__internal_77db0d7372c842fd191cd53013e8d9bbb42a1d800686bcfd67ee3d1992277b46->leave($__internal_77db0d7372c842fd191cd53013e8d9bbb42a1d800686bcfd67ee3d1992277b46_prof);

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
