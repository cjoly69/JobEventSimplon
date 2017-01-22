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
        $__internal_5baf478bb863b2ce24035679dcef5d36ff8dc39ac5a50e3dd34becefa9e5531d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5baf478bb863b2ce24035679dcef5d36ff8dc39ac5a50e3dd34becefa9e5531d->enter($__internal_5baf478bb863b2ce24035679dcef5d36ff8dc39ac5a50e3dd34becefa9e5531d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_996ae0e27fc09e1e4ebb539859ef5326d051f6c95542ae06f86e188ff3eab4ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996ae0e27fc09e1e4ebb539859ef5326d051f6c95542ae06f86e188ff3eab4ff->enter($__internal_996ae0e27fc09e1e4ebb539859ef5326d051f6c95542ae06f86e188ff3eab4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5baf478bb863b2ce24035679dcef5d36ff8dc39ac5a50e3dd34becefa9e5531d->leave($__internal_5baf478bb863b2ce24035679dcef5d36ff8dc39ac5a50e3dd34becefa9e5531d_prof);

        
        $__internal_996ae0e27fc09e1e4ebb539859ef5326d051f6c95542ae06f86e188ff3eab4ff->leave($__internal_996ae0e27fc09e1e4ebb539859ef5326d051f6c95542ae06f86e188ff3eab4ff_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a3bea346949eea0811f4ce46ceea3ca6a9685434b11d21bb125876e99fb4f7df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3bea346949eea0811f4ce46ceea3ca6a9685434b11d21bb125876e99fb4f7df->enter($__internal_a3bea346949eea0811f4ce46ceea3ca6a9685434b11d21bb125876e99fb4f7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_56e9878006ca09e533d57763baa22231e3dfc2dc5af792e0458413a56025edd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e9878006ca09e533d57763baa22231e3dfc2dc5af792e0458413a56025edd1->enter($__internal_56e9878006ca09e533d57763baa22231e3dfc2dc5af792e0458413a56025edd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_56e9878006ca09e533d57763baa22231e3dfc2dc5af792e0458413a56025edd1->leave($__internal_56e9878006ca09e533d57763baa22231e3dfc2dc5af792e0458413a56025edd1_prof);

        
        $__internal_a3bea346949eea0811f4ce46ceea3ca6a9685434b11d21bb125876e99fb4f7df->leave($__internal_a3bea346949eea0811f4ce46ceea3ca6a9685434b11d21bb125876e99fb4f7df_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5681c3503708d07d0083d4b8bd62f651a93e9b33cbf532dfba78c21acfcf634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5681c3503708d07d0083d4b8bd62f651a93e9b33cbf532dfba78c21acfcf634->enter($__internal_e5681c3503708d07d0083d4b8bd62f651a93e9b33cbf532dfba78c21acfcf634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0d8a159bd428398001bf2a8c45bfe1cb26efcdd4c6788e115f62dfbef921b11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8a159bd428398001bf2a8c45bfe1cb26efcdd4c6788e115f62dfbef921b11a->enter($__internal_0d8a159bd428398001bf2a8c45bfe1cb26efcdd4c6788e115f62dfbef921b11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0d8a159bd428398001bf2a8c45bfe1cb26efcdd4c6788e115f62dfbef921b11a->leave($__internal_0d8a159bd428398001bf2a8c45bfe1cb26efcdd4c6788e115f62dfbef921b11a_prof);

        
        $__internal_e5681c3503708d07d0083d4b8bd62f651a93e9b33cbf532dfba78c21acfcf634->leave($__internal_e5681c3503708d07d0083d4b8bd62f651a93e9b33cbf532dfba78c21acfcf634_prof);

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
