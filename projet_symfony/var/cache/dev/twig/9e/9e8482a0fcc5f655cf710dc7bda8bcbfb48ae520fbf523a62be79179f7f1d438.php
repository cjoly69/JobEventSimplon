<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_934178d853b6d6959eedee2416233920a59ae759d5f3d58bcec448ad2c1359d6 extends Twig_Template
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
        $__internal_433ffaab5ec85b5bb54876850f02ad07b4889d1b346985d0e64c2c6a91e1780d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433ffaab5ec85b5bb54876850f02ad07b4889d1b346985d0e64c2c6a91e1780d->enter($__internal_433ffaab5ec85b5bb54876850f02ad07b4889d1b346985d0e64c2c6a91e1780d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_8a4ecf449c3ed814d0022870b2506d2005d16d657f28637cc09d2ddff979f9b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4ecf449c3ed814d0022870b2506d2005d16d657f28637cc09d2ddff979f9b9->enter($__internal_8a4ecf449c3ed814d0022870b2506d2005d16d657f28637cc09d2ddff979f9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_433ffaab5ec85b5bb54876850f02ad07b4889d1b346985d0e64c2c6a91e1780d->leave($__internal_433ffaab5ec85b5bb54876850f02ad07b4889d1b346985d0e64c2c6a91e1780d_prof);

        
        $__internal_8a4ecf449c3ed814d0022870b2506d2005d16d657f28637cc09d2ddff979f9b9->leave($__internal_8a4ecf449c3ed814d0022870b2506d2005d16d657f28637cc09d2ddff979f9b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
