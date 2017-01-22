<?php

/* base.html.twig */
class __TwigTemplate_5f636d84497f4c15dd364cbc3f8627b9126f4eb336a4969309fd8e18dd7fb075 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3583c837a85d46634f96daece5c57f16f22cc0e0c8aca233aa59f0b5488a4663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3583c837a85d46634f96daece5c57f16f22cc0e0c8aca233aa59f0b5488a4663->enter($__internal_3583c837a85d46634f96daece5c57f16f22cc0e0c8aca233aa59f0b5488a4663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e990c1cb7aa5eca2bd0d1435a43c15cd9dca1d44560963ed988d9127835c6ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e990c1cb7aa5eca2bd0d1435a43c15cd9dca1d44560963ed988d9127835c6ada->enter($__internal_e990c1cb7aa5eca2bd0d1435a43c15cd9dca1d44560963ed988d9127835c6ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3583c837a85d46634f96daece5c57f16f22cc0e0c8aca233aa59f0b5488a4663->leave($__internal_3583c837a85d46634f96daece5c57f16f22cc0e0c8aca233aa59f0b5488a4663_prof);

        
        $__internal_e990c1cb7aa5eca2bd0d1435a43c15cd9dca1d44560963ed988d9127835c6ada->leave($__internal_e990c1cb7aa5eca2bd0d1435a43c15cd9dca1d44560963ed988d9127835c6ada_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfdbac762f67138ecbf7e0384ed9b2e989d5bc8b066ee2f1f7323680838dd01d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfdbac762f67138ecbf7e0384ed9b2e989d5bc8b066ee2f1f7323680838dd01d->enter($__internal_dfdbac762f67138ecbf7e0384ed9b2e989d5bc8b066ee2f1f7323680838dd01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a13ab8c7bef347e2aab30f4dacacc9558c91ba00bc2a940d734f1e898e0af058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13ab8c7bef347e2aab30f4dacacc9558c91ba00bc2a940d734f1e898e0af058->enter($__internal_a13ab8c7bef347e2aab30f4dacacc9558c91ba00bc2a940d734f1e898e0af058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JobEventSimplon";
        
        $__internal_a13ab8c7bef347e2aab30f4dacacc9558c91ba00bc2a940d734f1e898e0af058->leave($__internal_a13ab8c7bef347e2aab30f4dacacc9558c91ba00bc2a940d734f1e898e0af058_prof);

        
        $__internal_dfdbac762f67138ecbf7e0384ed9b2e989d5bc8b066ee2f1f7323680838dd01d->leave($__internal_dfdbac762f67138ecbf7e0384ed9b2e989d5bc8b066ee2f1f7323680838dd01d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_19e04a510a82b7fee65467f8c698536d0c983536f2e60d2797af727cbb6e6d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19e04a510a82b7fee65467f8c698536d0c983536f2e60d2797af727cbb6e6d2d->enter($__internal_19e04a510a82b7fee65467f8c698536d0c983536f2e60d2797af727cbb6e6d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_09242adfcfb449b2246f0f257480940ac587ed970c6a5615ee343df39690bd8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09242adfcfb449b2246f0f257480940ac587ed970c6a5615ee343df39690bd8f->enter($__internal_09242adfcfb449b2246f0f257480940ac587ed970c6a5615ee343df39690bd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_09242adfcfb449b2246f0f257480940ac587ed970c6a5615ee343df39690bd8f->leave($__internal_09242adfcfb449b2246f0f257480940ac587ed970c6a5615ee343df39690bd8f_prof);

        
        $__internal_19e04a510a82b7fee65467f8c698536d0c983536f2e60d2797af727cbb6e6d2d->leave($__internal_19e04a510a82b7fee65467f8c698536d0c983536f2e60d2797af727cbb6e6d2d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0d7248d6ab4894bf23ba3b2eee122e83b60d5b07ce3b68d93e848f9b41fb09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d7248d6ab4894bf23ba3b2eee122e83b60d5b07ce3b68d93e848f9b41fb09a->enter($__internal_e0d7248d6ab4894bf23ba3b2eee122e83b60d5b07ce3b68d93e848f9b41fb09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2901b38959030fece1032e04cd9f2104a7fe6db20204d0d69a4848ca0bbe5def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2901b38959030fece1032e04cd9f2104a7fe6db20204d0d69a4848ca0bbe5def->enter($__internal_2901b38959030fece1032e04cd9f2104a7fe6db20204d0d69a4848ca0bbe5def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2901b38959030fece1032e04cd9f2104a7fe6db20204d0d69a4848ca0bbe5def->leave($__internal_2901b38959030fece1032e04cd9f2104a7fe6db20204d0d69a4848ca0bbe5def_prof);

        
        $__internal_e0d7248d6ab4894bf23ba3b2eee122e83b60d5b07ce3b68d93e848f9b41fb09a->leave($__internal_e0d7248d6ab4894bf23ba3b2eee122e83b60d5b07ce3b68d93e848f9b41fb09a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_847ba9c6ec7fdadb99e7fa9d0e38545ade714f55972f18ffa443f9cc024c163b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847ba9c6ec7fdadb99e7fa9d0e38545ade714f55972f18ffa443f9cc024c163b->enter($__internal_847ba9c6ec7fdadb99e7fa9d0e38545ade714f55972f18ffa443f9cc024c163b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c5dce24a1bd26332de35d8dee143585175b0d7ed13be9a4ab42211cfa5757e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5dce24a1bd26332de35d8dee143585175b0d7ed13be9a4ab42211cfa5757e86->enter($__internal_c5dce24a1bd26332de35d8dee143585175b0d7ed13be9a4ab42211cfa5757e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c5dce24a1bd26332de35d8dee143585175b0d7ed13be9a4ab42211cfa5757e86->leave($__internal_c5dce24a1bd26332de35d8dee143585175b0d7ed13be9a4ab42211cfa5757e86_prof);

        
        $__internal_847ba9c6ec7fdadb99e7fa9d0e38545ade714f55972f18ffa443f9cc024c163b->leave($__internal_847ba9c6ec7fdadb99e7fa9d0e38545ade714f55972f18ffa443f9cc024c163b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}JobEventSimplon{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/app/Resources/views/base.html.twig");
    }
}
