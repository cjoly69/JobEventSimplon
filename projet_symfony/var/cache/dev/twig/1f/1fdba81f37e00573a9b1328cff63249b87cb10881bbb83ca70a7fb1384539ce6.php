<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d31f42cae4c18e9762e5e8b820d5a9863e25a09e068713c420a73f3f07008866 extends Twig_Template
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
        $__internal_4c117d751e5cc85f5944601aa5c1d48793328498231372d8e77c50863bd557f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c117d751e5cc85f5944601aa5c1d48793328498231372d8e77c50863bd557f4->enter($__internal_4c117d751e5cc85f5944601aa5c1d48793328498231372d8e77c50863bd557f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_104bfe0282c4ad99462c0acaf630cbe13d43368644f2f8e292d6e7c8e3572c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104bfe0282c4ad99462c0acaf630cbe13d43368644f2f8e292d6e7c8e3572c69->enter($__internal_104bfe0282c4ad99462c0acaf630cbe13d43368644f2f8e292d6e7c8e3572c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_4c117d751e5cc85f5944601aa5c1d48793328498231372d8e77c50863bd557f4->leave($__internal_4c117d751e5cc85f5944601aa5c1d48793328498231372d8e77c50863bd557f4_prof);

        
        $__internal_104bfe0282c4ad99462c0acaf630cbe13d43368644f2f8e292d6e7c8e3572c69->leave($__internal_104bfe0282c4ad99462c0acaf630cbe13d43368644f2f8e292d6e7c8e3572c69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
