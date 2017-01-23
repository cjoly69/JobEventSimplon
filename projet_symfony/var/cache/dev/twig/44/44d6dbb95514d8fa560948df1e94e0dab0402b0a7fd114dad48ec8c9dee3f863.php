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
        $__internal_6ea45ab0202d49de4dbd8897a6e3ef7898817dcc6f388676ffcf5cc80077e181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea45ab0202d49de4dbd8897a6e3ef7898817dcc6f388676ffcf5cc80077e181->enter($__internal_6ea45ab0202d49de4dbd8897a6e3ef7898817dcc6f388676ffcf5cc80077e181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b67f8774d63b35d071bb4589ac528b32d74d3adc4956b4836cb7bc383748fa84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67f8774d63b35d071bb4589ac528b32d74d3adc4956b4836cb7bc383748fa84->enter($__internal_b67f8774d63b35d071bb4589ac528b32d74d3adc4956b4836cb7bc383748fa84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6ea45ab0202d49de4dbd8897a6e3ef7898817dcc6f388676ffcf5cc80077e181->leave($__internal_6ea45ab0202d49de4dbd8897a6e3ef7898817dcc6f388676ffcf5cc80077e181_prof);

        
        $__internal_b67f8774d63b35d071bb4589ac528b32d74d3adc4956b4836cb7bc383748fa84->leave($__internal_b67f8774d63b35d071bb4589ac528b32d74d3adc4956b4836cb7bc383748fa84_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c1952a7985df08115a2c76aa332d27afc9818ea4db6a33a9411b9dc2db57d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c1952a7985df08115a2c76aa332d27afc9818ea4db6a33a9411b9dc2db57d8b->enter($__internal_3c1952a7985df08115a2c76aa332d27afc9818ea4db6a33a9411b9dc2db57d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea3594bdcaab7a75d316bd9b8abd9d3e978381d3b2e3976940b44e7befe1bea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3594bdcaab7a75d316bd9b8abd9d3e978381d3b2e3976940b44e7befe1bea7->enter($__internal_ea3594bdcaab7a75d316bd9b8abd9d3e978381d3b2e3976940b44e7befe1bea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JobEventSimplon";
        
        $__internal_ea3594bdcaab7a75d316bd9b8abd9d3e978381d3b2e3976940b44e7befe1bea7->leave($__internal_ea3594bdcaab7a75d316bd9b8abd9d3e978381d3b2e3976940b44e7befe1bea7_prof);

        
        $__internal_3c1952a7985df08115a2c76aa332d27afc9818ea4db6a33a9411b9dc2db57d8b->leave($__internal_3c1952a7985df08115a2c76aa332d27afc9818ea4db6a33a9411b9dc2db57d8b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c7f56e1b6c143fa7e5373564d674925f602924cc84a58f26346fe416c31b936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7f56e1b6c143fa7e5373564d674925f602924cc84a58f26346fe416c31b936->enter($__internal_6c7f56e1b6c143fa7e5373564d674925f602924cc84a58f26346fe416c31b936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6aa3171eb2b8b072645fcbe87f87c80183f358dd92f2766cab0b64e550b26821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa3171eb2b8b072645fcbe87f87c80183f358dd92f2766cab0b64e550b26821->enter($__internal_6aa3171eb2b8b072645fcbe87f87c80183f358dd92f2766cab0b64e550b26821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6aa3171eb2b8b072645fcbe87f87c80183f358dd92f2766cab0b64e550b26821->leave($__internal_6aa3171eb2b8b072645fcbe87f87c80183f358dd92f2766cab0b64e550b26821_prof);

        
        $__internal_6c7f56e1b6c143fa7e5373564d674925f602924cc84a58f26346fe416c31b936->leave($__internal_6c7f56e1b6c143fa7e5373564d674925f602924cc84a58f26346fe416c31b936_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd33254b270621552934e74670bcb105a5707dbca7519cd3dff588fb7f77550a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd33254b270621552934e74670bcb105a5707dbca7519cd3dff588fb7f77550a->enter($__internal_cd33254b270621552934e74670bcb105a5707dbca7519cd3dff588fb7f77550a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96af1ba9d1b45952ff34b3894e69e25e3592c2178a4a0ba5a92e004e82763ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96af1ba9d1b45952ff34b3894e69e25e3592c2178a4a0ba5a92e004e82763ba8->enter($__internal_96af1ba9d1b45952ff34b3894e69e25e3592c2178a4a0ba5a92e004e82763ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_96af1ba9d1b45952ff34b3894e69e25e3592c2178a4a0ba5a92e004e82763ba8->leave($__internal_96af1ba9d1b45952ff34b3894e69e25e3592c2178a4a0ba5a92e004e82763ba8_prof);

        
        $__internal_cd33254b270621552934e74670bcb105a5707dbca7519cd3dff588fb7f77550a->leave($__internal_cd33254b270621552934e74670bcb105a5707dbca7519cd3dff588fb7f77550a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b22cb9ba89c86c93dc1fd45d19fe8cb719814d5cd984edab58aaeffcaaabc68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b22cb9ba89c86c93dc1fd45d19fe8cb719814d5cd984edab58aaeffcaaabc68->enter($__internal_3b22cb9ba89c86c93dc1fd45d19fe8cb719814d5cd984edab58aaeffcaaabc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5a5b20dce29b967e76fde637c89673e3b6d8af4295357d4c39fbdd8b93ea9881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5b20dce29b967e76fde637c89673e3b6d8af4295357d4c39fbdd8b93ea9881->enter($__internal_5a5b20dce29b967e76fde637c89673e3b6d8af4295357d4c39fbdd8b93ea9881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5a5b20dce29b967e76fde637c89673e3b6d8af4295357d4c39fbdd8b93ea9881->leave($__internal_5a5b20dce29b967e76fde637c89673e3b6d8af4295357d4c39fbdd8b93ea9881_prof);

        
        $__internal_3b22cb9ba89c86c93dc1fd45d19fe8cb719814d5cd984edab58aaeffcaaabc68->leave($__internal_3b22cb9ba89c86c93dc1fd45d19fe8cb719814d5cd984edab58aaeffcaaabc68_prof);

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
