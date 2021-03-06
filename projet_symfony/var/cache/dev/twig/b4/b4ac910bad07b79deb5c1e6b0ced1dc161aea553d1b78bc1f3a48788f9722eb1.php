<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_81faf4f81c52739da9092b151a38cfefbcf161af21a8f60ae4983768ff068d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2f11c4d1b2bb584396e1fe819163c59b200658f66fed8a09aa0c839f3637e96e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f11c4d1b2bb584396e1fe819163c59b200658f66fed8a09aa0c839f3637e96e->enter($__internal_2f11c4d1b2bb584396e1fe819163c59b200658f66fed8a09aa0c839f3637e96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d6781eb3e376c24d1b6ba2c913859181e7fc824d307369d04f1fa43cb90cec9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6781eb3e376c24d1b6ba2c913859181e7fc824d307369d04f1fa43cb90cec9a->enter($__internal_d6781eb3e376c24d1b6ba2c913859181e7fc824d307369d04f1fa43cb90cec9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f11c4d1b2bb584396e1fe819163c59b200658f66fed8a09aa0c839f3637e96e->leave($__internal_2f11c4d1b2bb584396e1fe819163c59b200658f66fed8a09aa0c839f3637e96e_prof);

        
        $__internal_d6781eb3e376c24d1b6ba2c913859181e7fc824d307369d04f1fa43cb90cec9a->leave($__internal_d6781eb3e376c24d1b6ba2c913859181e7fc824d307369d04f1fa43cb90cec9a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_788657a3463e0114b67fe754a09cab975255897bc42c82ba5baa241627412503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_788657a3463e0114b67fe754a09cab975255897bc42c82ba5baa241627412503->enter($__internal_788657a3463e0114b67fe754a09cab975255897bc42c82ba5baa241627412503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5e101bba093b2471f66a10f2083dbb1a03992af45751fe32abc72933a584b10f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e101bba093b2471f66a10f2083dbb1a03992af45751fe32abc72933a584b10f->enter($__internal_5e101bba093b2471f66a10f2083dbb1a03992af45751fe32abc72933a584b10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5e101bba093b2471f66a10f2083dbb1a03992af45751fe32abc72933a584b10f->leave($__internal_5e101bba093b2471f66a10f2083dbb1a03992af45751fe32abc72933a584b10f_prof);

        
        $__internal_788657a3463e0114b67fe754a09cab975255897bc42c82ba5baa241627412503->leave($__internal_788657a3463e0114b67fe754a09cab975255897bc42c82ba5baa241627412503_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3f408369e2fff74e39e505b86c58ed652f2de198c642dc17691bf697d208383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3f408369e2fff74e39e505b86c58ed652f2de198c642dc17691bf697d208383->enter($__internal_d3f408369e2fff74e39e505b86c58ed652f2de198c642dc17691bf697d208383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6bbcfb0387e210fd78926e3205e66d542e3e8f396cedc1b5e5d1dcfac52374a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bbcfb0387e210fd78926e3205e66d542e3e8f396cedc1b5e5d1dcfac52374a7->enter($__internal_6bbcfb0387e210fd78926e3205e66d542e3e8f396cedc1b5e5d1dcfac52374a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6bbcfb0387e210fd78926e3205e66d542e3e8f396cedc1b5e5d1dcfac52374a7->leave($__internal_6bbcfb0387e210fd78926e3205e66d542e3e8f396cedc1b5e5d1dcfac52374a7_prof);

        
        $__internal_d3f408369e2fff74e39e505b86c58ed652f2de198c642dc17691bf697d208383->leave($__internal_d3f408369e2fff74e39e505b86c58ed652f2de198c642dc17691bf697d208383_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_de8293b79e962cc9316e224b5470ecf4136533dfd545e3245dbc3057e404a3fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8293b79e962cc9316e224b5470ecf4136533dfd545e3245dbc3057e404a3fe->enter($__internal_de8293b79e962cc9316e224b5470ecf4136533dfd545e3245dbc3057e404a3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c23a6a9e1e527255b790e3d89f5b1404aab284f3ee00c11145549448500f48a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23a6a9e1e527255b790e3d89f5b1404aab284f3ee00c11145549448500f48a1->enter($__internal_c23a6a9e1e527255b790e3d89f5b1404aab284f3ee00c11145549448500f48a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c23a6a9e1e527255b790e3d89f5b1404aab284f3ee00c11145549448500f48a1->leave($__internal_c23a6a9e1e527255b790e3d89f5b1404aab284f3ee00c11145549448500f48a1_prof);

        
        $__internal_de8293b79e962cc9316e224b5470ecf4136533dfd545e3245dbc3057e404a3fe->leave($__internal_de8293b79e962cc9316e224b5470ecf4136533dfd545e3245dbc3057e404a3fe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
