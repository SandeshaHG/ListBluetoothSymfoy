<?php

/* rand.html.twig */
class __TwigTemplate_4ca04dc545a48e0667a7d5cfc4cd945f9e4b7cfca373ca0d4dc5eb5863d6c6a5 extends Twig_Template
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
        $__internal_49e628f481254b2874ce811db5c52050caef798ffbeb26cc34f0846cdd8fe876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e628f481254b2874ce811db5c52050caef798ffbeb26cc34f0846cdd8fe876->enter($__internal_49e628f481254b2874ce811db5c52050caef798ffbeb26cc34f0846cdd8fe876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rand.html.twig"));

        // line 1
        echo "<html>
   <head>
      <title>BLUETOOTH CONNECTED DEVICES</title>
      
      <style>
         table, th , td {
            border: 1px solid grey;
            border-collapse: collapse;
            padding: 5px;
         }
         table tr:nth-child(odd) {
            background-color: #f2f2f2;
         }
         table tr:nth-child(even) {
            background-color: #ffffff;
         }
      </style>
   </head>
   
   <body>
      <h2>BLUETOOTH CONNECTED DEVICES</h2>
         <table>
            <tr>
               <th>ID</th>
               <th>NAME</th>
               <th>MAC</th>
            </tr>
         
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["result"] ?? $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 30
            echo "            <tr>
               <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "id", array()), "html", null, true);
            echo "</td>   
               <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "name", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "mac", array()), "html", null, true);
            echo "</td> 
             </tr>
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
           
         </table>
      </div>
      

      
      <script src = \"https://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js\">
      </script>
      
   </body>
</html>
";
        
        $__internal_49e628f481254b2874ce811db5c52050caef798ffbeb26cc34f0846cdd8fe876->leave($__internal_49e628f481254b2874ce811db5c52050caef798ffbeb26cc34f0846cdd8fe876_prof);

    }

    public function getTemplateName()
    {
        return "rand.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 37,  67 => 33,  63 => 32,  59 => 31,  56 => 30,  52 => 29,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
   <head>
      <title>BLUETOOTH CONNECTED DEVICES</title>
      
      <style>
         table, th , td {
            border: 1px solid grey;
            border-collapse: collapse;
            padding: 5px;
         }
         table tr:nth-child(odd) {
            background-color: #f2f2f2;
         }
         table tr:nth-child(even) {
            background-color: #ffffff;
         }
      </style>
   </head>
   
   <body>
      <h2>BLUETOOTH CONNECTED DEVICES</h2>
         <table>
            <tr>
               <th>ID</th>
               <th>NAME</th>
               <th>MAC</th>
            </tr>
         
            {% for x in result %}
            <tr>
               <td>{{ x.id }}</td>   
               <td>{{ x.name }}</td>
               <td>{{ x.mac }}</td> 
             </tr>
            
            {% endfor %}

           
         </table>
      </div>
      

      
      <script src = \"https://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js\">
      </script>
      
   </body>
</html>
", "rand.html.twig", "/Users/sandeshhg/FinalDemo/app/Resources/views/rand.html.twig");
    }
}
