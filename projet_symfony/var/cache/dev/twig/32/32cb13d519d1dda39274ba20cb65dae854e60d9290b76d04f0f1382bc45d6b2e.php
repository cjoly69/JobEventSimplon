<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_aef0a7109e4fa39b74220aaa3ef104c7c63f77e7622c670cad074fe677b05ab8 extends Twig_Template
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
        $__internal_7c2ec43d5b89d1eb0913ea332462b12bc2e4d1cc4f1b487d657b82132afe09c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2ec43d5b89d1eb0913ea332462b12bc2e4d1cc4f1b487d657b82132afe09c6->enter($__internal_7c2ec43d5b89d1eb0913ea332462b12bc2e4d1cc4f1b487d657b82132afe09c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ca709f1b87a4edc659f394e025fb03b81db4c89f94c08a07928542816efeb475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca709f1b87a4edc659f394e025fb03b81db4c89f94c08a07928542816efeb475->enter($__internal_ca709f1b87a4edc659f394e025fb03b81db4c89f94c08a07928542816efeb475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7c2ec43d5b89d1eb0913ea332462b12bc2e4d1cc4f1b487d657b82132afe09c6->leave($__internal_7c2ec43d5b89d1eb0913ea332462b12bc2e4d1cc4f1b487d657b82132afe09c6_prof);

        
        $__internal_ca709f1b87a4edc659f394e025fb03b81db4c89f94c08a07928542816efeb475->leave($__internal_ca709f1b87a4edc659f394e025fb03b81db4c89f94c08a07928542816efeb475_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
