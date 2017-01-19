<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_49e2e01c203e3a17a2d500d264792b3bb3f8b16312fe6b68b5a3826e11dd1178 extends Twig_Template
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
        $__internal_2cf80d7d9cd7e2ceefe8d91d5b5f75c17ddf253800461fda23504f9772384d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf80d7d9cd7e2ceefe8d91d5b5f75c17ddf253800461fda23504f9772384d3d->enter($__internal_2cf80d7d9cd7e2ceefe8d91d5b5f75c17ddf253800461fda23504f9772384d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_27fe535fdc960ad093f2f0c4167f30319d9f0b6145d645ff5ca272508d6afc75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27fe535fdc960ad093f2f0c4167f30319d9f0b6145d645ff5ca272508d6afc75->enter($__internal_27fe535fdc960ad093f2f0c4167f30319d9f0b6145d645ff5ca272508d6afc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2cf80d7d9cd7e2ceefe8d91d5b5f75c17ddf253800461fda23504f9772384d3d->leave($__internal_2cf80d7d9cd7e2ceefe8d91d5b5f75c17ddf253800461fda23504f9772384d3d_prof);

        
        $__internal_27fe535fdc960ad093f2f0c4167f30319d9f0b6145d645ff5ca272508d6afc75->leave($__internal_27fe535fdc960ad093f2f0c4167f30319d9f0b6145d645ff5ca272508d6afc75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
