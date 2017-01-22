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
        $__internal_030316217b80e0f6803e957fdf819a22fefd23d6660d64a74c3002ad3ebaafb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030316217b80e0f6803e957fdf819a22fefd23d6660d64a74c3002ad3ebaafb1->enter($__internal_030316217b80e0f6803e957fdf819a22fefd23d6660d64a74c3002ad3ebaafb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_a9dbafd9ca6f8f7459c44c2677488935849b8992544993777a6af5c879e22b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9dbafd9ca6f8f7459c44c2677488935849b8992544993777a6af5c879e22b5b->enter($__internal_a9dbafd9ca6f8f7459c44c2677488935849b8992544993777a6af5c879e22b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_030316217b80e0f6803e957fdf819a22fefd23d6660d64a74c3002ad3ebaafb1->leave($__internal_030316217b80e0f6803e957fdf819a22fefd23d6660d64a74c3002ad3ebaafb1_prof);

        
        $__internal_a9dbafd9ca6f8f7459c44c2677488935849b8992544993777a6af5c879e22b5b->leave($__internal_a9dbafd9ca6f8f7459c44c2677488935849b8992544993777a6af5c879e22b5b_prof);

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
