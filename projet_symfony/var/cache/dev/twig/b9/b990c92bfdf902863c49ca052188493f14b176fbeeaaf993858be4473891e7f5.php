<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_49f0e2b35aa9bb69d26a34473a6ef9a041a3a6dd9672e769a4a295cadd999eb8 extends Twig_Template
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
        $__internal_452b61f52b7f762b9c494774034afdba666d7c05699b0826a36d6bf8ca64e13b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_452b61f52b7f762b9c494774034afdba666d7c05699b0826a36d6bf8ca64e13b->enter($__internal_452b61f52b7f762b9c494774034afdba666d7c05699b0826a36d6bf8ca64e13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_47be03618724437ddf5235ff5b17031577ac181e012c2bac5e71cf2b202bb56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47be03618724437ddf5235ff5b17031577ac181e012c2bac5e71cf2b202bb56a->enter($__internal_47be03618724437ddf5235ff5b17031577ac181e012c2bac5e71cf2b202bb56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_452b61f52b7f762b9c494774034afdba666d7c05699b0826a36d6bf8ca64e13b->leave($__internal_452b61f52b7f762b9c494774034afdba666d7c05699b0826a36d6bf8ca64e13b_prof);

        
        $__internal_47be03618724437ddf5235ff5b17031577ac181e012c2bac5e71cf2b202bb56a->leave($__internal_47be03618724437ddf5235ff5b17031577ac181e012c2bac5e71cf2b202bb56a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
