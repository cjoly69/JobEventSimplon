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
        $__internal_4123754686124cabd719ed989d668b64b0c1043c1496e2dac183deb8acd18020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4123754686124cabd719ed989d668b64b0c1043c1496e2dac183deb8acd18020->enter($__internal_4123754686124cabd719ed989d668b64b0c1043c1496e2dac183deb8acd18020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_abdcd470a897395d1fa9a9711ed1016823702fe8767ecb024ab4b67c184bd244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abdcd470a897395d1fa9a9711ed1016823702fe8767ecb024ab4b67c184bd244->enter($__internal_abdcd470a897395d1fa9a9711ed1016823702fe8767ecb024ab4b67c184bd244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4123754686124cabd719ed989d668b64b0c1043c1496e2dac183deb8acd18020->leave($__internal_4123754686124cabd719ed989d668b64b0c1043c1496e2dac183deb8acd18020_prof);

        
        $__internal_abdcd470a897395d1fa9a9711ed1016823702fe8767ecb024ab4b67c184bd244->leave($__internal_abdcd470a897395d1fa9a9711ed1016823702fe8767ecb024ab4b67c184bd244_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_58b939a8081d0f6adebef275690190829f15e3a98a75d2597b37d1a5eb9eb89a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58b939a8081d0f6adebef275690190829f15e3a98a75d2597b37d1a5eb9eb89a->enter($__internal_58b939a8081d0f6adebef275690190829f15e3a98a75d2597b37d1a5eb9eb89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d2dfe6f28faa461e96e7fb04b881edfa05df67b4972d8f3ea93443374b69b906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2dfe6f28faa461e96e7fb04b881edfa05df67b4972d8f3ea93443374b69b906->enter($__internal_d2dfe6f28faa461e96e7fb04b881edfa05df67b4972d8f3ea93443374b69b906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_d2dfe6f28faa461e96e7fb04b881edfa05df67b4972d8f3ea93443374b69b906->leave($__internal_d2dfe6f28faa461e96e7fb04b881edfa05df67b4972d8f3ea93443374b69b906_prof);

        
        $__internal_58b939a8081d0f6adebef275690190829f15e3a98a75d2597b37d1a5eb9eb89a->leave($__internal_58b939a8081d0f6adebef275690190829f15e3a98a75d2597b37d1a5eb9eb89a_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a1936cb44c1b439c7c6151a616f195488bd41ef7bb5e4367fb5b488c58bd6ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1936cb44c1b439c7c6151a616f195488bd41ef7bb5e4367fb5b488c58bd6ca->enter($__internal_3a1936cb44c1b439c7c6151a616f195488bd41ef7bb5e4367fb5b488c58bd6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5f06a2106b55c7b8cbfc51e2ea5e1d7f3d2e7dd6cd57fe02d440dcf3176542d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f06a2106b55c7b8cbfc51e2ea5e1d7f3d2e7dd6cd57fe02d440dcf3176542d6->enter($__internal_5f06a2106b55c7b8cbfc51e2ea5e1d7f3d2e7dd6cd57fe02d440dcf3176542d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_5f06a2106b55c7b8cbfc51e2ea5e1d7f3d2e7dd6cd57fe02d440dcf3176542d6->leave($__internal_5f06a2106b55c7b8cbfc51e2ea5e1d7f3d2e7dd6cd57fe02d440dcf3176542d6_prof);

        
        $__internal_3a1936cb44c1b439c7c6151a616f195488bd41ef7bb5e4367fb5b488c58bd6ca->leave($__internal_3a1936cb44c1b439c7c6151a616f195488bd41ef7bb5e4367fb5b488c58bd6ca_prof);

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
