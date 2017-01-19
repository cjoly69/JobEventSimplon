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
        $__internal_79531e779c1ef2ada657a8ce1b60ca10185f0ad290eb2047ceaa48a9a2916944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79531e779c1ef2ada657a8ce1b60ca10185f0ad290eb2047ceaa48a9a2916944->enter($__internal_79531e779c1ef2ada657a8ce1b60ca10185f0ad290eb2047ceaa48a9a2916944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_533d944f551f98fb43eae6a79983679b291193e68cba52c3688135d006572c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533d944f551f98fb43eae6a79983679b291193e68cba52c3688135d006572c83->enter($__internal_533d944f551f98fb43eae6a79983679b291193e68cba52c3688135d006572c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_79531e779c1ef2ada657a8ce1b60ca10185f0ad290eb2047ceaa48a9a2916944->leave($__internal_79531e779c1ef2ada657a8ce1b60ca10185f0ad290eb2047ceaa48a9a2916944_prof);

        
        $__internal_533d944f551f98fb43eae6a79983679b291193e68cba52c3688135d006572c83->leave($__internal_533d944f551f98fb43eae6a79983679b291193e68cba52c3688135d006572c83_prof);

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
