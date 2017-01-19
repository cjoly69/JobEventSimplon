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
        $__internal_7605237a2ca1b562c6ac675eec9ffaafae1fc4b077b993cafb98c323f002563b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7605237a2ca1b562c6ac675eec9ffaafae1fc4b077b993cafb98c323f002563b->enter($__internal_7605237a2ca1b562c6ac675eec9ffaafae1fc4b077b993cafb98c323f002563b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_24e4ad1c60002266b60973cf65c19ae913e577df28cbc1ff84b53eacd877c0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e4ad1c60002266b60973cf65c19ae913e577df28cbc1ff84b53eacd877c0c9->enter($__internal_24e4ad1c60002266b60973cf65c19ae913e577df28cbc1ff84b53eacd877c0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7605237a2ca1b562c6ac675eec9ffaafae1fc4b077b993cafb98c323f002563b->leave($__internal_7605237a2ca1b562c6ac675eec9ffaafae1fc4b077b993cafb98c323f002563b_prof);

        
        $__internal_24e4ad1c60002266b60973cf65c19ae913e577df28cbc1ff84b53eacd877c0c9->leave($__internal_24e4ad1c60002266b60973cf65c19ae913e577df28cbc1ff84b53eacd877c0c9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a62c86b9cc923cb59fb98190c077821bb2c56cb7e1b68578563cb92ad512084d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62c86b9cc923cb59fb98190c077821bb2c56cb7e1b68578563cb92ad512084d->enter($__internal_a62c86b9cc923cb59fb98190c077821bb2c56cb7e1b68578563cb92ad512084d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77603f8839309f20cb609497b1c96f8c5b27cc98a1346bc50fee10a1480434b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77603f8839309f20cb609497b1c96f8c5b27cc98a1346bc50fee10a1480434b5->enter($__internal_77603f8839309f20cb609497b1c96f8c5b27cc98a1346bc50fee10a1480434b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JobEventSimplon";
        
        $__internal_77603f8839309f20cb609497b1c96f8c5b27cc98a1346bc50fee10a1480434b5->leave($__internal_77603f8839309f20cb609497b1c96f8c5b27cc98a1346bc50fee10a1480434b5_prof);

        
        $__internal_a62c86b9cc923cb59fb98190c077821bb2c56cb7e1b68578563cb92ad512084d->leave($__internal_a62c86b9cc923cb59fb98190c077821bb2c56cb7e1b68578563cb92ad512084d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_496cbb8fbe83ac039858bad37bfb9ec7f73927f70b7f3278111085b28b9e6210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_496cbb8fbe83ac039858bad37bfb9ec7f73927f70b7f3278111085b28b9e6210->enter($__internal_496cbb8fbe83ac039858bad37bfb9ec7f73927f70b7f3278111085b28b9e6210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9082e37bedb0d64c8f8930a1127da4210086b54447af7845d160da6741c6300d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9082e37bedb0d64c8f8930a1127da4210086b54447af7845d160da6741c6300d->enter($__internal_9082e37bedb0d64c8f8930a1127da4210086b54447af7845d160da6741c6300d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9082e37bedb0d64c8f8930a1127da4210086b54447af7845d160da6741c6300d->leave($__internal_9082e37bedb0d64c8f8930a1127da4210086b54447af7845d160da6741c6300d_prof);

        
        $__internal_496cbb8fbe83ac039858bad37bfb9ec7f73927f70b7f3278111085b28b9e6210->leave($__internal_496cbb8fbe83ac039858bad37bfb9ec7f73927f70b7f3278111085b28b9e6210_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_21464c44e23b84d45ae7173dbda5df40b8378e123a95db3a2f88d555649711bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21464c44e23b84d45ae7173dbda5df40b8378e123a95db3a2f88d555649711bf->enter($__internal_21464c44e23b84d45ae7173dbda5df40b8378e123a95db3a2f88d555649711bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c38b3c0460d8b30fa9377e0bacce8476cd9b2c98f957860062671773bcde029d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38b3c0460d8b30fa9377e0bacce8476cd9b2c98f957860062671773bcde029d->enter($__internal_c38b3c0460d8b30fa9377e0bacce8476cd9b2c98f957860062671773bcde029d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c38b3c0460d8b30fa9377e0bacce8476cd9b2c98f957860062671773bcde029d->leave($__internal_c38b3c0460d8b30fa9377e0bacce8476cd9b2c98f957860062671773bcde029d_prof);

        
        $__internal_21464c44e23b84d45ae7173dbda5df40b8378e123a95db3a2f88d555649711bf->leave($__internal_21464c44e23b84d45ae7173dbda5df40b8378e123a95db3a2f88d555649711bf_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dc538a378989b5fb3a0372c46c7352d183440df12ad5e6e5c17148f72710d85f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc538a378989b5fb3a0372c46c7352d183440df12ad5e6e5c17148f72710d85f->enter($__internal_dc538a378989b5fb3a0372c46c7352d183440df12ad5e6e5c17148f72710d85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7a50f9246e41fdd3baea73def3e24e6fc57a31d7858f46a590085ec457f64d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a50f9246e41fdd3baea73def3e24e6fc57a31d7858f46a590085ec457f64d8b->enter($__internal_7a50f9246e41fdd3baea73def3e24e6fc57a31d7858f46a590085ec457f64d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7a50f9246e41fdd3baea73def3e24e6fc57a31d7858f46a590085ec457f64d8b->leave($__internal_7a50f9246e41fdd3baea73def3e24e6fc57a31d7858f46a590085ec457f64d8b_prof);

        
        $__internal_dc538a378989b5fb3a0372c46c7352d183440df12ad5e6e5c17148f72710d85f->leave($__internal_dc538a378989b5fb3a0372c46c7352d183440df12ad5e6e5c17148f72710d85f_prof);

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
