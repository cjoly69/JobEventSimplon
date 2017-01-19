<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_556e355c72ebc853d320ee94b3881a2777dbecaaf328b2333492f4cc55f4882b extends Twig_Template
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
        $__internal_2858cbf40f8f94933cc8e9c048cc3acd04c77aa9dccc5d7fa0621c7b7111ff1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2858cbf40f8f94933cc8e9c048cc3acd04c77aa9dccc5d7fa0621c7b7111ff1d->enter($__internal_2858cbf40f8f94933cc8e9c048cc3acd04c77aa9dccc5d7fa0621c7b7111ff1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_4f1211b634635e056668b08b9ccaec6e57e33ee2fa6a0512bdba4b4d25c0938c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1211b634635e056668b08b9ccaec6e57e33ee2fa6a0512bdba4b4d25c0938c->enter($__internal_4f1211b634635e056668b08b9ccaec6e57e33ee2fa6a0512bdba4b4d25c0938c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_2858cbf40f8f94933cc8e9c048cc3acd04c77aa9dccc5d7fa0621c7b7111ff1d->leave($__internal_2858cbf40f8f94933cc8e9c048cc3acd04c77aa9dccc5d7fa0621c7b7111ff1d_prof);

        
        $__internal_4f1211b634635e056668b08b9ccaec6e57e33ee2fa6a0512bdba4b4d25c0938c->leave($__internal_4f1211b634635e056668b08b9ccaec6e57e33ee2fa6a0512bdba4b4d25c0938c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
