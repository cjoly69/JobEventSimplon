<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5a07e3e4a46ba8d08a79e6cd74de8f7ab588c6bcc6a1101d8e319cd6f8c0499b extends Twig_Template
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
        $__internal_2b5fc4e45fb2b85e585e0ec063db6ff61fb943b1da8e989c136f188559ce729b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b5fc4e45fb2b85e585e0ec063db6ff61fb943b1da8e989c136f188559ce729b->enter($__internal_2b5fc4e45fb2b85e585e0ec063db6ff61fb943b1da8e989c136f188559ce729b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_6efbf51da96addf26bd1fd4aa5b1f1b99bd1af52e7a6caa529fe821e5b939314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6efbf51da96addf26bd1fd4aa5b1f1b99bd1af52e7a6caa529fe821e5b939314->enter($__internal_6efbf51da96addf26bd1fd4aa5b1f1b99bd1af52e7a6caa529fe821e5b939314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2b5fc4e45fb2b85e585e0ec063db6ff61fb943b1da8e989c136f188559ce729b->leave($__internal_2b5fc4e45fb2b85e585e0ec063db6ff61fb943b1da8e989c136f188559ce729b_prof);

        
        $__internal_6efbf51da96addf26bd1fd4aa5b1f1b99bd1af52e7a6caa529fe821e5b939314->leave($__internal_6efbf51da96addf26bd1fd4aa5b1f1b99bd1af52e7a6caa529fe821e5b939314_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
