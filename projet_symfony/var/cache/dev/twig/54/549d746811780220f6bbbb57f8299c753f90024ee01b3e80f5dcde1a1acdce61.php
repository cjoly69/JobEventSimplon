<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_244a7ddbd92de401991200af6db6192090d24cf9b92dea2625a79e0ce972e1fc extends Twig_Template
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
        $__internal_ba11f4253b97e5452c368ebf55a8d6c48d90a736daf90ddbda81c9b3eebbc1d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba11f4253b97e5452c368ebf55a8d6c48d90a736daf90ddbda81c9b3eebbc1d3->enter($__internal_ba11f4253b97e5452c368ebf55a8d6c48d90a736daf90ddbda81c9b3eebbc1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_9ae192411844941688ac4dcbdf646fe92a5e4156da41e62c8a3f0be8f41cf553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae192411844941688ac4dcbdf646fe92a5e4156da41e62c8a3f0be8f41cf553->enter($__internal_9ae192411844941688ac4dcbdf646fe92a5e4156da41e62c8a3f0be8f41cf553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ba11f4253b97e5452c368ebf55a8d6c48d90a736daf90ddbda81c9b3eebbc1d3->leave($__internal_ba11f4253b97e5452c368ebf55a8d6c48d90a736daf90ddbda81c9b3eebbc1d3_prof);

        
        $__internal_9ae192411844941688ac4dcbdf646fe92a5e4156da41e62c8a3f0be8f41cf553->leave($__internal_9ae192411844941688ac4dcbdf646fe92a5e4156da41e62c8a3f0be8f41cf553_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
