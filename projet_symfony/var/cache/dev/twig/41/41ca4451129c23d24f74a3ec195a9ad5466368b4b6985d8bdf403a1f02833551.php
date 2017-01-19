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
        $__internal_c2b43c4884aa45737c6841d9ace0188aaa0e3e4c2ec8c711bd14574123c53d04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b43c4884aa45737c6841d9ace0188aaa0e3e4c2ec8c711bd14574123c53d04->enter($__internal_c2b43c4884aa45737c6841d9ace0188aaa0e3e4c2ec8c711bd14574123c53d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_4d41a97ed0af338594dc85c3551f473bc9e6f6439638651021dfd4ac30b416c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d41a97ed0af338594dc85c3551f473bc9e6f6439638651021dfd4ac30b416c6->enter($__internal_4d41a97ed0af338594dc85c3551f473bc9e6f6439638651021dfd4ac30b416c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c2b43c4884aa45737c6841d9ace0188aaa0e3e4c2ec8c711bd14574123c53d04->leave($__internal_c2b43c4884aa45737c6841d9ace0188aaa0e3e4c2ec8c711bd14574123c53d04_prof);

        
        $__internal_4d41a97ed0af338594dc85c3551f473bc9e6f6439638651021dfd4ac30b416c6->leave($__internal_4d41a97ed0af338594dc85c3551f473bc9e6f6439638651021dfd4ac30b416c6_prof);

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
