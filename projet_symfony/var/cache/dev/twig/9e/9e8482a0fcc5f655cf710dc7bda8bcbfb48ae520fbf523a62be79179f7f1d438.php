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
        $__internal_83be9e52b4b17b43ca34599f215e3cfefd9dd634adeeb4ed7392aac6fbade4e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83be9e52b4b17b43ca34599f215e3cfefd9dd634adeeb4ed7392aac6fbade4e4->enter($__internal_83be9e52b4b17b43ca34599f215e3cfefd9dd634adeeb4ed7392aac6fbade4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_7c2d0d23316a66c8fec00732fb3a967c4a458f418271129a79c2c290c1a5e61f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2d0d23316a66c8fec00732fb3a967c4a458f418271129a79c2c290c1a5e61f->enter($__internal_7c2d0d23316a66c8fec00732fb3a967c4a458f418271129a79c2c290c1a5e61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_83be9e52b4b17b43ca34599f215e3cfefd9dd634adeeb4ed7392aac6fbade4e4->leave($__internal_83be9e52b4b17b43ca34599f215e3cfefd9dd634adeeb4ed7392aac6fbade4e4_prof);

        
        $__internal_7c2d0d23316a66c8fec00732fb3a967c4a458f418271129a79c2c290c1a5e61f->leave($__internal_7c2d0d23316a66c8fec00732fb3a967c4a458f418271129a79c2c290c1a5e61f_prof);

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
