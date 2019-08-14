<?php

/* books/author.html.twig */
class __TwigTemplate_0a17bca701a088451687d8f77a6e266bed19968e161ec7a71e42bcf2ec888318 extends Twig_Template
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
        $__internal_1e42238cc3db1fcc21be0f048ed9759d3b6465a6d2573b2cc71ddea618667bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e42238cc3db1fcc21be0f048ed9759d3b6465a6d2573b2cc71ddea618667bb6->enter($__internal_1e42238cc3db1fcc21be0f048ed9759d3b6465a6d2573b2cc71ddea618667bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "books/author.html.twig"));

        // line 1
        echo "<h3> Simple book store application</h3> ";
        
        $__internal_1e42238cc3db1fcc21be0f048ed9759d3b6465a6d2573b2cc71ddea618667bb6->leave($__internal_1e42238cc3db1fcc21be0f048ed9759d3b6465a6d2573b2cc71ddea618667bb6_prof);

    }

    public function getTemplateName()
    {
        return "books/author.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3> Simple book store application</h3> ", "books/author.html.twig", "/Users/sandeshhg/FinalDemo/app/Resources/views/books/author.html.twig");
    }
}
