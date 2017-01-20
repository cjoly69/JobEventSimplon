<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6f65ba6cbd334586800cca9f69f38849ea51aaa9ecf655adbae06865a4eef7d5 extends Twig_Template
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
        $__internal_8aea7b4abe54f12ec2e38b08a63f1fd4882f74f3b56d056947812af5d256ebe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aea7b4abe54f12ec2e38b08a63f1fd4882f74f3b56d056947812af5d256ebe0->enter($__internal_8aea7b4abe54f12ec2e38b08a63f1fd4882f74f3b56d056947812af5d256ebe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_daf14ab2b776a8f5cc02c77f91a1c65f1a23742040c0693b387bb6529e6d5450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf14ab2b776a8f5cc02c77f91a1c65f1a23742040c0693b387bb6529e6d5450->enter($__internal_daf14ab2b776a8f5cc02c77f91a1c65f1a23742040c0693b387bb6529e6d5450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8aea7b4abe54f12ec2e38b08a63f1fd4882f74f3b56d056947812af5d256ebe0->leave($__internal_8aea7b4abe54f12ec2e38b08a63f1fd4882f74f3b56d056947812af5d256ebe0_prof);

        
        $__internal_daf14ab2b776a8f5cc02c77f91a1c65f1a23742040c0693b387bb6529e6d5450->leave($__internal_daf14ab2b776a8f5cc02c77f91a1c65f1a23742040c0693b387bb6529e6d5450_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
