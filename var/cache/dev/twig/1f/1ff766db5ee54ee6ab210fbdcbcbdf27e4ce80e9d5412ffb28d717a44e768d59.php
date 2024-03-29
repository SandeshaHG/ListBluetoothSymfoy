<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_79243e7dd8e792e08c17c542c8d700ec31187e5a0e0401c8b5054782d1257767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f3d0faad9b7343330ec1ff17f860b41e9c4b3a7a23eff336390a9e261e1617e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3d0faad9b7343330ec1ff17f860b41e9c4b3a7a23eff336390a9e261e1617e->enter($__internal_9f3d0faad9b7343330ec1ff17f860b41e9c4b3a7a23eff336390a9e261e1617e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f3d0faad9b7343330ec1ff17f860b41e9c4b3a7a23eff336390a9e261e1617e->leave($__internal_9f3d0faad9b7343330ec1ff17f860b41e9c4b3a7a23eff336390a9e261e1617e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_550467eb07e63100526983fcb4eea0de2a3b51ad13e18bd36e344ac0e0a1efc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550467eb07e63100526983fcb4eea0de2a3b51ad13e18bd36e344ac0e0a1efc7->enter($__internal_550467eb07e63100526983fcb4eea0de2a3b51ad13e18bd36e344ac0e0a1efc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_550467eb07e63100526983fcb4eea0de2a3b51ad13e18bd36e344ac0e0a1efc7->leave($__internal_550467eb07e63100526983fcb4eea0de2a3b51ad13e18bd36e344ac0e0a1efc7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_346bfd97b4775fab7d31795b3d976695e1e05fc61ff864b207a826be4a5963f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346bfd97b4775fab7d31795b3d976695e1e05fc61ff864b207a826be4a5963f2->enter($__internal_346bfd97b4775fab7d31795b3d976695e1e05fc61ff864b207a826be4a5963f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_346bfd97b4775fab7d31795b3d976695e1e05fc61ff864b207a826be4a5963f2->leave($__internal_346bfd97b4775fab7d31795b3d976695e1e05fc61ff864b207a826be4a5963f2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b2dbf037e3aaa84e7e8cc068abc7f5ab25b2a91eb957e56572799ae3ec1cfb25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2dbf037e3aaa84e7e8cc068abc7f5ab25b2a91eb957e56572799ae3ec1cfb25->enter($__internal_b2dbf037e3aaa84e7e8cc068abc7f5ab25b2a91eb957e56572799ae3ec1cfb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b2dbf037e3aaa84e7e8cc068abc7f5ab25b2a91eb957e56572799ae3ec1cfb25->leave($__internal_b2dbf037e3aaa84e7e8cc068abc7f5ab25b2a91eb957e56572799ae3ec1cfb25_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/sandeshhg/FinalDemo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
