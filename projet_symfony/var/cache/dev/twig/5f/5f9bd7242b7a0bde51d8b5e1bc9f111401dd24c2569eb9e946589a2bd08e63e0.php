<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_4aca9f989d643d7278614d3ace26135b0e90f00585a4fb663ce7c7db6972fcaf extends Twig_Template
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
        $__internal_6ac1951c926d1b6817f11e3b2ba78f0dbdbd6db3ad5664f7d86d8afac5274307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac1951c926d1b6817f11e3b2ba78f0dbdbd6db3ad5664f7d86d8afac5274307->enter($__internal_6ac1951c926d1b6817f11e3b2ba78f0dbdbd6db3ad5664f7d86d8afac5274307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_766baf9f4f86aadc55a9dd86972ef8016c856f19ec4df54a3147f563f06bb464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_766baf9f4f86aadc55a9dd86972ef8016c856f19ec4df54a3147f563f06bb464->enter($__internal_766baf9f4f86aadc55a9dd86972ef8016c856f19ec4df54a3147f563f06bb464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_6ac1951c926d1b6817f11e3b2ba78f0dbdbd6db3ad5664f7d86d8afac5274307->leave($__internal_6ac1951c926d1b6817f11e3b2ba78f0dbdbd6db3ad5664f7d86d8afac5274307_prof);

        
        $__internal_766baf9f4f86aadc55a9dd86972ef8016c856f19ec4df54a3147f563f06bb464->leave($__internal_766baf9f4f86aadc55a9dd86972ef8016c856f19ec4df54a3147f563f06bb464_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
