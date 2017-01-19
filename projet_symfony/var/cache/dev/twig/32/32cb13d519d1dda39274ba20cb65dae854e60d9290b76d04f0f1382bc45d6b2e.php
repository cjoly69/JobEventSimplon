<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_aef0a7109e4fa39b74220aaa3ef104c7c63f77e7622c670cad074fe677b05ab8 extends Twig_Template
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
        $__internal_e00d58bcc5ac717addb788fb0bbad6a2917252bed38c1d09d9a0be4730e7025b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00d58bcc5ac717addb788fb0bbad6a2917252bed38c1d09d9a0be4730e7025b->enter($__internal_e00d58bcc5ac717addb788fb0bbad6a2917252bed38c1d09d9a0be4730e7025b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ea85a60a9cf27b021aa6d352ecd2b779eb8f917dcd1db64eb6f7e6550f192c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea85a60a9cf27b021aa6d352ecd2b779eb8f917dcd1db64eb6f7e6550f192c88->enter($__internal_ea85a60a9cf27b021aa6d352ecd2b779eb8f917dcd1db64eb6f7e6550f192c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e00d58bcc5ac717addb788fb0bbad6a2917252bed38c1d09d9a0be4730e7025b->leave($__internal_e00d58bcc5ac717addb788fb0bbad6a2917252bed38c1d09d9a0be4730e7025b_prof);

        
        $__internal_ea85a60a9cf27b021aa6d352ecd2b779eb8f917dcd1db64eb6f7e6550f192c88->leave($__internal_ea85a60a9cf27b021aa6d352ecd2b779eb8f917dcd1db64eb6f7e6550f192c88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
