<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_582436cbb3040bbe1c4860200b0951d3b02f5df80b578332003758c7759b92b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d339a6095a7275140c04ed9a1ceb4775eb9dd6652ae3341ab9d6df731c3a9cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d339a6095a7275140c04ed9a1ceb4775eb9dd6652ae3341ab9d6df731c3a9cb->enter($__internal_6d339a6095a7275140c04ed9a1ceb4775eb9dd6652ae3341ab9d6df731c3a9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_2d6f1c68ecbdba485fa6d8dca65ea02101b989100e1977cdf855ecc017f1e375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6f1c68ecbdba485fa6d8dca65ea02101b989100e1977cdf855ecc017f1e375->enter($__internal_2d6f1c68ecbdba485fa6d8dca65ea02101b989100e1977cdf855ecc017f1e375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d339a6095a7275140c04ed9a1ceb4775eb9dd6652ae3341ab9d6df731c3a9cb->leave($__internal_6d339a6095a7275140c04ed9a1ceb4775eb9dd6652ae3341ab9d6df731c3a9cb_prof);

        
        $__internal_2d6f1c68ecbdba485fa6d8dca65ea02101b989100e1977cdf855ecc017f1e375->leave($__internal_2d6f1c68ecbdba485fa6d8dca65ea02101b989100e1977cdf855ecc017f1e375_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_884cbb0f66a83ea7775a1c5d195188c9ea5dffc46d5f9be5c45ac5676c9845a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884cbb0f66a83ea7775a1c5d195188c9ea5dffc46d5f9be5c45ac5676c9845a2->enter($__internal_884cbb0f66a83ea7775a1c5d195188c9ea5dffc46d5f9be5c45ac5676c9845a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_673bc56c3fc9a186c7f28fbd83692809d3f62da26eaf7ed3e349cc0668585e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673bc56c3fc9a186c7f28fbd83692809d3f62da26eaf7ed3e349cc0668585e62->enter($__internal_673bc56c3fc9a186c7f28fbd83692809d3f62da26eaf7ed3e349cc0668585e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_673bc56c3fc9a186c7f28fbd83692809d3f62da26eaf7ed3e349cc0668585e62->leave($__internal_673bc56c3fc9a186c7f28fbd83692809d3f62da26eaf7ed3e349cc0668585e62_prof);

        
        $__internal_884cbb0f66a83ea7775a1c5d195188c9ea5dffc46d5f9be5c45ac5676c9845a2->leave($__internal_884cbb0f66a83ea7775a1c5d195188c9ea5dffc46d5f9be5c45ac5676c9845a2_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b991070f9d86a576b0970ff79a4ddf405361cbbf30edc3f2d7e373de0b6ab2b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b991070f9d86a576b0970ff79a4ddf405361cbbf30edc3f2d7e373de0b6ab2b4->enter($__internal_b991070f9d86a576b0970ff79a4ddf405361cbbf30edc3f2d7e373de0b6ab2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_56fef591cf87e71644ef05abf89c099caa0a633c30bdbb6bd0818001d011dc15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fef591cf87e71644ef05abf89c099caa0a633c30bdbb6bd0818001d011dc15->enter($__internal_56fef591cf87e71644ef05abf89c099caa0a633c30bdbb6bd0818001d011dc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_56fef591cf87e71644ef05abf89c099caa0a633c30bdbb6bd0818001d011dc15->leave($__internal_56fef591cf87e71644ef05abf89c099caa0a633c30bdbb6bd0818001d011dc15_prof);

        
        $__internal_b991070f9d86a576b0970ff79a4ddf405361cbbf30edc3f2d7e373de0b6ab2b4->leave($__internal_b991070f9d86a576b0970ff79a4ddf405361cbbf30edc3f2d7e373de0b6ab2b4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
