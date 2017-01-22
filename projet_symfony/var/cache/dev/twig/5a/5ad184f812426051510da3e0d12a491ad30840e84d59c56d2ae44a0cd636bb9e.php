<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_d7b6425f97b1c37b8b9302d151dc2bd38f648c74b742c6deb76eb4617ac5de94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40a83173d8b87e482222d86bfa8cfc539d55761c15af46a6a56fc3fc88541dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a83173d8b87e482222d86bfa8cfc539d55761c15af46a6a56fc3fc88541dc1->enter($__internal_40a83173d8b87e482222d86bfa8cfc539d55761c15af46a6a56fc3fc88541dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_65f758aa62a6874af6317248c2afa079a6ebb63cee102d826bd207d6abfb3328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f758aa62a6874af6317248c2afa079a6ebb63cee102d826bd207d6abfb3328->enter($__internal_65f758aa62a6874af6317248c2afa079a6ebb63cee102d826bd207d6abfb3328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_40a83173d8b87e482222d86bfa8cfc539d55761c15af46a6a56fc3fc88541dc1->leave($__internal_40a83173d8b87e482222d86bfa8cfc539d55761c15af46a6a56fc3fc88541dc1_prof);

        
        $__internal_65f758aa62a6874af6317248c2afa079a6ebb63cee102d826bd207d6abfb3328->leave($__internal_65f758aa62a6874af6317248c2afa079a6ebb63cee102d826bd207d6abfb3328_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
