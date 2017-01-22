<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_96b6b5bcfab8ec658afa5ecd858af602d56ad62db80abd00703e436c50852399 extends Twig_Template
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
        $__internal_98ea34c59d8a576a66f2ea2a36cafc44df278b6be024b5a103b8a666049d6363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ea34c59d8a576a66f2ea2a36cafc44df278b6be024b5a103b8a666049d6363->enter($__internal_98ea34c59d8a576a66f2ea2a36cafc44df278b6be024b5a103b8a666049d6363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_5f7b50f17c6c6a7641c46738822c27dee06d1dc0be2c888e02693348c84d35f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7b50f17c6c6a7641c46738822c27dee06d1dc0be2c888e02693348c84d35f2->enter($__internal_5f7b50f17c6c6a7641c46738822c27dee06d1dc0be2c888e02693348c84d35f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_98ea34c59d8a576a66f2ea2a36cafc44df278b6be024b5a103b8a666049d6363->leave($__internal_98ea34c59d8a576a66f2ea2a36cafc44df278b6be024b5a103b8a666049d6363_prof);

        
        $__internal_5f7b50f17c6c6a7641c46738822c27dee06d1dc0be2c888e02693348c84d35f2->leave($__internal_5f7b50f17c6c6a7641c46738822c27dee06d1dc0be2c888e02693348c84d35f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
