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
        $__internal_1343d3916a40abe63ddbeda0af0a56ad5d4ffd18b99433d3003631cff00c29c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1343d3916a40abe63ddbeda0af0a56ad5d4ffd18b99433d3003631cff00c29c3->enter($__internal_1343d3916a40abe63ddbeda0af0a56ad5d4ffd18b99433d3003631cff00c29c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_9148bf7f5ef3b569babbfc7958816a89afb1a8427f169b67bba8d5cafb236fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9148bf7f5ef3b569babbfc7958816a89afb1a8427f169b67bba8d5cafb236fd2->enter($__internal_9148bf7f5ef3b569babbfc7958816a89afb1a8427f169b67bba8d5cafb236fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1343d3916a40abe63ddbeda0af0a56ad5d4ffd18b99433d3003631cff00c29c3->leave($__internal_1343d3916a40abe63ddbeda0af0a56ad5d4ffd18b99433d3003631cff00c29c3_prof);

        
        $__internal_9148bf7f5ef3b569babbfc7958816a89afb1a8427f169b67bba8d5cafb236fd2->leave($__internal_9148bf7f5ef3b569babbfc7958816a89afb1a8427f169b67bba8d5cafb236fd2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_456357bdaf6b8563f2fecaff3fa09e6a5a5eebde1e405baca7e03c920c181c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_456357bdaf6b8563f2fecaff3fa09e6a5a5eebde1e405baca7e03c920c181c6c->enter($__internal_456357bdaf6b8563f2fecaff3fa09e6a5a5eebde1e405baca7e03c920c181c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba997cd02190468d1755088cb3a67f79498c730c4a66fd4082a48bd39b4a15a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba997cd02190468d1755088cb3a67f79498c730c4a66fd4082a48bd39b4a15a5->enter($__internal_ba997cd02190468d1755088cb3a67f79498c730c4a66fd4082a48bd39b4a15a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ba997cd02190468d1755088cb3a67f79498c730c4a66fd4082a48bd39b4a15a5->leave($__internal_ba997cd02190468d1755088cb3a67f79498c730c4a66fd4082a48bd39b4a15a5_prof);

        
        $__internal_456357bdaf6b8563f2fecaff3fa09e6a5a5eebde1e405baca7e03c920c181c6c->leave($__internal_456357bdaf6b8563f2fecaff3fa09e6a5a5eebde1e405baca7e03c920c181c6c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0905e4cd3efb270d40caf31a0a0c8c6b2ed8913bbef3508c8530b3911f15dc90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0905e4cd3efb270d40caf31a0a0c8c6b2ed8913bbef3508c8530b3911f15dc90->enter($__internal_0905e4cd3efb270d40caf31a0a0c8c6b2ed8913bbef3508c8530b3911f15dc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_633a742f869396408e9517b86ce1927e5d653da0c0bfe84bb250d19beb7ebb73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633a742f869396408e9517b86ce1927e5d653da0c0bfe84bb250d19beb7ebb73->enter($__internal_633a742f869396408e9517b86ce1927e5d653da0c0bfe84bb250d19beb7ebb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_633a742f869396408e9517b86ce1927e5d653da0c0bfe84bb250d19beb7ebb73->leave($__internal_633a742f869396408e9517b86ce1927e5d653da0c0bfe84bb250d19beb7ebb73_prof);

        
        $__internal_0905e4cd3efb270d40caf31a0a0c8c6b2ed8913bbef3508c8530b3911f15dc90->leave($__internal_0905e4cd3efb270d40caf31a0a0c8c6b2ed8913bbef3508c8530b3911f15dc90_prof);

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
