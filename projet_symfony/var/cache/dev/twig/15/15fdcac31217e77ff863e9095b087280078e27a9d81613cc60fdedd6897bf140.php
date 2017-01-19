<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_d9b928cd43dbe3fc3cf01ffa26f62a0dd2cf12b5670c9fc5a14894359edb7e0b extends Twig_Template
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
        $__internal_c2cd466aa88f7c7c616b788ca8d103b7561a9f73b998ca96d9b5b633f1542cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2cd466aa88f7c7c616b788ca8d103b7561a9f73b998ca96d9b5b633f1542cd6->enter($__internal_c2cd466aa88f7c7c616b788ca8d103b7561a9f73b998ca96d9b5b633f1542cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_c86baeb3521c18af61661d85624b97108b4740171d899552eaf5ec2ffc2c6fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86baeb3521c18af61661d85624b97108b4740171d899552eaf5ec2ffc2c6fa4->enter($__internal_c86baeb3521c18af61661d85624b97108b4740171d899552eaf5ec2ffc2c6fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_c2cd466aa88f7c7c616b788ca8d103b7561a9f73b998ca96d9b5b633f1542cd6->leave($__internal_c2cd466aa88f7c7c616b788ca8d103b7561a9f73b998ca96d9b5b633f1542cd6_prof);

        
        $__internal_c86baeb3521c18af61661d85624b97108b4740171d899552eaf5ec2ffc2c6fa4->leave($__internal_c86baeb3521c18af61661d85624b97108b4740171d899552eaf5ec2ffc2c6fa4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
