<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_71247d828b6c1c8ef570ba7dded5e0738a5e4c53c3696739cd171cbd7d0786cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bdaeb2858674abd554dd8a46a2c74bc2f62baa137b6ec7b6c4cb140543a7348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bdaeb2858674abd554dd8a46a2c74bc2f62baa137b6ec7b6c4cb140543a7348->enter($__internal_9bdaeb2858674abd554dd8a46a2c74bc2f62baa137b6ec7b6c4cb140543a7348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bdaeb2858674abd554dd8a46a2c74bc2f62baa137b6ec7b6c4cb140543a7348->leave($__internal_9bdaeb2858674abd554dd8a46a2c74bc2f62baa137b6ec7b6c4cb140543a7348_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08446e040abdd78730a9bf5f61d27fe7b211c36fd6a750f7f4aaf35fdc5aa3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08446e040abdd78730a9bf5f61d27fe7b211c36fd6a750f7f4aaf35fdc5aa3d2->enter($__internal_08446e040abdd78730a9bf5f61d27fe7b211c36fd6a750f7f4aaf35fdc5aa3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_08446e040abdd78730a9bf5f61d27fe7b211c36fd6a750f7f4aaf35fdc5aa3d2->leave($__internal_08446e040abdd78730a9bf5f61d27fe7b211c36fd6a750f7f4aaf35fdc5aa3d2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff05d95b180d08bbd08a0e3732097a044836ef13cfd06701f9523e11144f66e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff05d95b180d08bbd08a0e3732097a044836ef13cfd06701f9523e11144f66e1->enter($__internal_ff05d95b180d08bbd08a0e3732097a044836ef13cfd06701f9523e11144f66e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ff05d95b180d08bbd08a0e3732097a044836ef13cfd06701f9523e11144f66e1->leave($__internal_ff05d95b180d08bbd08a0e3732097a044836ef13cfd06701f9523e11144f66e1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a513a351b3418ba84addd7f74c6c5b13793290a72a89b9ef109d39b408ae284b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a513a351b3418ba84addd7f74c6c5b13793290a72a89b9ef109d39b408ae284b->enter($__internal_a513a351b3418ba84addd7f74c6c5b13793290a72a89b9ef109d39b408ae284b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a513a351b3418ba84addd7f74c6c5b13793290a72a89b9ef109d39b408ae284b->leave($__internal_a513a351b3418ba84addd7f74c6c5b13793290a72a89b9ef109d39b408ae284b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/sandeshhg/FinalDemo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
