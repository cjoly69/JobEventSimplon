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
        $__internal_f2e78d203c1f9848078ca695d10b89abfc18e9a4a2b3e982c2bc7670a40cb7aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e78d203c1f9848078ca695d10b89abfc18e9a4a2b3e982c2bc7670a40cb7aa->enter($__internal_f2e78d203c1f9848078ca695d10b89abfc18e9a4a2b3e982c2bc7670a40cb7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_354f4b7dc340acaaa06cf0f04e53c98c6ef92adddc276955c1bc9e4faf876876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354f4b7dc340acaaa06cf0f04e53c98c6ef92adddc276955c1bc9e4faf876876->enter($__internal_354f4b7dc340acaaa06cf0f04e53c98c6ef92adddc276955c1bc9e4faf876876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2e78d203c1f9848078ca695d10b89abfc18e9a4a2b3e982c2bc7670a40cb7aa->leave($__internal_f2e78d203c1f9848078ca695d10b89abfc18e9a4a2b3e982c2bc7670a40cb7aa_prof);

        
        $__internal_354f4b7dc340acaaa06cf0f04e53c98c6ef92adddc276955c1bc9e4faf876876->leave($__internal_354f4b7dc340acaaa06cf0f04e53c98c6ef92adddc276955c1bc9e4faf876876_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_105ec19d6c20200541947a646b6b0a98ecc5520b1568edf6492e30858d994ea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_105ec19d6c20200541947a646b6b0a98ecc5520b1568edf6492e30858d994ea5->enter($__internal_105ec19d6c20200541947a646b6b0a98ecc5520b1568edf6492e30858d994ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9e4da9fc88405ffcf5ff3119c05a2793d6fe58d1ccfc84569f2e67c298119780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4da9fc88405ffcf5ff3119c05a2793d6fe58d1ccfc84569f2e67c298119780->enter($__internal_9e4da9fc88405ffcf5ff3119c05a2793d6fe58d1ccfc84569f2e67c298119780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9e4da9fc88405ffcf5ff3119c05a2793d6fe58d1ccfc84569f2e67c298119780->leave($__internal_9e4da9fc88405ffcf5ff3119c05a2793d6fe58d1ccfc84569f2e67c298119780_prof);

        
        $__internal_105ec19d6c20200541947a646b6b0a98ecc5520b1568edf6492e30858d994ea5->leave($__internal_105ec19d6c20200541947a646b6b0a98ecc5520b1568edf6492e30858d994ea5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0a32a14a6b3c8ebfdcc401cc319891350fc4bcdb17a86682e37f78c318dfc06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0a32a14a6b3c8ebfdcc401cc319891350fc4bcdb17a86682e37f78c318dfc06->enter($__internal_a0a32a14a6b3c8ebfdcc401cc319891350fc4bcdb17a86682e37f78c318dfc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_750d144ee340bf406ceb9948656a777e123da3e9d13eff739c16714a3a4377b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750d144ee340bf406ceb9948656a777e123da3e9d13eff739c16714a3a4377b9->enter($__internal_750d144ee340bf406ceb9948656a777e123da3e9d13eff739c16714a3a4377b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_750d144ee340bf406ceb9948656a777e123da3e9d13eff739c16714a3a4377b9->leave($__internal_750d144ee340bf406ceb9948656a777e123da3e9d13eff739c16714a3a4377b9_prof);

        
        $__internal_a0a32a14a6b3c8ebfdcc401cc319891350fc4bcdb17a86682e37f78c318dfc06->leave($__internal_a0a32a14a6b3c8ebfdcc401cc319891350fc4bcdb17a86682e37f78c318dfc06_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_437363bba9631e75d5aa26260388afa4ee4ac77da01e021e5bb606dc2f5afb82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437363bba9631e75d5aa26260388afa4ee4ac77da01e021e5bb606dc2f5afb82->enter($__internal_437363bba9631e75d5aa26260388afa4ee4ac77da01e021e5bb606dc2f5afb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5a267cf16768b3e2840730f929dfbda1fda87a65a896ea550e235788d8366519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a267cf16768b3e2840730f929dfbda1fda87a65a896ea550e235788d8366519->enter($__internal_5a267cf16768b3e2840730f929dfbda1fda87a65a896ea550e235788d8366519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5a267cf16768b3e2840730f929dfbda1fda87a65a896ea550e235788d8366519->leave($__internal_5a267cf16768b3e2840730f929dfbda1fda87a65a896ea550e235788d8366519_prof);

        
        $__internal_437363bba9631e75d5aa26260388afa4ee4ac77da01e021e5bb606dc2f5afb82->leave($__internal_437363bba9631e75d5aa26260388afa4ee4ac77da01e021e5bb606dc2f5afb82_prof);

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
