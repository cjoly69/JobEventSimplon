<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_72e60c60028611e131ab1527b17147114c4421fc30b96dadd3e71d01bf8a1c9a extends Twig_Template
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
        $__internal_177c2047bca2fc7623f5a580e4dd1527d14aa4b76323d2e4c46914afd976f9fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_177c2047bca2fc7623f5a580e4dd1527d14aa4b76323d2e4c46914afd976f9fb->enter($__internal_177c2047bca2fc7623f5a580e4dd1527d14aa4b76323d2e4c46914afd976f9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_422c1a07a410b13c7a9265be8fd04e7c584d5eaa84c9715889d05c406bd6e53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_422c1a07a410b13c7a9265be8fd04e7c584d5eaa84c9715889d05c406bd6e53a->enter($__internal_422c1a07a410b13c7a9265be8fd04e7c584d5eaa84c9715889d05c406bd6e53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_177c2047bca2fc7623f5a580e4dd1527d14aa4b76323d2e4c46914afd976f9fb->leave($__internal_177c2047bca2fc7623f5a580e4dd1527d14aa4b76323d2e4c46914afd976f9fb_prof);

        
        $__internal_422c1a07a410b13c7a9265be8fd04e7c584d5eaa84c9715889d05c406bd6e53a->leave($__internal_422c1a07a410b13c7a9265be8fd04e7c584d5eaa84c9715889d05c406bd6e53a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
