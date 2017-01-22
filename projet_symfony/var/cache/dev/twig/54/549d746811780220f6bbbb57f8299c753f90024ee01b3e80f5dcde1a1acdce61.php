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
        $__internal_fe09099a8fd1e2fb0bb6761e089a336303aca8aef674ae8f22f80896b50d1b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe09099a8fd1e2fb0bb6761e089a336303aca8aef674ae8f22f80896b50d1b87->enter($__internal_fe09099a8fd1e2fb0bb6761e089a336303aca8aef674ae8f22f80896b50d1b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a1bb8479354d645be5d2afbb6ed29366bca6f3e3e84f0d1583c6a409fd8c6190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1bb8479354d645be5d2afbb6ed29366bca6f3e3e84f0d1583c6a409fd8c6190->enter($__internal_a1bb8479354d645be5d2afbb6ed29366bca6f3e3e84f0d1583c6a409fd8c6190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fe09099a8fd1e2fb0bb6761e089a336303aca8aef674ae8f22f80896b50d1b87->leave($__internal_fe09099a8fd1e2fb0bb6761e089a336303aca8aef674ae8f22f80896b50d1b87_prof);

        
        $__internal_a1bb8479354d645be5d2afbb6ed29366bca6f3e3e84f0d1583c6a409fd8c6190->leave($__internal_a1bb8479354d645be5d2afbb6ed29366bca6f3e3e84f0d1583c6a409fd8c6190_prof);

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
