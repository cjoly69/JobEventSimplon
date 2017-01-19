<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a3eaa0f5214292b6165297a6a941120e0088bf4d9b604d8950e2c910286ad108 extends Twig_Template
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
        $__internal_cf0c811aed3d815a2a0cd20429d87c7514230f968333050117df5d097d641277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0c811aed3d815a2a0cd20429d87c7514230f968333050117df5d097d641277->enter($__internal_cf0c811aed3d815a2a0cd20429d87c7514230f968333050117df5d097d641277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_7c6371b110a897608e05ba33883601ff0186ff578ef6ae3a5180cbd31414f0ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6371b110a897608e05ba33883601ff0186ff578ef6ae3a5180cbd31414f0ef->enter($__internal_7c6371b110a897608e05ba33883601ff0186ff578ef6ae3a5180cbd31414f0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_cf0c811aed3d815a2a0cd20429d87c7514230f968333050117df5d097d641277->leave($__internal_cf0c811aed3d815a2a0cd20429d87c7514230f968333050117df5d097d641277_prof);

        
        $__internal_7c6371b110a897608e05ba33883601ff0186ff578ef6ae3a5180cbd31414f0ef->leave($__internal_7c6371b110a897608e05ba33883601ff0186ff578ef6ae3a5180cbd31414f0ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
