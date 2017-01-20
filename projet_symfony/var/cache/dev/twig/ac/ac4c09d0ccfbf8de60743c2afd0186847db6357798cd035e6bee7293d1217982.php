<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5c53e42b4db184ee433de692bf1e8f3fb6abbd50c13e10575595981d4ee81c85 extends Twig_Template
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
        $__internal_eb4439181d28ac97bd68989326cd30ea66d6c08c5f34e7a587fa0e1cc96c39be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4439181d28ac97bd68989326cd30ea66d6c08c5f34e7a587fa0e1cc96c39be->enter($__internal_eb4439181d28ac97bd68989326cd30ea66d6c08c5f34e7a587fa0e1cc96c39be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_eff73d452e698962748ed1586507604acea9b20e0fe85765e1c1f17615e147ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff73d452e698962748ed1586507604acea9b20e0fe85765e1c1f17615e147ec->enter($__internal_eff73d452e698962748ed1586507604acea9b20e0fe85765e1c1f17615e147ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_eb4439181d28ac97bd68989326cd30ea66d6c08c5f34e7a587fa0e1cc96c39be->leave($__internal_eb4439181d28ac97bd68989326cd30ea66d6c08c5f34e7a587fa0e1cc96c39be_prof);

        
        $__internal_eff73d452e698962748ed1586507604acea9b20e0fe85765e1c1f17615e147ec->leave($__internal_eff73d452e698962748ed1586507604acea9b20e0fe85765e1c1f17615e147ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
