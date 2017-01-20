<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_d57d6624732a4f02e9d9abc52090638dd732522418836b74e709b9d64e6d10d1 extends Twig_Template
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
        $__internal_23f91b740835e059bbc8ce1ef9a88182154b7b08d1cd6574cc5236d7139052c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f91b740835e059bbc8ce1ef9a88182154b7b08d1cd6574cc5236d7139052c6->enter($__internal_23f91b740835e059bbc8ce1ef9a88182154b7b08d1cd6574cc5236d7139052c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_84f67573db8a7335be07087bed269fe097f544f2fc8a2fcd757492c2c16b676b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f67573db8a7335be07087bed269fe097f544f2fc8a2fcd757492c2c16b676b->enter($__internal_84f67573db8a7335be07087bed269fe097f544f2fc8a2fcd757492c2c16b676b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_23f91b740835e059bbc8ce1ef9a88182154b7b08d1cd6574cc5236d7139052c6->leave($__internal_23f91b740835e059bbc8ce1ef9a88182154b7b08d1cd6574cc5236d7139052c6_prof);

        
        $__internal_84f67573db8a7335be07087bed269fe097f544f2fc8a2fcd757492c2c16b676b->leave($__internal_84f67573db8a7335be07087bed269fe097f544f2fc8a2fcd757492c2c16b676b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
