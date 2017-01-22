<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8c9f850aaeabd0c9bea1e87c2a6b93063b4f9dd616eb482ac319009749a9a7c6 extends Twig_Template
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
        $__internal_3825c36bfcf6691010402bec74dca36b39bd1a94bc583d99906cc790875fe6e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3825c36bfcf6691010402bec74dca36b39bd1a94bc583d99906cc790875fe6e1->enter($__internal_3825c36bfcf6691010402bec74dca36b39bd1a94bc583d99906cc790875fe6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b4b52e8190bb20049099517654f4b87c75d944a2e6261b32031eaa4fe57b72ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b52e8190bb20049099517654f4b87c75d944a2e6261b32031eaa4fe57b72ed->enter($__internal_b4b52e8190bb20049099517654f4b87c75d944a2e6261b32031eaa4fe57b72ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3825c36bfcf6691010402bec74dca36b39bd1a94bc583d99906cc790875fe6e1->leave($__internal_3825c36bfcf6691010402bec74dca36b39bd1a94bc583d99906cc790875fe6e1_prof);

        
        $__internal_b4b52e8190bb20049099517654f4b87c75d944a2e6261b32031eaa4fe57b72ed->leave($__internal_b4b52e8190bb20049099517654f4b87c75d944a2e6261b32031eaa4fe57b72ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
