<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_e2a5a3909aa3fb1362ca96717fc73e9cffc9dbaf951c846060c03b7045bbfc06 extends Twig_Template
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
        $__internal_4f4107625a175753bbfcf67fccca4490e8b025a5f42948f868b7bd881860ca0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4107625a175753bbfcf67fccca4490e8b025a5f42948f868b7bd881860ca0a->enter($__internal_4f4107625a175753bbfcf67fccca4490e8b025a5f42948f868b7bd881860ca0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_adda5c600a5b35bb6b49f6fa3d1ff02a0b3c10aad7e18a36b2a776e308af77c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adda5c600a5b35bb6b49f6fa3d1ff02a0b3c10aad7e18a36b2a776e308af77c7->enter($__internal_adda5c600a5b35bb6b49f6fa3d1ff02a0b3c10aad7e18a36b2a776e308af77c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4f4107625a175753bbfcf67fccca4490e8b025a5f42948f868b7bd881860ca0a->leave($__internal_4f4107625a175753bbfcf67fccca4490e8b025a5f42948f868b7bd881860ca0a_prof);

        
        $__internal_adda5c600a5b35bb6b49f6fa3d1ff02a0b3c10aad7e18a36b2a776e308af77c7->leave($__internal_adda5c600a5b35bb6b49f6fa3d1ff02a0b3c10aad7e18a36b2a776e308af77c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
