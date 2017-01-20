<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_4aca9f989d643d7278614d3ace26135b0e90f00585a4fb663ce7c7db6972fcaf extends Twig_Template
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
        $__internal_5807896c52d8ee60252cfe8a4b8223a7f654b1b3189dd6235f294694de08e11b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5807896c52d8ee60252cfe8a4b8223a7f654b1b3189dd6235f294694de08e11b->enter($__internal_5807896c52d8ee60252cfe8a4b8223a7f654b1b3189dd6235f294694de08e11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_388f7a39c28cc180f4dd4b3c11e7e44e23ad301015b4480b40758ecb72fd49ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388f7a39c28cc180f4dd4b3c11e7e44e23ad301015b4480b40758ecb72fd49ca->enter($__internal_388f7a39c28cc180f4dd4b3c11e7e44e23ad301015b4480b40758ecb72fd49ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_5807896c52d8ee60252cfe8a4b8223a7f654b1b3189dd6235f294694de08e11b->leave($__internal_5807896c52d8ee60252cfe8a4b8223a7f654b1b3189dd6235f294694de08e11b_prof);

        
        $__internal_388f7a39c28cc180f4dd4b3c11e7e44e23ad301015b4480b40758ecb72fd49ca->leave($__internal_388f7a39c28cc180f4dd4b3c11e7e44e23ad301015b4480b40758ecb72fd49ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
