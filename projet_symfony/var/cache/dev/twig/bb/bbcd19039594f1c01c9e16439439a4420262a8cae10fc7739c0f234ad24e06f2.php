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
        $__internal_85874ddc5ae65881b483bd119e226ed1bae66d84618b5f5aac8c0fc2451f8759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85874ddc5ae65881b483bd119e226ed1bae66d84618b5f5aac8c0fc2451f8759->enter($__internal_85874ddc5ae65881b483bd119e226ed1bae66d84618b5f5aac8c0fc2451f8759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_03a8a05bbad96d7a7b4067a1537bf964284daa8ce15adc7c34f742b306aa86cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a8a05bbad96d7a7b4067a1537bf964284daa8ce15adc7c34f742b306aa86cf->enter($__internal_03a8a05bbad96d7a7b4067a1537bf964284daa8ce15adc7c34f742b306aa86cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_85874ddc5ae65881b483bd119e226ed1bae66d84618b5f5aac8c0fc2451f8759->leave($__internal_85874ddc5ae65881b483bd119e226ed1bae66d84618b5f5aac8c0fc2451f8759_prof);

        
        $__internal_03a8a05bbad96d7a7b4067a1537bf964284daa8ce15adc7c34f742b306aa86cf->leave($__internal_03a8a05bbad96d7a7b4067a1537bf964284daa8ce15adc7c34f742b306aa86cf_prof);

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
