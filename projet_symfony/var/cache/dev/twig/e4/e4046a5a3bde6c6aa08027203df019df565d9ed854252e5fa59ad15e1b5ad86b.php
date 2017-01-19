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
        $__internal_c4ab70b3895ee56d0f5b972aae1898f77adb79806180eb2642d03ff08928d1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ab70b3895ee56d0f5b972aae1898f77adb79806180eb2642d03ff08928d1a2->enter($__internal_c4ab70b3895ee56d0f5b972aae1898f77adb79806180eb2642d03ff08928d1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_44d05a2d6f8635f268835a71aea16d3cf19c502f679670c9b72a3464403f2da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d05a2d6f8635f268835a71aea16d3cf19c502f679670c9b72a3464403f2da3->enter($__internal_44d05a2d6f8635f268835a71aea16d3cf19c502f679670c9b72a3464403f2da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c4ab70b3895ee56d0f5b972aae1898f77adb79806180eb2642d03ff08928d1a2->leave($__internal_c4ab70b3895ee56d0f5b972aae1898f77adb79806180eb2642d03ff08928d1a2_prof);

        
        $__internal_44d05a2d6f8635f268835a71aea16d3cf19c502f679670c9b72a3464403f2da3->leave($__internal_44d05a2d6f8635f268835a71aea16d3cf19c502f679670c9b72a3464403f2da3_prof);

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
