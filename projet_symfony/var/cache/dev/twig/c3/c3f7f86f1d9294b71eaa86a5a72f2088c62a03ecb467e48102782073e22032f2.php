<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2652a2c3822f97570cafdb732482fdcb01784a7239fe92c7adc2dd546f19b87d extends Twig_Template
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
        $__internal_a2011977363cca6c0b63ddaf0b52ef4939a4219d72316d52f02dc747f721356b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2011977363cca6c0b63ddaf0b52ef4939a4219d72316d52f02dc747f721356b->enter($__internal_a2011977363cca6c0b63ddaf0b52ef4939a4219d72316d52f02dc747f721356b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_6d6050b9e413b1f497fb1e756b76aded0954fd0cef31e385c6dec5590a2b6929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6050b9e413b1f497fb1e756b76aded0954fd0cef31e385c6dec5590a2b6929->enter($__internal_6d6050b9e413b1f497fb1e756b76aded0954fd0cef31e385c6dec5590a2b6929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a2011977363cca6c0b63ddaf0b52ef4939a4219d72316d52f02dc747f721356b->leave($__internal_a2011977363cca6c0b63ddaf0b52ef4939a4219d72316d52f02dc747f721356b_prof);

        
        $__internal_6d6050b9e413b1f497fb1e756b76aded0954fd0cef31e385c6dec5590a2b6929->leave($__internal_6d6050b9e413b1f497fb1e756b76aded0954fd0cef31e385c6dec5590a2b6929_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
