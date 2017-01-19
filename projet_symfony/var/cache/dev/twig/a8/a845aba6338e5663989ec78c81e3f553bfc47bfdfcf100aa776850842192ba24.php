<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_94992de7421f7ede9adfc484308a4528d30e6921064e0b307ffc625918b8836b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3aa2c993da61f91c580b038198bff6064bce8bac3811a506d539723e5c7bd457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa2c993da61f91c580b038198bff6064bce8bac3811a506d539723e5c7bd457->enter($__internal_3aa2c993da61f91c580b038198bff6064bce8bac3811a506d539723e5c7bd457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_78d6691f908ae9dadb146f415fb8d2385742daa55ee51a53279a631cd424a6c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d6691f908ae9dadb146f415fb8d2385742daa55ee51a53279a631cd424a6c4->enter($__internal_78d6691f908ae9dadb146f415fb8d2385742daa55ee51a53279a631cd424a6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3aa2c993da61f91c580b038198bff6064bce8bac3811a506d539723e5c7bd457->leave($__internal_3aa2c993da61f91c580b038198bff6064bce8bac3811a506d539723e5c7bd457_prof);

        
        $__internal_78d6691f908ae9dadb146f415fb8d2385742daa55ee51a53279a631cd424a6c4->leave($__internal_78d6691f908ae9dadb146f415fb8d2385742daa55ee51a53279a631cd424a6c4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e4018239a001610f8c8eb83e2671014d371209a141009ba5f1d649a96be7c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e4018239a001610f8c8eb83e2671014d371209a141009ba5f1d649a96be7c9d->enter($__internal_4e4018239a001610f8c8eb83e2671014d371209a141009ba5f1d649a96be7c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f61f521caa3d7b69aa46bc295d794afacb9c202357f38076e3b01c7ad1b4a83a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61f521caa3d7b69aa46bc295d794afacb9c202357f38076e3b01c7ad1b4a83a->enter($__internal_f61f521caa3d7b69aa46bc295d794afacb9c202357f38076e3b01c7ad1b4a83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f61f521caa3d7b69aa46bc295d794afacb9c202357f38076e3b01c7ad1b4a83a->leave($__internal_f61f521caa3d7b69aa46bc295d794afacb9c202357f38076e3b01c7ad1b4a83a_prof);

        
        $__internal_4e4018239a001610f8c8eb83e2671014d371209a141009ba5f1d649a96be7c9d->leave($__internal_4e4018239a001610f8c8eb83e2671014d371209a141009ba5f1d649a96be7c9d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
