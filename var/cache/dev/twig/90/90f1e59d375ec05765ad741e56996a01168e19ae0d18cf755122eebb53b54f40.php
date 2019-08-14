<?php

/* rand.html */
class __TwigTemplate_9bed58ad3cfb30d3e97033f28744b608dfd143cc0650aba3d1fba3e53746f110 extends Twig_Template
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
        $__internal_3e6492ea919a82a02c6a2e8df740ff8d4d7bc19efb01750e9b0e8918831ea361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6492ea919a82a02c6a2e8df740ff8d4d7bc19efb01750e9b0e8918831ea361->enter($__internal_3e6492ea919a82a02c6a2e8df740ff8d4d7bc19efb01750e9b0e8918831ea361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rand.html"));

        // line 1
        echo "<html>
   <head>
      <title>Angular JS Includes</title>
      
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
      <h2>AngularJS Sample Application</h2>
      <div ng-app = \"\" ng-controller = \"studentController\">
      
         <table>
            <tr>
               <th>Name</th>
               <th>Roll No</th>
               <th>Percentage</th>
            </tr>
         
            <tr ng-repeat = \"student in name\">
               <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "name", array()), "html", null, true);
        echo "</td>


            </tr>
         </table>
      </div>
      

      
      <script src = \"https://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js\">
      </script>
      
   </body>
</html>
";
        
        $__internal_3e6492ea919a82a02c6a2e8df740ff8d4d7bc19efb01750e9b0e8918831ea361->leave($__internal_3e6492ea919a82a02c6a2e8df740ff8d4d7bc19efb01750e9b0e8918831ea361_prof);

    }

    public function getTemplateName()
    {
        return "rand.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 32,  22 => 1,);
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
      <title>Angular JS Includes</title>
      
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
      <h2>AngularJS Sample Application</h2>
      <div ng-app = \"\" ng-controller = \"studentController\">
      
         <table>
            <tr>
               <th>Name</th>
               <th>Roll No</th>
               <th>Percentage</th>
            </tr>
         
            <tr ng-repeat = \"student in name\">
               <td>{{ student.name }}</td>


            </tr>
         </table>
      </div>
      

      
      <script src = \"https://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js\">
      </script>
      
   </body>
</html>
", "rand.html", "/Users/sandeshhg/FinalDemo/app/Resources/views/rand.html");
    }
}
