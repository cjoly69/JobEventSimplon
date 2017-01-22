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
        $__internal_eee8ae74c7f45ced24955d8a2651d7c5583834bcbff5a61c86b1012419b0b731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eee8ae74c7f45ced24955d8a2651d7c5583834bcbff5a61c86b1012419b0b731->enter($__internal_eee8ae74c7f45ced24955d8a2651d7c5583834bcbff5a61c86b1012419b0b731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_9d9b2e714c71e239d247cc505eb6055a9eef9953904ae6a11e14a90e47c313e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9b2e714c71e239d247cc505eb6055a9eef9953904ae6a11e14a90e47c313e6->enter($__internal_9d9b2e714c71e239d247cc505eb6055a9eef9953904ae6a11e14a90e47c313e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_eee8ae74c7f45ced24955d8a2651d7c5583834bcbff5a61c86b1012419b0b731->leave($__internal_eee8ae74c7f45ced24955d8a2651d7c5583834bcbff5a61c86b1012419b0b731_prof);

        
        $__internal_9d9b2e714c71e239d247cc505eb6055a9eef9953904ae6a11e14a90e47c313e6->leave($__internal_9d9b2e714c71e239d247cc505eb6055a9eef9953904ae6a11e14a90e47c313e6_prof);

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
