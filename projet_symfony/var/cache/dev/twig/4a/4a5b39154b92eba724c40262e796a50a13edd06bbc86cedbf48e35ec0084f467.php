<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_7dfafbefa54ea410a4dc6e03ad05fd07bcc7d40e25716e9064bdafba9625473f extends Twig_Template
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
        $__internal_f991293a07ac6ef2e3b4b26f0335dbf3bb580202496550b188facbcdbcabeba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f991293a07ac6ef2e3b4b26f0335dbf3bb580202496550b188facbcdbcabeba9->enter($__internal_f991293a07ac6ef2e3b4b26f0335dbf3bb580202496550b188facbcdbcabeba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_8e3c6ca0ddeb341cbd65ddbb835f8df58e6aabc4e7a0b5338a7d63f5e2c9e28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3c6ca0ddeb341cbd65ddbb835f8df58e6aabc4e7a0b5338a7d63f5e2c9e28a->enter($__internal_8e3c6ca0ddeb341cbd65ddbb835f8df58e6aabc4e7a0b5338a7d63f5e2c9e28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f991293a07ac6ef2e3b4b26f0335dbf3bb580202496550b188facbcdbcabeba9->leave($__internal_f991293a07ac6ef2e3b4b26f0335dbf3bb580202496550b188facbcdbcabeba9_prof);

        
        $__internal_8e3c6ca0ddeb341cbd65ddbb835f8df58e6aabc4e7a0b5338a7d63f5e2c9e28a->leave($__internal_8e3c6ca0ddeb341cbd65ddbb835f8df58e6aabc4e7a0b5338a7d63f5e2c9e28a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
