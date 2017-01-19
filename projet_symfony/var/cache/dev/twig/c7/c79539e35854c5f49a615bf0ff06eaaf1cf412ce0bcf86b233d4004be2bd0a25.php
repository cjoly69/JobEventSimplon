<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a6f3caae244258fc49cf361366d780f21bc37b49ea7a03c98cec00df65b9b9e3 extends Twig_Template
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
        $__internal_3211b8577636f1e2423286e41679d9d3faf1ca8cdded5c17fe1956338da41fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3211b8577636f1e2423286e41679d9d3faf1ca8cdded5c17fe1956338da41fa8->enter($__internal_3211b8577636f1e2423286e41679d9d3faf1ca8cdded5c17fe1956338da41fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_43433a38982c05ea6319535c62c03a39e5fe7e428416ec6bcd5dce7c806a172f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43433a38982c05ea6319535c62c03a39e5fe7e428416ec6bcd5dce7c806a172f->enter($__internal_43433a38982c05ea6319535c62c03a39e5fe7e428416ec6bcd5dce7c806a172f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3211b8577636f1e2423286e41679d9d3faf1ca8cdded5c17fe1956338da41fa8->leave($__internal_3211b8577636f1e2423286e41679d9d3faf1ca8cdded5c17fe1956338da41fa8_prof);

        
        $__internal_43433a38982c05ea6319535c62c03a39e5fe7e428416ec6bcd5dce7c806a172f->leave($__internal_43433a38982c05ea6319535c62c03a39e5fe7e428416ec6bcd5dce7c806a172f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
