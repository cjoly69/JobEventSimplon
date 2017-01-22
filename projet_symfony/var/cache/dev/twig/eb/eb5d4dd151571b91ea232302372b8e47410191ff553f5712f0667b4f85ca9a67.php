<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6d608d61bbd904ceaa533265000687aca34bf735062e9b339d2639f6e567ecb1 extends Twig_Template
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
        $__internal_ee64c63f7ac7242118a4e323a2519f627dac0d28f5519090c0ba8d84efe5b393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee64c63f7ac7242118a4e323a2519f627dac0d28f5519090c0ba8d84efe5b393->enter($__internal_ee64c63f7ac7242118a4e323a2519f627dac0d28f5519090c0ba8d84efe5b393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7fa1553f0b17f95e88287316c91edcd996ea50d25157372c46c81c1aa997d875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa1553f0b17f95e88287316c91edcd996ea50d25157372c46c81c1aa997d875->enter($__internal_7fa1553f0b17f95e88287316c91edcd996ea50d25157372c46c81c1aa997d875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ee64c63f7ac7242118a4e323a2519f627dac0d28f5519090c0ba8d84efe5b393->leave($__internal_ee64c63f7ac7242118a4e323a2519f627dac0d28f5519090c0ba8d84efe5b393_prof);

        
        $__internal_7fa1553f0b17f95e88287316c91edcd996ea50d25157372c46c81c1aa997d875->leave($__internal_7fa1553f0b17f95e88287316c91edcd996ea50d25157372c46c81c1aa997d875_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
