<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_21efa291d45206a4b14384c8272d1e720cc1967cb7b8e640302031040eff3c5c extends Twig_Template
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
        $__internal_8e704f321f06efe7b93b33f9f1895c55012d004fbf83b95627e9d2e1d4bbf2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e704f321f06efe7b93b33f9f1895c55012d004fbf83b95627e9d2e1d4bbf2fd->enter($__internal_8e704f321f06efe7b93b33f9f1895c55012d004fbf83b95627e9d2e1d4bbf2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c48b1706a116a1af37f8e86506f9e1ad057e420660e3275b87ab91a6f399d0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48b1706a116a1af37f8e86506f9e1ad057e420660e3275b87ab91a6f399d0ca->enter($__internal_c48b1706a116a1af37f8e86506f9e1ad057e420660e3275b87ab91a6f399d0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8e704f321f06efe7b93b33f9f1895c55012d004fbf83b95627e9d2e1d4bbf2fd->leave($__internal_8e704f321f06efe7b93b33f9f1895c55012d004fbf83b95627e9d2e1d4bbf2fd_prof);

        
        $__internal_c48b1706a116a1af37f8e86506f9e1ad057e420660e3275b87ab91a6f399d0ca->leave($__internal_c48b1706a116a1af37f8e86506f9e1ad057e420660e3275b87ab91a6f399d0ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
