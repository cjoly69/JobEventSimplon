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
        $__internal_f20ff787248d8885bd7007b6290016eb3c8acb7af3bc82f26531862a20ce6557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f20ff787248d8885bd7007b6290016eb3c8acb7af3bc82f26531862a20ce6557->enter($__internal_f20ff787248d8885bd7007b6290016eb3c8acb7af3bc82f26531862a20ce6557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_699095883be934533c510335b3e6537db3c6ff6a134015ce5504c050999f4f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699095883be934533c510335b3e6537db3c6ff6a134015ce5504c050999f4f5a->enter($__internal_699095883be934533c510335b3e6537db3c6ff6a134015ce5504c050999f4f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f20ff787248d8885bd7007b6290016eb3c8acb7af3bc82f26531862a20ce6557->leave($__internal_f20ff787248d8885bd7007b6290016eb3c8acb7af3bc82f26531862a20ce6557_prof);

        
        $__internal_699095883be934533c510335b3e6537db3c6ff6a134015ce5504c050999f4f5a->leave($__internal_699095883be934533c510335b3e6537db3c6ff6a134015ce5504c050999f4f5a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d2ff2b842269daa93af8e433213007ab44ae0b1b84a5254383d1820ab64a97b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ff2b842269daa93af8e433213007ab44ae0b1b84a5254383d1820ab64a97b5->enter($__internal_d2ff2b842269daa93af8e433213007ab44ae0b1b84a5254383d1820ab64a97b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2b24a0a750b6e226fa6d468fdc43c789f1cab3415160618f15607d87ae99a7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b24a0a750b6e226fa6d468fdc43c789f1cab3415160618f15607d87ae99a7df->enter($__internal_2b24a0a750b6e226fa6d468fdc43c789f1cab3415160618f15607d87ae99a7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2b24a0a750b6e226fa6d468fdc43c789f1cab3415160618f15607d87ae99a7df->leave($__internal_2b24a0a750b6e226fa6d468fdc43c789f1cab3415160618f15607d87ae99a7df_prof);

        
        $__internal_d2ff2b842269daa93af8e433213007ab44ae0b1b84a5254383d1820ab64a97b5->leave($__internal_d2ff2b842269daa93af8e433213007ab44ae0b1b84a5254383d1820ab64a97b5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94a824af2a08b13b5043d1990c21a354478df8aa657e1bfd2f027b987c566346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a824af2a08b13b5043d1990c21a354478df8aa657e1bfd2f027b987c566346->enter($__internal_94a824af2a08b13b5043d1990c21a354478df8aa657e1bfd2f027b987c566346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8bd22186be4b37e25732e1c5525e5ce691b6adecddfcaeeb5a2dc1a66f322a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd22186be4b37e25732e1c5525e5ce691b6adecddfcaeeb5a2dc1a66f322a5f->enter($__internal_8bd22186be4b37e25732e1c5525e5ce691b6adecddfcaeeb5a2dc1a66f322a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8bd22186be4b37e25732e1c5525e5ce691b6adecddfcaeeb5a2dc1a66f322a5f->leave($__internal_8bd22186be4b37e25732e1c5525e5ce691b6adecddfcaeeb5a2dc1a66f322a5f_prof);

        
        $__internal_94a824af2a08b13b5043d1990c21a354478df8aa657e1bfd2f027b987c566346->leave($__internal_94a824af2a08b13b5043d1990c21a354478df8aa657e1bfd2f027b987c566346_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d02744b98d9f4968548fc32de7138951ad12c9553c31b762cd4328b818d0e20c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02744b98d9f4968548fc32de7138951ad12c9553c31b762cd4328b818d0e20c->enter($__internal_d02744b98d9f4968548fc32de7138951ad12c9553c31b762cd4328b818d0e20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1bd828dd0ba16148f104f43df893baa527bf5e197f4f329ab5747787e3bf3f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd828dd0ba16148f104f43df893baa527bf5e197f4f329ab5747787e3bf3f1c->enter($__internal_1bd828dd0ba16148f104f43df893baa527bf5e197f4f329ab5747787e3bf3f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1bd828dd0ba16148f104f43df893baa527bf5e197f4f329ab5747787e3bf3f1c->leave($__internal_1bd828dd0ba16148f104f43df893baa527bf5e197f4f329ab5747787e3bf3f1c_prof);

        
        $__internal_d02744b98d9f4968548fc32de7138951ad12c9553c31b762cd4328b818d0e20c->leave($__internal_d02744b98d9f4968548fc32de7138951ad12c9553c31b762cd4328b818d0e20c_prof);

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
