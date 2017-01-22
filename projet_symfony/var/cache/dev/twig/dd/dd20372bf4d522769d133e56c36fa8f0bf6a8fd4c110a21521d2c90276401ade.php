<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_041247594afdb21d86e57d00bd9f455c2950d682146f9760b59ec9767fc1cc29 extends Twig_Template
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
        $__internal_7828fe49fdb683296ab2f2951ff1d6d42178d820401d1e9835ddf9952818e005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7828fe49fdb683296ab2f2951ff1d6d42178d820401d1e9835ddf9952818e005->enter($__internal_7828fe49fdb683296ab2f2951ff1d6d42178d820401d1e9835ddf9952818e005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_53ff066573294e23bdb9d0b21a556dc2a2808e5a5ac26eeccbefce1534138a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ff066573294e23bdb9d0b21a556dc2a2808e5a5ac26eeccbefce1534138a9d->enter($__internal_53ff066573294e23bdb9d0b21a556dc2a2808e5a5ac26eeccbefce1534138a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_7828fe49fdb683296ab2f2951ff1d6d42178d820401d1e9835ddf9952818e005->leave($__internal_7828fe49fdb683296ab2f2951ff1d6d42178d820401d1e9835ddf9952818e005_prof);

        
        $__internal_53ff066573294e23bdb9d0b21a556dc2a2808e5a5ac26eeccbefce1534138a9d->leave($__internal_53ff066573294e23bdb9d0b21a556dc2a2808e5a5ac26eeccbefce1534138a9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
