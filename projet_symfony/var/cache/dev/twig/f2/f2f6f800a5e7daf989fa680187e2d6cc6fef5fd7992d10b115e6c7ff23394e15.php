<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_1920e96498a3c169f977e2197f130d2961dfb5f804c708222b8a97d99118f58a extends Twig_Template
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
        $__internal_23e0518f9f99ca46e0a3502c9e227a4e39fe1537732d2518cbfd4521b574f00d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e0518f9f99ca46e0a3502c9e227a4e39fe1537732d2518cbfd4521b574f00d->enter($__internal_23e0518f9f99ca46e0a3502c9e227a4e39fe1537732d2518cbfd4521b574f00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_02927caf669ad14ce028a7ef28a3dd52ece505dd9083143d6489f1d8c2ff0261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02927caf669ad14ce028a7ef28a3dd52ece505dd9083143d6489f1d8c2ff0261->enter($__internal_02927caf669ad14ce028a7ef28a3dd52ece505dd9083143d6489f1d8c2ff0261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_23e0518f9f99ca46e0a3502c9e227a4e39fe1537732d2518cbfd4521b574f00d->leave($__internal_23e0518f9f99ca46e0a3502c9e227a4e39fe1537732d2518cbfd4521b574f00d_prof);

        
        $__internal_02927caf669ad14ce028a7ef28a3dd52ece505dd9083143d6489f1d8c2ff0261->leave($__internal_02927caf669ad14ce028a7ef28a3dd52ece505dd9083143d6489f1d8c2ff0261_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
