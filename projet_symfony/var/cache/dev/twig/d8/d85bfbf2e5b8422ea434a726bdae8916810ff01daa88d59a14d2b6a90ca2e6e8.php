<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4b3cbd3ae86ada776cf4766a55bb32f5277455c8db5310ccb1c64e9e2755e09c extends Twig_Template
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
        $__internal_b4e0efc2b268dc952f6fea6940c5e50864e8518e90a7becfe7033afcdde82259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e0efc2b268dc952f6fea6940c5e50864e8518e90a7becfe7033afcdde82259->enter($__internal_b4e0efc2b268dc952f6fea6940c5e50864e8518e90a7becfe7033afcdde82259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_18f69e17ce226247f4fb9e9507d9b2f944e574c64bb101749f72bf749caaf0bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f69e17ce226247f4fb9e9507d9b2f944e574c64bb101749f72bf749caaf0bf->enter($__internal_18f69e17ce226247f4fb9e9507d9b2f944e574c64bb101749f72bf749caaf0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b4e0efc2b268dc952f6fea6940c5e50864e8518e90a7becfe7033afcdde82259->leave($__internal_b4e0efc2b268dc952f6fea6940c5e50864e8518e90a7becfe7033afcdde82259_prof);

        
        $__internal_18f69e17ce226247f4fb9e9507d9b2f944e574c64bb101749f72bf749caaf0bf->leave($__internal_18f69e17ce226247f4fb9e9507d9b2f944e574c64bb101749f72bf749caaf0bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
