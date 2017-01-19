<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0ded2a43f6c8e3eb0c4400d29773651adac4c72d49c786561abc3b9cfedca806 extends Twig_Template
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
        $__internal_9db8c6605f03a4157bbf772e7180690af2b9d0725624c9a09d9158fddacb6bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db8c6605f03a4157bbf772e7180690af2b9d0725624c9a09d9158fddacb6bfa->enter($__internal_9db8c6605f03a4157bbf772e7180690af2b9d0725624c9a09d9158fddacb6bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b79f9e7e438083eaf2f7ba5d244dc96a670d9e109ff59038d75425ad3f1c25f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79f9e7e438083eaf2f7ba5d244dc96a670d9e109ff59038d75425ad3f1c25f6->enter($__internal_b79f9e7e438083eaf2f7ba5d244dc96a670d9e109ff59038d75425ad3f1c25f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9db8c6605f03a4157bbf772e7180690af2b9d0725624c9a09d9158fddacb6bfa->leave($__internal_9db8c6605f03a4157bbf772e7180690af2b9d0725624c9a09d9158fddacb6bfa_prof);

        
        $__internal_b79f9e7e438083eaf2f7ba5d244dc96a670d9e109ff59038d75425ad3f1c25f6->leave($__internal_b79f9e7e438083eaf2f7ba5d244dc96a670d9e109ff59038d75425ad3f1c25f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
