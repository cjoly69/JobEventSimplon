<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5c53e42b4db184ee433de692bf1e8f3fb6abbd50c13e10575595981d4ee81c85 extends Twig_Template
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
        $__internal_f370a9d92bdf201aef3e112ff1e568394afe8e26d504ae3839f4940624977aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f370a9d92bdf201aef3e112ff1e568394afe8e26d504ae3839f4940624977aff->enter($__internal_f370a9d92bdf201aef3e112ff1e568394afe8e26d504ae3839f4940624977aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_5fb43c724d15868d2d708c4d7dff36f2ef9f82c02908f856451148e416a2be57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb43c724d15868d2d708c4d7dff36f2ef9f82c02908f856451148e416a2be57->enter($__internal_5fb43c724d15868d2d708c4d7dff36f2ef9f82c02908f856451148e416a2be57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f370a9d92bdf201aef3e112ff1e568394afe8e26d504ae3839f4940624977aff->leave($__internal_f370a9d92bdf201aef3e112ff1e568394afe8e26d504ae3839f4940624977aff_prof);

        
        $__internal_5fb43c724d15868d2d708c4d7dff36f2ef9f82c02908f856451148e416a2be57->leave($__internal_5fb43c724d15868d2d708c4d7dff36f2ef9f82c02908f856451148e416a2be57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
