<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ca898f63c5019cdda760af94e65a25410f06d02b886701c8a5dac3d1acbb163e extends Twig_Template
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
        $__internal_bc038503a83ba3e33adbaad4ecd08c5695b447705b0ae2acea893aaf9db84e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc038503a83ba3e33adbaad4ecd08c5695b447705b0ae2acea893aaf9db84e49->enter($__internal_bc038503a83ba3e33adbaad4ecd08c5695b447705b0ae2acea893aaf9db84e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_447b0c7e82f970a07d763e254f61454de08458badde23d557eb564796794b12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447b0c7e82f970a07d763e254f61454de08458badde23d557eb564796794b12f->enter($__internal_447b0c7e82f970a07d763e254f61454de08458badde23d557eb564796794b12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_bc038503a83ba3e33adbaad4ecd08c5695b447705b0ae2acea893aaf9db84e49->leave($__internal_bc038503a83ba3e33adbaad4ecd08c5695b447705b0ae2acea893aaf9db84e49_prof);

        
        $__internal_447b0c7e82f970a07d763e254f61454de08458badde23d557eb564796794b12f->leave($__internal_447b0c7e82f970a07d763e254f61454de08458badde23d557eb564796794b12f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
