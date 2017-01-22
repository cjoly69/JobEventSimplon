<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_71aea15600858ff939ba81b62f78a5c2df768d43c4cf9e358bef4c3ab7a62e92 extends Twig_Template
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
        $__internal_f51268b9434985619f00f21bb94568f0e1e072763145111d6d134b12f4825189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f51268b9434985619f00f21bb94568f0e1e072763145111d6d134b12f4825189->enter($__internal_f51268b9434985619f00f21bb94568f0e1e072763145111d6d134b12f4825189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_285a858bf0b663d3f22996613ea76213adfe672929bf92bdc908306e47e16c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285a858bf0b663d3f22996613ea76213adfe672929bf92bdc908306e47e16c9b->enter($__internal_285a858bf0b663d3f22996613ea76213adfe672929bf92bdc908306e47e16c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f51268b9434985619f00f21bb94568f0e1e072763145111d6d134b12f4825189->leave($__internal_f51268b9434985619f00f21bb94568f0e1e072763145111d6d134b12f4825189_prof);

        
        $__internal_285a858bf0b663d3f22996613ea76213adfe672929bf92bdc908306e47e16c9b->leave($__internal_285a858bf0b663d3f22996613ea76213adfe672929bf92bdc908306e47e16c9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
