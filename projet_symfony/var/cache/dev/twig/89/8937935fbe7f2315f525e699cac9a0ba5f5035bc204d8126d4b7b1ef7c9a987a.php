<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e3bcb6526f794aa83b95019bb890a2987df7050a487b335ad25c31eb56a02cbf extends Twig_Template
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
        $__internal_2036e3b2269a12b7dd5694b3aef12dad84f2799fe77500787930e4873c61c398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2036e3b2269a12b7dd5694b3aef12dad84f2799fe77500787930e4873c61c398->enter($__internal_2036e3b2269a12b7dd5694b3aef12dad84f2799fe77500787930e4873c61c398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_6119cc736bd8297226847111cb6fd906a9f67acd88a71cf7ac423a9ef635eb4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6119cc736bd8297226847111cb6fd906a9f67acd88a71cf7ac423a9ef635eb4c->enter($__internal_6119cc736bd8297226847111cb6fd906a9f67acd88a71cf7ac423a9ef635eb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_2036e3b2269a12b7dd5694b3aef12dad84f2799fe77500787930e4873c61c398->leave($__internal_2036e3b2269a12b7dd5694b3aef12dad84f2799fe77500787930e4873c61c398_prof);

        
        $__internal_6119cc736bd8297226847111cb6fd906a9f67acd88a71cf7ac423a9ef635eb4c->leave($__internal_6119cc736bd8297226847111cb6fd906a9f67acd88a71cf7ac423a9ef635eb4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
