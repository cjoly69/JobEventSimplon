<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ba62a218672615d6c312b178aee1856fb9c49e4b10e42db547ec0e6a3bfe1a3e extends Twig_Template
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
        $__internal_b89d2be2c876ab2b7316539c2e58add6b7c42d345fce169df71dc7e6812d8392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b89d2be2c876ab2b7316539c2e58add6b7c42d345fce169df71dc7e6812d8392->enter($__internal_b89d2be2c876ab2b7316539c2e58add6b7c42d345fce169df71dc7e6812d8392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_07c33e641f818759d992d75efe2f82b1bec895bbeb1e53b3bb60b07e7638ef96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c33e641f818759d992d75efe2f82b1bec895bbeb1e53b3bb60b07e7638ef96->enter($__internal_07c33e641f818759d992d75efe2f82b1bec895bbeb1e53b3bb60b07e7638ef96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b89d2be2c876ab2b7316539c2e58add6b7c42d345fce169df71dc7e6812d8392->leave($__internal_b89d2be2c876ab2b7316539c2e58add6b7c42d345fce169df71dc7e6812d8392_prof);

        
        $__internal_07c33e641f818759d992d75efe2f82b1bec895bbeb1e53b3bb60b07e7638ef96->leave($__internal_07c33e641f818759d992d75efe2f82b1bec895bbeb1e53b3bb60b07e7638ef96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}