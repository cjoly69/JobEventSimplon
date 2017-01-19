<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8032492f7383c6ed291ffbc2f48c31f706773200fcdacff0903dee90d809845e extends Twig_Template
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
        $__internal_174ce3838786df78fb5fb5f9cfd6daed80c4b645bf2d49ac07be98f81e623501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_174ce3838786df78fb5fb5f9cfd6daed80c4b645bf2d49ac07be98f81e623501->enter($__internal_174ce3838786df78fb5fb5f9cfd6daed80c4b645bf2d49ac07be98f81e623501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_04fc07aa1928cfa9aa8b1793ac5eb9b7c8f57f248a1fb2488029f96f16491934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04fc07aa1928cfa9aa8b1793ac5eb9b7c8f57f248a1fb2488029f96f16491934->enter($__internal_04fc07aa1928cfa9aa8b1793ac5eb9b7c8f57f248a1fb2488029f96f16491934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_174ce3838786df78fb5fb5f9cfd6daed80c4b645bf2d49ac07be98f81e623501->leave($__internal_174ce3838786df78fb5fb5f9cfd6daed80c4b645bf2d49ac07be98f81e623501_prof);

        
        $__internal_04fc07aa1928cfa9aa8b1793ac5eb9b7c8f57f248a1fb2488029f96f16491934->leave($__internal_04fc07aa1928cfa9aa8b1793ac5eb9b7c8f57f248a1fb2488029f96f16491934_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
