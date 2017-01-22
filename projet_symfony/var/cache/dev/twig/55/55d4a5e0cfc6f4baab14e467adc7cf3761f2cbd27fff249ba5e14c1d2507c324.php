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
        $__internal_ba0567577092b17ee98a226b01a08f4981bebdfd1c8dada197c425705b000334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba0567577092b17ee98a226b01a08f4981bebdfd1c8dada197c425705b000334->enter($__internal_ba0567577092b17ee98a226b01a08f4981bebdfd1c8dada197c425705b000334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_559a54fe98be1e04703ebbe36a847e143fbd422c43af98b30890a614aa51e5cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559a54fe98be1e04703ebbe36a847e143fbd422c43af98b30890a614aa51e5cf->enter($__internal_559a54fe98be1e04703ebbe36a847e143fbd422c43af98b30890a614aa51e5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ba0567577092b17ee98a226b01a08f4981bebdfd1c8dada197c425705b000334->leave($__internal_ba0567577092b17ee98a226b01a08f4981bebdfd1c8dada197c425705b000334_prof);

        
        $__internal_559a54fe98be1e04703ebbe36a847e143fbd422c43af98b30890a614aa51e5cf->leave($__internal_559a54fe98be1e04703ebbe36a847e143fbd422c43af98b30890a614aa51e5cf_prof);

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
