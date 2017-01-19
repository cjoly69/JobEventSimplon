<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_231d0e90c411fb05993a4c89da6c4ad3f97a5e1099c566c366176c89646c3657 extends Twig_Template
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
        $__internal_e52b57ad5297d42aae3a78ec4be6f8be8469834f21a6ea02d3a6a618a9ee1637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52b57ad5297d42aae3a78ec4be6f8be8469834f21a6ea02d3a6a618a9ee1637->enter($__internal_e52b57ad5297d42aae3a78ec4be6f8be8469834f21a6ea02d3a6a618a9ee1637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_2bdb5f735ef2bc59ca6deb5c2c548f0012f977e1da9fea0b8ab5a09aae6cc4dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bdb5f735ef2bc59ca6deb5c2c548f0012f977e1da9fea0b8ab5a09aae6cc4dc->enter($__internal_2bdb5f735ef2bc59ca6deb5c2c548f0012f977e1da9fea0b8ab5a09aae6cc4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e52b57ad5297d42aae3a78ec4be6f8be8469834f21a6ea02d3a6a618a9ee1637->leave($__internal_e52b57ad5297d42aae3a78ec4be6f8be8469834f21a6ea02d3a6a618a9ee1637_prof);

        
        $__internal_2bdb5f735ef2bc59ca6deb5c2c548f0012f977e1da9fea0b8ab5a09aae6cc4dc->leave($__internal_2bdb5f735ef2bc59ca6deb5c2c548f0012f977e1da9fea0b8ab5a09aae6cc4dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
