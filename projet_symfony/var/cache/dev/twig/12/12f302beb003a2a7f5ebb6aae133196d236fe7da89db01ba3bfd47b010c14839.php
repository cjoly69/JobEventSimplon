<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_75fc9020857920ac0a12c9851c221118387f6796821def3ba2fee4e9f8c0dcaa extends Twig_Template
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
        $__internal_6b1a574f2b035c037ca0c7bbb8628a42b08706f0c98196af9636e22737fcba23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1a574f2b035c037ca0c7bbb8628a42b08706f0c98196af9636e22737fcba23->enter($__internal_6b1a574f2b035c037ca0c7bbb8628a42b08706f0c98196af9636e22737fcba23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_e73ed86ff1cc793e0bab0e4ca697261389ffdff037f39776f90f26306fc2669e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73ed86ff1cc793e0bab0e4ca697261389ffdff037f39776f90f26306fc2669e->enter($__internal_e73ed86ff1cc793e0bab0e4ca697261389ffdff037f39776f90f26306fc2669e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6b1a574f2b035c037ca0c7bbb8628a42b08706f0c98196af9636e22737fcba23->leave($__internal_6b1a574f2b035c037ca0c7bbb8628a42b08706f0c98196af9636e22737fcba23_prof);

        
        $__internal_e73ed86ff1cc793e0bab0e4ca697261389ffdff037f39776f90f26306fc2669e->leave($__internal_e73ed86ff1cc793e0bab0e4ca697261389ffdff037f39776f90f26306fc2669e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
