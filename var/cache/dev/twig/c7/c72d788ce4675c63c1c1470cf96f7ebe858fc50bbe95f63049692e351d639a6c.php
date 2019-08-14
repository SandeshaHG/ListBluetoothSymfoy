<?php

/* base.html.twig */
class __TwigTemplate_0a4420aea59c477862315be4cd72558f1f0a3b149c934943873dc3adc5e8e71d extends Twig_Template
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
        $__internal_cdad175bec5f6e2cc9f574a2e4ecab5b629bdd4e577646f1f854412eeda39aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdad175bec5f6e2cc9f574a2e4ecab5b629bdd4e577646f1f854412eeda39aca->enter($__internal_cdad175bec5f6e2cc9f574a2e4ecab5b629bdd4e577646f1f854412eeda39aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_cdad175bec5f6e2cc9f574a2e4ecab5b629bdd4e577646f1f854412eeda39aca->leave($__internal_cdad175bec5f6e2cc9f574a2e4ecab5b629bdd4e577646f1f854412eeda39aca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e619917ca192e4d13a47d0e0dae2d645e133c388163797eb11cf98d2198be1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e619917ca192e4d13a47d0e0dae2d645e133c388163797eb11cf98d2198be1f->enter($__internal_2e619917ca192e4d13a47d0e0dae2d645e133c388163797eb11cf98d2198be1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2e619917ca192e4d13a47d0e0dae2d645e133c388163797eb11cf98d2198be1f->leave($__internal_2e619917ca192e4d13a47d0e0dae2d645e133c388163797eb11cf98d2198be1f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4913717308c80111cd6261d4c3e2b5f3818338b7344a2d1c38ef969909da9c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4913717308c80111cd6261d4c3e2b5f3818338b7344a2d1c38ef969909da9c5b->enter($__internal_4913717308c80111cd6261d4c3e2b5f3818338b7344a2d1c38ef969909da9c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4913717308c80111cd6261d4c3e2b5f3818338b7344a2d1c38ef969909da9c5b->leave($__internal_4913717308c80111cd6261d4c3e2b5f3818338b7344a2d1c38ef969909da9c5b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_28ed696cc0d3e909aa38a54707a3ac54047a0723110c2dfe3e16a654fba7e763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ed696cc0d3e909aa38a54707a3ac54047a0723110c2dfe3e16a654fba7e763->enter($__internal_28ed696cc0d3e909aa38a54707a3ac54047a0723110c2dfe3e16a654fba7e763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_28ed696cc0d3e909aa38a54707a3ac54047a0723110c2dfe3e16a654fba7e763->leave($__internal_28ed696cc0d3e909aa38a54707a3ac54047a0723110c2dfe3e16a654fba7e763_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7079531627735da36ec773ff7c0841f621e97970c3557e06ebcebe59cb8af29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7079531627735da36ec773ff7c0841f621e97970c3557e06ebcebe59cb8af29c->enter($__internal_7079531627735da36ec773ff7c0841f621e97970c3557e06ebcebe59cb8af29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7079531627735da36ec773ff7c0841f621e97970c3557e06ebcebe59cb8af29c->leave($__internal_7079531627735da36ec773ff7c0841f621e97970c3557e06ebcebe59cb8af29c_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/sandeshhg/FinalDemo/app/Resources/views/base.html.twig");
    }
}
