<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a3eaa0f5214292b6165297a6a941120e0088bf4d9b604d8950e2c910286ad108 extends Twig_Template
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
        $__internal_ee61de52f8a9ec29e3ba5841c18639f6af18bcb4b7785510b20e782d1f04f482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee61de52f8a9ec29e3ba5841c18639f6af18bcb4b7785510b20e782d1f04f482->enter($__internal_ee61de52f8a9ec29e3ba5841c18639f6af18bcb4b7785510b20e782d1f04f482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9a9204c444f2a5439d30ef917d53e1897d21d9d8a75353830c6925da1fc76ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9204c444f2a5439d30ef917d53e1897d21d9d8a75353830c6925da1fc76ca7->enter($__internal_9a9204c444f2a5439d30ef917d53e1897d21d9d8a75353830c6925da1fc76ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ee61de52f8a9ec29e3ba5841c18639f6af18bcb4b7785510b20e782d1f04f482->leave($__internal_ee61de52f8a9ec29e3ba5841c18639f6af18bcb4b7785510b20e782d1f04f482_prof);

        
        $__internal_9a9204c444f2a5439d30ef917d53e1897d21d9d8a75353830c6925da1fc76ca7->leave($__internal_9a9204c444f2a5439d30ef917d53e1897d21d9d8a75353830c6925da1fc76ca7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
