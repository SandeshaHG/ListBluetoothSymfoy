<?php

/* books/new.html.twig */
class __TwigTemplate_599d366c76f64e2760a299476061bc2b16c6e1d4064c682a7fa8355de83e6d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "books/new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da0a62e8e0bf4c7bfc99d8fbbb2d7186dc07509d4d0e217242f0325638e62c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0a62e8e0bf4c7bfc99d8fbbb2d7186dc07509d4d0e217242f0325638e62c58->enter($__internal_da0a62e8e0bf4c7bfc99d8fbbb2d7186dc07509d4d0e217242f0325638e62c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "books/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da0a62e8e0bf4c7bfc99d8fbbb2d7186dc07509d4d0e217242f0325638e62c58->leave($__internal_da0a62e8e0bf4c7bfc99d8fbbb2d7186dc07509d4d0e217242f0325638e62c58_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_09429faebee039236752739f42a5c33e5c7267c7a158b9bf88357367509162de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09429faebee039236752739f42a5c33e5c7267c7a158b9bf88357367509162de->enter($__internal_09429faebee039236752739f42a5c33e5c7267c7a158b9bf88357367509162de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
   <style> 
      #simpleform { 
         width:600px; 
         border:2px solid grey; 
         padding:14px; 
      } 
      #simpleform label { 
         font-size:14px; 
         float:left; 
         width:300px; 
         text-align:right; 
         display:block; 
      } 
      #simpleform span { 
         font-size:11px; 
         color:grey;
         width:100px; 
         text-align:right; 
         display:block; 
      }  
      #simpleform input { 
         border:1px solid grey; 
         font-family:verdana; 
         font-size:14px; 
         color:light blue; 
         height:24px; 
         width:250px; 
         margin: 0 0 10px 10px; 
      }  
      #simpleform textarea { 
         border:1px solid grey; 
         font-family:verdana; 
         font-size:14px; 
         color:light blue; 
         height:120px; 
         width:250px; 
         margin: 0 0 20px 10px; 
      }  
      #simpleform select { 
         margin: 0 0 20px 10px; 
      } 
      #simpleform button { 
         clear:both; 
         margin-left:250px; 
         background: grey;
         color:#FFFFFF; 
         border:solid 1px #666666; 
         font-size:16px; 
      } 
   </style> 
";
        
        $__internal_09429faebee039236752739f42a5c33e5c7267c7a158b9bf88357367509162de->leave($__internal_09429faebee039236752739f42a5c33e5c7267c7a158b9bf88357367509162de_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdeabdb28ade2e19a09a0109f8f05d84cbb7d21e23866541771eb6cd76bbc12e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdeabdb28ade2e19a09a0109f8f05d84cbb7d21e23866541771eb6cd76bbc12e->enter($__internal_bdeabdb28ade2e19a09a0109f8f05d84cbb7d21e23866541771eb6cd76bbc12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
   <h3>Book details:</h3> 
   <div id = \"simpleform\"> 
      ";
        // line 57
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo " 
      ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo " 
      ";
        // line 59
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo " 
   </div> 
";
        
        $__internal_bdeabdb28ade2e19a09a0109f8f05d84cbb7d21e23866541771eb6cd76bbc12e->leave($__internal_bdeabdb28ade2e19a09a0109f8f05d84cbb7d21e23866541771eb6cd76bbc12e_prof);

    }

    public function getTemplateName()
    {
        return "books/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 59,  112 => 58,  108 => 57,  98 => 54,  35 => 2,  11 => 1,);
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
{% block stylesheets %} 
   <style> 
      #simpleform { 
         width:600px; 
         border:2px solid grey; 
         padding:14px; 
      } 
      #simpleform label { 
         font-size:14px; 
         float:left; 
         width:300px; 
         text-align:right; 
         display:block; 
      } 
      #simpleform span { 
         font-size:11px; 
         color:grey;
         width:100px; 
         text-align:right; 
         display:block; 
      }  
      #simpleform input { 
         border:1px solid grey; 
         font-family:verdana; 
         font-size:14px; 
         color:light blue; 
         height:24px; 
         width:250px; 
         margin: 0 0 10px 10px; 
      }  
      #simpleform textarea { 
         border:1px solid grey; 
         font-family:verdana; 
         font-size:14px; 
         color:light blue; 
         height:120px; 
         width:250px; 
         margin: 0 0 20px 10px; 
      }  
      #simpleform select { 
         margin: 0 0 20px 10px; 
      } 
      #simpleform button { 
         clear:both; 
         margin-left:250px; 
         background: grey;
         color:#FFFFFF; 
         border:solid 1px #666666; 
         font-size:16px; 
      } 
   </style> 
{% endblock %}  
{% block body %} 
   <h3>Book details:</h3> 
   <div id = \"simpleform\"> 
      {{ form_start(form) }} 
      {{ form_widget(form) }} 
      {{ form_end(form) }} 
   </div> 
{% endblock %}  ", "books/new.html.twig", "/Users/sandeshhg/FinalDemo/app/Resources/views/books/new.html.twig");
    }
}
