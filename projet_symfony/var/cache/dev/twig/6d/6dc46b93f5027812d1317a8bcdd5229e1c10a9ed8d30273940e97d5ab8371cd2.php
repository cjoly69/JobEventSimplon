<?php

/* default/index.html.twig */
class __TwigTemplate_95037066e25c238379d2683ef141d26d9c743b9e8fa6f9f69f4798984d6b1243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bde540bdad014b7774c9ed17083e7df81f156cf7d35277e05bd55d8375e602e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde540bdad014b7774c9ed17083e7df81f156cf7d35277e05bd55d8375e602e7->enter($__internal_bde540bdad014b7774c9ed17083e7df81f156cf7d35277e05bd55d8375e602e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_f17bae5f03a8ca52e3f96120b07642c93e231075afbca3096c35f599a27c4e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17bae5f03a8ca52e3f96120b07642c93e231075afbca3096c35f599a27c4e7c->enter($__internal_f17bae5f03a8ca52e3f96120b07642c93e231075afbca3096c35f599a27c4e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bde540bdad014b7774c9ed17083e7df81f156cf7d35277e05bd55d8375e602e7->leave($__internal_bde540bdad014b7774c9ed17083e7df81f156cf7d35277e05bd55d8375e602e7_prof);

        
        $__internal_f17bae5f03a8ca52e3f96120b07642c93e231075afbca3096c35f599a27c4e7c->leave($__internal_f17bae5f03a8ca52e3f96120b07642c93e231075afbca3096c35f599a27c4e7c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_adc6536df4b31008e76b9c7174e3f37ea984fbf504fd697a62f9920921002394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc6536df4b31008e76b9c7174e3f37ea984fbf504fd697a62f9920921002394->enter($__internal_adc6536df4b31008e76b9c7174e3f37ea984fbf504fd697a62f9920921002394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53fcfb46f5d4c45d4e1f3267d4fc4d8949145d806cdf598802b9d71d2e61e86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53fcfb46f5d4c45d4e1f3267d4fc4d8949145d806cdf598802b9d71d2e61e86e->enter($__internal_53fcfb46f5d4c45d4e1f3267d4fc4d8949145d806cdf598802b9d71d2e61e86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<ul>
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listEntreprises"] ?? $this->getContext($context, "listEntreprises")));
        foreach ($context['_seq'] as $context["_key"] => $context["entreprise"]) {
            // line 6
            echo "  <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entreprise"], "entName", array()), "html", null, true);
            echo "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entreprise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>
";
        
        $__internal_53fcfb46f5d4c45d4e1f3267d4fc4d8949145d806cdf598802b9d71d2e61e86e->leave($__internal_53fcfb46f5d4c45d4e1f3267d4fc4d8949145d806cdf598802b9d71d2e61e86e_prof);

        
        $__internal_adc6536df4b31008e76b9c7174e3f37ea984fbf504fd697a62f9920921002394->leave($__internal_adc6536df4b31008e76b9c7174e3f37ea984fbf504fd697a62f9920921002394_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_409340cbcdcdc8a05bd83b41450f065bbbdf3634b9045142448298f6f793b3c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_409340cbcdcdc8a05bd83b41450f065bbbdf3634b9045142448298f6f793b3c2->enter($__internal_409340cbcdcdc8a05bd83b41450f065bbbdf3634b9045142448298f6f793b3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_65c96e92d19e3407632896892febb617a844219ae1924db1e62aeec733132b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c96e92d19e3407632896892febb617a844219ae1924db1e62aeec733132b4c->enter($__internal_65c96e92d19e3407632896892febb617a844219ae1924db1e62aeec733132b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_65c96e92d19e3407632896892febb617a844219ae1924db1e62aeec733132b4c->leave($__internal_65c96e92d19e3407632896892febb617a844219ae1924db1e62aeec733132b4c_prof);

        
        $__internal_409340cbcdcdc8a05bd83b41450f065bbbdf3634b9045142448298f6f793b3c2->leave($__internal_409340cbcdcdc8a05bd83b41450f065bbbdf3634b9045142448298f6f793b3c2_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 12,  77 => 11,  66 => 8,  57 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<ul>
  {% for entreprise in listEntreprises %}
  <li>{{entreprise.entName}}</li>
  {% endfor %}
</ul>
{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", "default/index.html.twig", "/opt/lampp/htdocs/JobEventSimplon/projet_symfony/app/Resources/views/default/index.html.twig");
    }
}
