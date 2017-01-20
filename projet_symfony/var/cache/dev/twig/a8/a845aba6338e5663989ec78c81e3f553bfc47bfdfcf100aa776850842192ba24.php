<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_94992de7421f7ede9adfc484308a4528d30e6921064e0b307ffc625918b8836b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa1e25d31e7932ecb039f7922cdf82d05b1739b5254e86561a211b3f3a04bae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa1e25d31e7932ecb039f7922cdf82d05b1739b5254e86561a211b3f3a04bae5->enter($__internal_aa1e25d31e7932ecb039f7922cdf82d05b1739b5254e86561a211b3f3a04bae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_5e39bfa7d7d041df335d81680fae5ab9b6d3e24551c2e98fd2cb3f26ec1b14ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e39bfa7d7d041df335d81680fae5ab9b6d3e24551c2e98fd2cb3f26ec1b14ce->enter($__internal_5e39bfa7d7d041df335d81680fae5ab9b6d3e24551c2e98fd2cb3f26ec1b14ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_aa1e25d31e7932ecb039f7922cdf82d05b1739b5254e86561a211b3f3a04bae5->leave($__internal_aa1e25d31e7932ecb039f7922cdf82d05b1739b5254e86561a211b3f3a04bae5_prof);

        
        $__internal_5e39bfa7d7d041df335d81680fae5ab9b6d3e24551c2e98fd2cb3f26ec1b14ce->leave($__internal_5e39bfa7d7d041df335d81680fae5ab9b6d3e24551c2e98fd2cb3f26ec1b14ce_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4673cf6362a2de9ceb489bb725b6281449de52fbf6374113efab026d5f59b7e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4673cf6362a2de9ceb489bb725b6281449de52fbf6374113efab026d5f59b7e3->enter($__internal_4673cf6362a2de9ceb489bb725b6281449de52fbf6374113efab026d5f59b7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ae55af70ef258bb8e73dfef9dfb83404d932c08ee13ff58c598179ac7ec41958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae55af70ef258bb8e73dfef9dfb83404d932c08ee13ff58c598179ac7ec41958->enter($__internal_ae55af70ef258bb8e73dfef9dfb83404d932c08ee13ff58c598179ac7ec41958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ae55af70ef258bb8e73dfef9dfb83404d932c08ee13ff58c598179ac7ec41958->leave($__internal_ae55af70ef258bb8e73dfef9dfb83404d932c08ee13ff58c598179ac7ec41958_prof);

        
        $__internal_4673cf6362a2de9ceb489bb725b6281449de52fbf6374113efab026d5f59b7e3->leave($__internal_4673cf6362a2de9ceb489bb725b6281449de52fbf6374113efab026d5f59b7e3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
