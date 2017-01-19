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
        $__internal_8399ca7e3a9fcf07313f640f4feca043d3e741f18ed89833a576c7152b6fc8e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8399ca7e3a9fcf07313f640f4feca043d3e741f18ed89833a576c7152b6fc8e0->enter($__internal_8399ca7e3a9fcf07313f640f4feca043d3e741f18ed89833a576c7152b6fc8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_8e6881809800d1023e221dfffa3dd454af88e1a8b505957b6979ded43e92492b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6881809800d1023e221dfffa3dd454af88e1a8b505957b6979ded43e92492b->enter($__internal_8e6881809800d1023e221dfffa3dd454af88e1a8b505957b6979ded43e92492b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8399ca7e3a9fcf07313f640f4feca043d3e741f18ed89833a576c7152b6fc8e0->leave($__internal_8399ca7e3a9fcf07313f640f4feca043d3e741f18ed89833a576c7152b6fc8e0_prof);

        
        $__internal_8e6881809800d1023e221dfffa3dd454af88e1a8b505957b6979ded43e92492b->leave($__internal_8e6881809800d1023e221dfffa3dd454af88e1a8b505957b6979ded43e92492b_prof);

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
