<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_21efa291d45206a4b14384c8272d1e720cc1967cb7b8e640302031040eff3c5c extends Twig_Template
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
        $__internal_aef2e78f99d9bec15131d0825143426d5a06a207d7ffd4286c95ac373ac1faee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef2e78f99d9bec15131d0825143426d5a06a207d7ffd4286c95ac373ac1faee->enter($__internal_aef2e78f99d9bec15131d0825143426d5a06a207d7ffd4286c95ac373ac1faee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_7a16e1f9de4ea4b61b0c4c2df892198184d421489e55c7086a83388c175b28a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a16e1f9de4ea4b61b0c4c2df892198184d421489e55c7086a83388c175b28a4->enter($__internal_7a16e1f9de4ea4b61b0c4c2df892198184d421489e55c7086a83388c175b28a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_aef2e78f99d9bec15131d0825143426d5a06a207d7ffd4286c95ac373ac1faee->leave($__internal_aef2e78f99d9bec15131d0825143426d5a06a207d7ffd4286c95ac373ac1faee_prof);

        
        $__internal_7a16e1f9de4ea4b61b0c4c2df892198184d421489e55c7086a83388c175b28a4->leave($__internal_7a16e1f9de4ea4b61b0c4c2df892198184d421489e55c7086a83388c175b28a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
