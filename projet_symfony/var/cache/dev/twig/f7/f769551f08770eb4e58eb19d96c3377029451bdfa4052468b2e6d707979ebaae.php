<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5f881dd3fb88ef0f6664e6eaa7753bf61f4527f6a93809ff36bd8fe361d3a92d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_141734117e21df94181c499f0889bd290a67278318a9e10c4d835132344468d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_141734117e21df94181c499f0889bd290a67278318a9e10c4d835132344468d8->enter($__internal_141734117e21df94181c499f0889bd290a67278318a9e10c4d835132344468d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_14059801a852aed8749365e31a43fbf8f1b7aff9f90694b69e0e93d7a082b084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14059801a852aed8749365e31a43fbf8f1b7aff9f90694b69e0e93d7a082b084->enter($__internal_14059801a852aed8749365e31a43fbf8f1b7aff9f90694b69e0e93d7a082b084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_141734117e21df94181c499f0889bd290a67278318a9e10c4d835132344468d8->leave($__internal_141734117e21df94181c499f0889bd290a67278318a9e10c4d835132344468d8_prof);

        
        $__internal_14059801a852aed8749365e31a43fbf8f1b7aff9f90694b69e0e93d7a082b084->leave($__internal_14059801a852aed8749365e31a43fbf8f1b7aff9f90694b69e0e93d7a082b084_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_daddcd4f1023baf00853273d51a796d7a4dac1ab22a8406e71f90271c11007fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daddcd4f1023baf00853273d51a796d7a4dac1ab22a8406e71f90271c11007fc->enter($__internal_daddcd4f1023baf00853273d51a796d7a4dac1ab22a8406e71f90271c11007fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7359da307855034e5aad83db26d06905ba10b9e5ea84cfc95783bac2afe85d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7359da307855034e5aad83db26d06905ba10b9e5ea84cfc95783bac2afe85d80->enter($__internal_7359da307855034e5aad83db26d06905ba10b9e5ea84cfc95783bac2afe85d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7359da307855034e5aad83db26d06905ba10b9e5ea84cfc95783bac2afe85d80->leave($__internal_7359da307855034e5aad83db26d06905ba10b9e5ea84cfc95783bac2afe85d80_prof);

        
        $__internal_daddcd4f1023baf00853273d51a796d7a4dac1ab22a8406e71f90271c11007fc->leave($__internal_daddcd4f1023baf00853273d51a796d7a4dac1ab22a8406e71f90271c11007fc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d17b2b385cb79e081955d93fbc70f7bd4a0d15f309be79453e84ea1770dab210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17b2b385cb79e081955d93fbc70f7bd4a0d15f309be79453e84ea1770dab210->enter($__internal_d17b2b385cb79e081955d93fbc70f7bd4a0d15f309be79453e84ea1770dab210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_913548d227bb7b127df3c2bcabfaecddf69d2423e66ba542f6f2f17b505317ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913548d227bb7b127df3c2bcabfaecddf69d2423e66ba542f6f2f17b505317ed->enter($__internal_913548d227bb7b127df3c2bcabfaecddf69d2423e66ba542f6f2f17b505317ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_913548d227bb7b127df3c2bcabfaecddf69d2423e66ba542f6f2f17b505317ed->leave($__internal_913548d227bb7b127df3c2bcabfaecddf69d2423e66ba542f6f2f17b505317ed_prof);

        
        $__internal_d17b2b385cb79e081955d93fbc70f7bd4a0d15f309be79453e84ea1770dab210->leave($__internal_d17b2b385cb79e081955d93fbc70f7bd4a0d15f309be79453e84ea1770dab210_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
