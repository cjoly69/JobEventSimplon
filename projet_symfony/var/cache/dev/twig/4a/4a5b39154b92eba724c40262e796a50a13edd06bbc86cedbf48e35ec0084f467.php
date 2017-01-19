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
        $__internal_7297162a5add2ce400d23d8d17a94acb0a6eb506c3248438fdf30e7692b26dfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7297162a5add2ce400d23d8d17a94acb0a6eb506c3248438fdf30e7692b26dfa->enter($__internal_7297162a5add2ce400d23d8d17a94acb0a6eb506c3248438fdf30e7692b26dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_97da481c6d28d4e2019b52c1edec6fe2fb183afaaec42c074475626177ad22b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97da481c6d28d4e2019b52c1edec6fe2fb183afaaec42c074475626177ad22b3->enter($__internal_97da481c6d28d4e2019b52c1edec6fe2fb183afaaec42c074475626177ad22b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7297162a5add2ce400d23d8d17a94acb0a6eb506c3248438fdf30e7692b26dfa->leave($__internal_7297162a5add2ce400d23d8d17a94acb0a6eb506c3248438fdf30e7692b26dfa_prof);

        
        $__internal_97da481c6d28d4e2019b52c1edec6fe2fb183afaaec42c074475626177ad22b3->leave($__internal_97da481c6d28d4e2019b52c1edec6fe2fb183afaaec42c074475626177ad22b3_prof);

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
