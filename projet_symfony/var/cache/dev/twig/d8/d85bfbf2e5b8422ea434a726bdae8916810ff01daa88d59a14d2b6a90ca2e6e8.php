<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4b3cbd3ae86ada776cf4766a55bb32f5277455c8db5310ccb1c64e9e2755e09c extends Twig_Template
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
        $__internal_b4fc65753afdb3b9e56f576718dda851dd6b1c793f7b13a79a91c3a0ccbfa479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4fc65753afdb3b9e56f576718dda851dd6b1c793f7b13a79a91c3a0ccbfa479->enter($__internal_b4fc65753afdb3b9e56f576718dda851dd6b1c793f7b13a79a91c3a0ccbfa479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2c9bc8cf333257cb9defddf4196e2fdb4eeb97b10d9ffd38cfa5f2b9ad4b9c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9bc8cf333257cb9defddf4196e2fdb4eeb97b10d9ffd38cfa5f2b9ad4b9c02->enter($__internal_2c9bc8cf333257cb9defddf4196e2fdb4eeb97b10d9ffd38cfa5f2b9ad4b9c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b4fc65753afdb3b9e56f576718dda851dd6b1c793f7b13a79a91c3a0ccbfa479->leave($__internal_b4fc65753afdb3b9e56f576718dda851dd6b1c793f7b13a79a91c3a0ccbfa479_prof);

        
        $__internal_2c9bc8cf333257cb9defddf4196e2fdb4eeb97b10d9ffd38cfa5f2b9ad4b9c02->leave($__internal_2c9bc8cf333257cb9defddf4196e2fdb4eeb97b10d9ffd38cfa5f2b9ad4b9c02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
