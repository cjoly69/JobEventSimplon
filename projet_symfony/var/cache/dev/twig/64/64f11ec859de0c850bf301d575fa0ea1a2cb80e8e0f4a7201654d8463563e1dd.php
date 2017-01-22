<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8032492f7383c6ed291ffbc2f48c31f706773200fcdacff0903dee90d809845e extends Twig_Template
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
        $__internal_d191af4569394e9a492cdc745eb6019b09ca790815b141b3f762496829a48ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d191af4569394e9a492cdc745eb6019b09ca790815b141b3f762496829a48ff2->enter($__internal_d191af4569394e9a492cdc745eb6019b09ca790815b141b3f762496829a48ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_30358e77ed2b2c6e59780813edd91cd4186994eaca7af7e0f277e62bb990c96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30358e77ed2b2c6e59780813edd91cd4186994eaca7af7e0f277e62bb990c96d->enter($__internal_30358e77ed2b2c6e59780813edd91cd4186994eaca7af7e0f277e62bb990c96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d191af4569394e9a492cdc745eb6019b09ca790815b141b3f762496829a48ff2->leave($__internal_d191af4569394e9a492cdc745eb6019b09ca790815b141b3f762496829a48ff2_prof);

        
        $__internal_30358e77ed2b2c6e59780813edd91cd4186994eaca7af7e0f277e62bb990c96d->leave($__internal_30358e77ed2b2c6e59780813edd91cd4186994eaca7af7e0f277e62bb990c96d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
