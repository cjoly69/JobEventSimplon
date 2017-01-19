<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_657ff21f7b5a8fd70605aa25422f309603363e7a2f285e2fd3ead10b709e5f97 extends Twig_Template
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
        $__internal_f64f11a721e5741efd3156611ea1afdbe5a30c03a1232791b6ef058311dd957c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64f11a721e5741efd3156611ea1afdbe5a30c03a1232791b6ef058311dd957c->enter($__internal_f64f11a721e5741efd3156611ea1afdbe5a30c03a1232791b6ef058311dd957c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_f77dce4ae84a33e18f0206311bfc2d668175d006bd56b1ca8ae3622b71e8e286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77dce4ae84a33e18f0206311bfc2d668175d006bd56b1ca8ae3622b71e8e286->enter($__internal_f77dce4ae84a33e18f0206311bfc2d668175d006bd56b1ca8ae3622b71e8e286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_f64f11a721e5741efd3156611ea1afdbe5a30c03a1232791b6ef058311dd957c->leave($__internal_f64f11a721e5741efd3156611ea1afdbe5a30c03a1232791b6ef058311dd957c_prof);

        
        $__internal_f77dce4ae84a33e18f0206311bfc2d668175d006bd56b1ca8ae3622b71e8e286->leave($__internal_f77dce4ae84a33e18f0206311bfc2d668175d006bd56b1ca8ae3622b71e8e286_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
