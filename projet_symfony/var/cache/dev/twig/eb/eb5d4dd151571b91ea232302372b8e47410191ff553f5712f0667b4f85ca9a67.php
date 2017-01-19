<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6d608d61bbd904ceaa533265000687aca34bf735062e9b339d2639f6e567ecb1 extends Twig_Template
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
        $__internal_d38c96a90b7e19c46f627d2736bac7bd58524e66ab6b89de2daeef174762878d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d38c96a90b7e19c46f627d2736bac7bd58524e66ab6b89de2daeef174762878d->enter($__internal_d38c96a90b7e19c46f627d2736bac7bd58524e66ab6b89de2daeef174762878d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_16a8a0e0231a8077afcc24b8f47f495082fcfb57383dbda5d8d6bed1d892b44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a8a0e0231a8077afcc24b8f47f495082fcfb57383dbda5d8d6bed1d892b44a->enter($__internal_16a8a0e0231a8077afcc24b8f47f495082fcfb57383dbda5d8d6bed1d892b44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d38c96a90b7e19c46f627d2736bac7bd58524e66ab6b89de2daeef174762878d->leave($__internal_d38c96a90b7e19c46f627d2736bac7bd58524e66ab6b89de2daeef174762878d_prof);

        
        $__internal_16a8a0e0231a8077afcc24b8f47f495082fcfb57383dbda5d8d6bed1d892b44a->leave($__internal_16a8a0e0231a8077afcc24b8f47f495082fcfb57383dbda5d8d6bed1d892b44a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
