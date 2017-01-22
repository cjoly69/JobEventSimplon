<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7b42b20b50026cf60cfa5150e3d2bb4541e554aeafceb05031a858a917fb0d3f extends Twig_Template
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
        $__internal_e5afa7489bb33bf3fa527c6630e5dfd55c37f43d8fe5decd15c0c689004b4981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5afa7489bb33bf3fa527c6630e5dfd55c37f43d8fe5decd15c0c689004b4981->enter($__internal_e5afa7489bb33bf3fa527c6630e5dfd55c37f43d8fe5decd15c0c689004b4981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_9d7ede8c0ab88196b6b5c9a7e104b13834ec6fb84e8ee0a3b74f539b7a31d2f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7ede8c0ab88196b6b5c9a7e104b13834ec6fb84e8ee0a3b74f539b7a31d2f5->enter($__internal_9d7ede8c0ab88196b6b5c9a7e104b13834ec6fb84e8ee0a3b74f539b7a31d2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_e5afa7489bb33bf3fa527c6630e5dfd55c37f43d8fe5decd15c0c689004b4981->leave($__internal_e5afa7489bb33bf3fa527c6630e5dfd55c37f43d8fe5decd15c0c689004b4981_prof);

        
        $__internal_9d7ede8c0ab88196b6b5c9a7e104b13834ec6fb84e8ee0a3b74f539b7a31d2f5->leave($__internal_9d7ede8c0ab88196b6b5c9a7e104b13834ec6fb84e8ee0a3b74f539b7a31d2f5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
