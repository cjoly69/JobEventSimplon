<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b786961ca3bdfd67e59e927be8a626923fbec9c29b9206e87d4306621306d1b5 extends Twig_Template
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
        $__internal_70bb22a35d86774692e7aaf48a4c9542458148dab5d45e742bf1778c7eae2f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70bb22a35d86774692e7aaf48a4c9542458148dab5d45e742bf1778c7eae2f2a->enter($__internal_70bb22a35d86774692e7aaf48a4c9542458148dab5d45e742bf1778c7eae2f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_2740ed9a01da59e9ec6dda3955a0e905b4339a8c53bb53d82c374d2666a724c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2740ed9a01da59e9ec6dda3955a0e905b4339a8c53bb53d82c374d2666a724c1->enter($__internal_2740ed9a01da59e9ec6dda3955a0e905b4339a8c53bb53d82c374d2666a724c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_70bb22a35d86774692e7aaf48a4c9542458148dab5d45e742bf1778c7eae2f2a->leave($__internal_70bb22a35d86774692e7aaf48a4c9542458148dab5d45e742bf1778c7eae2f2a_prof);

        
        $__internal_2740ed9a01da59e9ec6dda3955a0e905b4339a8c53bb53d82c374d2666a724c1->leave($__internal_2740ed9a01da59e9ec6dda3955a0e905b4339a8c53bb53d82c374d2666a724c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
