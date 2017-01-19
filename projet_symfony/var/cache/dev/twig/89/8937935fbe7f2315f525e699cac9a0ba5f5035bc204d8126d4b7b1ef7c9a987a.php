<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e3bcb6526f794aa83b95019bb890a2987df7050a487b335ad25c31eb56a02cbf extends Twig_Template
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
        $__internal_e8dea3b949c3a987303f35167b383ab01ac4ad9d10914b20fc6b9c92193f2997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8dea3b949c3a987303f35167b383ab01ac4ad9d10914b20fc6b9c92193f2997->enter($__internal_e8dea3b949c3a987303f35167b383ab01ac4ad9d10914b20fc6b9c92193f2997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1d3d073db60e3d328b9a1449c285d1a013d25f0a3cf4a83769805a0f437b2031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3d073db60e3d328b9a1449c285d1a013d25f0a3cf4a83769805a0f437b2031->enter($__internal_1d3d073db60e3d328b9a1449c285d1a013d25f0a3cf4a83769805a0f437b2031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e8dea3b949c3a987303f35167b383ab01ac4ad9d10914b20fc6b9c92193f2997->leave($__internal_e8dea3b949c3a987303f35167b383ab01ac4ad9d10914b20fc6b9c92193f2997_prof);

        
        $__internal_1d3d073db60e3d328b9a1449c285d1a013d25f0a3cf4a83769805a0f437b2031->leave($__internal_1d3d073db60e3d328b9a1449c285d1a013d25f0a3cf4a83769805a0f437b2031_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
