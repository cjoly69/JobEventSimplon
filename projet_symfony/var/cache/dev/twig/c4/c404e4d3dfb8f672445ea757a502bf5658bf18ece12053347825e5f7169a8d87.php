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
        $__internal_c4c88b0dc3e913ed438f22ac15001a3b3b298367a6cef74766ccef77bff84ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4c88b0dc3e913ed438f22ac15001a3b3b298367a6cef74766ccef77bff84ce4->enter($__internal_c4c88b0dc3e913ed438f22ac15001a3b3b298367a6cef74766ccef77bff84ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_cb8c102c5ccb24938f1465379678be370cd25ed25669d3a3eee99ad25e3d58ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8c102c5ccb24938f1465379678be370cd25ed25669d3a3eee99ad25e3d58ac->enter($__internal_cb8c102c5ccb24938f1465379678be370cd25ed25669d3a3eee99ad25e3d58ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c4c88b0dc3e913ed438f22ac15001a3b3b298367a6cef74766ccef77bff84ce4->leave($__internal_c4c88b0dc3e913ed438f22ac15001a3b3b298367a6cef74766ccef77bff84ce4_prof);

        
        $__internal_cb8c102c5ccb24938f1465379678be370cd25ed25669d3a3eee99ad25e3d58ac->leave($__internal_cb8c102c5ccb24938f1465379678be370cd25ed25669d3a3eee99ad25e3d58ac_prof);

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
