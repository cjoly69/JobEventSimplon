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
        $__internal_3712e9cee3fdac1d53ac8253e0a5c887e16b0d78a878b614028c095d48af3910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3712e9cee3fdac1d53ac8253e0a5c887e16b0d78a878b614028c095d48af3910->enter($__internal_3712e9cee3fdac1d53ac8253e0a5c887e16b0d78a878b614028c095d48af3910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_f89bdbd9b84bbf4f996286621d963d54dd636347a6136a149df061889f58c5c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89bdbd9b84bbf4f996286621d963d54dd636347a6136a149df061889f58c5c9->enter($__internal_f89bdbd9b84bbf4f996286621d963d54dd636347a6136a149df061889f58c5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_3712e9cee3fdac1d53ac8253e0a5c887e16b0d78a878b614028c095d48af3910->leave($__internal_3712e9cee3fdac1d53ac8253e0a5c887e16b0d78a878b614028c095d48af3910_prof);

        
        $__internal_f89bdbd9b84bbf4f996286621d963d54dd636347a6136a149df061889f58c5c9->leave($__internal_f89bdbd9b84bbf4f996286621d963d54dd636347a6136a149df061889f58c5c9_prof);

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
