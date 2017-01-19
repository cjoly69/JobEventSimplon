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
        $__internal_4d94790f8704f7a336b98b34b3e608c4a14ef5d1ba1db2c88e9d71c7580e1589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d94790f8704f7a336b98b34b3e608c4a14ef5d1ba1db2c88e9d71c7580e1589->enter($__internal_4d94790f8704f7a336b98b34b3e608c4a14ef5d1ba1db2c88e9d71c7580e1589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_3850f966af4f9a561c8e2bf86df0e439f9c53e5a848e1400dd89eb33952d99ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3850f966af4f9a561c8e2bf86df0e439f9c53e5a848e1400dd89eb33952d99ce->enter($__internal_3850f966af4f9a561c8e2bf86df0e439f9c53e5a848e1400dd89eb33952d99ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4d94790f8704f7a336b98b34b3e608c4a14ef5d1ba1db2c88e9d71c7580e1589->leave($__internal_4d94790f8704f7a336b98b34b3e608c4a14ef5d1ba1db2c88e9d71c7580e1589_prof);

        
        $__internal_3850f966af4f9a561c8e2bf86df0e439f9c53e5a848e1400dd89eb33952d99ce->leave($__internal_3850f966af4f9a561c8e2bf86df0e439f9c53e5a848e1400dd89eb33952d99ce_prof);

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
