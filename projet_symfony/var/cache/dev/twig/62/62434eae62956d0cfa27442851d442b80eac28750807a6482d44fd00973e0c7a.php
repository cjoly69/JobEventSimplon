<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_556e355c72ebc853d320ee94b3881a2777dbecaaf328b2333492f4cc55f4882b extends Twig_Template
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
        $__internal_4d38a25c21ace7beb1a0d359a53a27d3936634a641f46a92e82e3004b11589f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d38a25c21ace7beb1a0d359a53a27d3936634a641f46a92e82e3004b11589f1->enter($__internal_4d38a25c21ace7beb1a0d359a53a27d3936634a641f46a92e82e3004b11589f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f92073f4a354438d60f18af01c3f19dfd75e2bd014c8c8bcdb0757f9a59cda5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92073f4a354438d60f18af01c3f19dfd75e2bd014c8c8bcdb0757f9a59cda5b->enter($__internal_f92073f4a354438d60f18af01c3f19dfd75e2bd014c8c8bcdb0757f9a59cda5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4d38a25c21ace7beb1a0d359a53a27d3936634a641f46a92e82e3004b11589f1->leave($__internal_4d38a25c21ace7beb1a0d359a53a27d3936634a641f46a92e82e3004b11589f1_prof);

        
        $__internal_f92073f4a354438d60f18af01c3f19dfd75e2bd014c8c8bcdb0757f9a59cda5b->leave($__internal_f92073f4a354438d60f18af01c3f19dfd75e2bd014c8c8bcdb0757f9a59cda5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
