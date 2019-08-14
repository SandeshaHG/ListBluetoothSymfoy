<?php

/* books/display.html.twig */
class __TwigTemplate_45b5eb5d1385c62f2596393c505ebe1f9e9483e07e35a72314603713505cc918 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "books/display.html.twig", 1);
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
        $__internal_6874d1b6585109a3ca46dd03055daa6bfbcf4e1247e8903060eb665dd4d69d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6874d1b6585109a3ca46dd03055daa6bfbcf4e1247e8903060eb665dd4d69d33->enter($__internal_6874d1b6585109a3ca46dd03055daa6bfbcf4e1247e8903060eb665dd4d69d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "books/display.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6874d1b6585109a3ca46dd03055daa6bfbcf4e1247e8903060eb665dd4d69d33->leave($__internal_6874d1b6585109a3ca46dd03055daa6bfbcf4e1247e8903060eb665dd4d69d33_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_08fc807b677883fceb2f4f76bb4da5555a114e6b003d7038bcbe8603373e2782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fc807b677883fceb2f4f76bb4da5555a114e6b003d7038bcbe8603373e2782->enter($__internal_08fc807b677883fceb2f4f76bb4da5555a114e6b003d7038bcbe8603373e2782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
   <style> 
      .table { border-collapse: collapse; } 
      .table th, td { 
         border-bottom: 1px solid #ddd; 
         width: 250px; 
         text-align: left; 
         align: left; 
      } 
   </style> 
";
        
        $__internal_08fc807b677883fceb2f4f76bb4da5555a114e6b003d7038bcbe8603373e2782->leave($__internal_08fc807b677883fceb2f4f76bb4da5555a114e6b003d7038bcbe8603373e2782_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_60bac9f70e0cab171e51b0e0c29db9294fe345324460ab20e5182e68c515f498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60bac9f70e0cab171e51b0e0c29db9294fe345324460ab20e5182e68c515f498->enter($__internal_60bac9f70e0cab171e51b0e0c29db9294fe345324460ab20e5182e68c515f498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
 <!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>HOLIDAY BANNER UI</title>
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto|Varela+Round\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<style type=\"text/css\">
    body {
        color: #566787;
      background: #f5f5f5;
      font-family: 'Varela Round', sans-serif;
      font-size: 13px;
   }
   .table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
      border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
   .table-title {        
      padding-bottom: 15px;
      background: #435d7d;
      color: #fff;
      padding: 16px 30px;
      margin: -20px -25px 10px;
      border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
      margin: 5px 0 0;
      font-size: 24px;
   }
   .table-title .btn-group {
      float: right;
   }
   .table-title .btn {
      color: #fff;
      float: right;
      font-size: 13px;
      border: none;
      min-width: 50px;
      border-radius: 2px;
      border: none;
      outline: none !important;
      margin-left: 10px;
   }
   .table-title .btn i {
      float: left;
      font-size: 21px;
      margin-right: 5px;
   }
   .table-title .btn span {
      float: left;
      margin-top: 2px;
   }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
      padding: 12px 15px;
      vertical-align: middle;
    }
   table.table tr th:first-child {
      width: 60px;
   }
   table.table tr th:last-child {
      width: 100px;
   }
    table.table-striped tbody tr:nth-of-type(odd) {
      background-color: #fcfcfc;
   }
   table.table-striped.table-hover tbody tr:hover {
      background: #f5f5f5;
   }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    } 
    table.table td:last-child i {
      opacity: 0.9;
      font-size: 22px;
        margin: 0 5px;
    }
   table.table td a {
      font-weight: bold;
      color: #566787;
      display: inline-block;
      text-decoration: none;
      outline: none !important;
   }
   table.table td a:hover {
      color: #2196F3;
   }
   table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
   table.table .avatar {
      border-radius: 50%;
      vertical-align: middle;
      margin-right: 10px;
   }
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    } 
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
   .pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
   /* Custom checkbox */
   .custom-checkbox {
      position: relative;
   }
   .custom-checkbox input[type=\"checkbox\"] {    
      opacity: 0;
      position: absolute;
      margin: 5px 0 0 3px;
      z-index: 9;
   }
   .custom-checkbox label:before{
      width: 18px;
      height: 18px;
   }
   .custom-checkbox label:before {
      content: '';
      margin-right: 10px;
      display: inline-block;
      vertical-align: text-top;
      background: white;
      border: 1px solid #bbb;
      border-radius: 2px;
      box-sizing: border-box;
      z-index: 2;
   }
   .custom-checkbox input[type=\"checkbox\"]:checked + label:after {
      content: '';
      position: absolute;
      left: 6px;
      top: 3px;
      width: 6px;
      height: 11px;
      border: solid #000;
      border-width: 0 3px 3px 0;
      transform: inherit;
      z-index: 3;
      transform: rotateZ(45deg);
   }
   .custom-checkbox input[type=\"checkbox\"]:checked + label:before {
      border-color: #03A9F4;
      background: #03A9F4;
   }
   .custom-checkbox input[type=\"checkbox\"]:checked + label:after {
      border-color: #fff;
   }
   .custom-checkbox input[type=\"checkbox\"]:disabled + label:before {
      color: #b8b8b8;
      cursor: auto;
      box-shadow: none;
      background: #ddd;
   }
   /* Modal styles */
   .modal .modal-dialog {
      max-width: 400px;
   }
   .modal .modal-header, .modal .modal-body, .modal .modal-footer {
      padding: 20px 30px;
   }
   .modal .modal-content {
      border-radius: 3px;
   }
   .modal .modal-footer {
      background: #ecf0f1;
      border-radius: 0 0 3px 3px;
   }
    .modal .modal-title {
        display: inline-block;
    }
   .modal .form-control {
      border-radius: 2px;
      box-shadow: none;
      border-color: #dddddd;
   }
   .modal textarea.form-control {
      resize: vertical;
   }
   .modal .btn {
      border-radius: 2px;
      min-width: 100px;
   }  
   .modal form label {
      font-weight: normal;
   }  
</style>

<script>
   console.log(\"hey\");
\$(document).ready(function(){
   \$.getJSON(\"holiday.json\",function(data){
      var hd='';
      \$.each(data,function(key,value){
         hd+='<tr>';
         hd+='<td>'+value.title+'</td>';
         hd+='</tr>';

      });
      \$('#holiday_data').append(hd);
   });
});
</script>

<script type=\"text/javascript\">
\$(document).ready(function(){
   // Activate tooltip
   \$('[data-toggle=\"tooltip\"]').tooltip();
   
   // Select/Deselect checkboxes
   var checkbox = \$('table tbody input[type=\"checkbox\"]');
   \$(\"#selectAll\").click(function(){
      if(this.checked){
         checkbox.each(function(){
            this.checked = true;                        
         });
      } else{
         checkbox.each(function(){
            this.checked = false;                        
         });
      } 
   });
   checkbox.click(function(){
      if(!this.checked){
         \$(\"#selectAll\").prop(\"checked\", false);
      }
   });
});
</script>

<script>
\$(document).ready(function(){
  \$(\"#StateName\").on(\"keyup\", function() {
    var value = \$(this).val().toLowerCase();
    \$(\".dropdown-menu li\").filter(function() {
      \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
\$(document).ready(function(){
  \$(\"#CityName\").on(\"keyup\", function() {
    var value = \$(this).val().toLowerCase();
    \$(\".dropdown-menu li\").filter(function() {
      \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>

</head>
<body>
    <div class=\"container\">
        <div class=\"table-wrapper\">
            <div class=\"table-title\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                  <h2>Manage <b>Holidays</b></h2>
               </div>
               <div class=\"col-sm-6\">
                  <a href=\"#addEmployeeModal\" class=\"btn btn-success\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE147;</i> <span>Add New Holiday Banner</span></a>
                  <a href=\"#deleteEmployeeModal\" class=\"btn btn-danger\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE15C;</i> <span>Delete</span></a>                 
               </div>
                </div>
            </div>
            <table class=\"table table-striped table-hover\" id=\"holiday_data\">
                <thead>
                    <tr>
                  <th>
                     <span class=\"custom-checkbox\">
                        <input type=\"checkbox\" id=\"selectAll\">
                        <label for=\"selectAll\"></label>
                     </span>
                  </th>
                        <th>TITLE</th>
                        <th>
                     <div class='input-group date' id='dtpickerdemo'>
                           <input type='text' class=\"form-control\" placeholder=\"START TIME\"/>
                           <span class=\"input-group-addon\">
                                 <span class=\"glyphicon glyphicon-calendar\"></span>
                           </span>
                        </div>
                     </th>
                  <th>
                     <div class='input-group date' id='dtpickerdemo'>
                           <input type='text' class=\"form-control\" placeholder=\"END TIME\"/>
                           <span class=\"input-group-addon\">
                                 <span class=\"glyphicon glyphicon-calendar\"></span>
                           </span>
                        </div>
                     </th>
                        <th> 
                           <div class=\"dropdown\">
                        <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">STATE NAME
                        <span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">
                              <input class=\"form-control\" id=\"StateName\" type=\"text\" placeholder=\"Search..\">
                              <li><a href=\"#\">KARNATAKA</a></li>
                              <li><a href=\"#\">TAMIL NADU</a></li>
                              <li><a href=\"#\">JavaScript</a></li>
                           <li><a href=\"#\">jQuery</a></li>
                           <li><a href=\"#\">Bootstrap</a></li>
                           <li><a href=\"#\">Angular</a></li>
                           </ul>
                      </div>
                  </th>
                        <th>
                           <div class=\"dropdown\">
                        <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">CITY NAME
                           <span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">
                           <input class=\"form-control\" id=\"CityName\" type=\"text\" placeholder=\"Search..\">
                           <li><a href=\"#\">KARNATAKA</a></li>
                              <li><a href=\"#\">TAMIL NADU</a></li>
                           <li><a href=\"#\">JavaScript</a></li>
                              <li><a href=\"#\">jQuery</a></li>
                              <li><a href=\"#\">Bootstrap</a></li>
                              <li><a href=\"#\">Angular</a></li>
                        </ul>
                     </div>
                  </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                  <td>
                     <span class=\"custom-checkbox\">
                        <input type=\"checkbox\" id=\"checkbox1\" name=\"options[]\" value=\"1\">
                        <label for=\"checkbox1\"></label>
                     </span>
                  </td>
                        <td>Thomas Hardy</td>
                        <td>thomashardy@mail.com</td>
                  <td>89 Chiaroscuro Rd, Portland, USA</td>
                        <td>(171) 555-2222</td>
                        <td></td>
                        <td>
                            <a href=\"#editEmployeeModal\" class=\"edit\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Edit\">&#xE254;</i></a>
                            <a href=\"#deleteEmployeeModal\" class=\"delete\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Delete\">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                  <td>
                     <span class=\"custom-checkbox\">
                        <input type=\"checkbox\" id=\"checkbox2\" name=\"options[]\" value=\"1\">
                        <label for=\"checkbox2\"></label>
                     </span>
                  </td>
                        <td>Dominique Perrier</td>
                        <td>dominiqueperrier@mail.com</td>
                  <td>Obere Str. 57, Berlin, Germany</td>
                        <td>(313) 555-5735</td>
                        <td></td>
                        <td>
                            <a href=\"#editEmployeeModal\" class=\"edit\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Edit\">&#xE254;</i></a>
                            <a href=\"#deleteEmployeeModal\" class=\"delete\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Delete\">&#xE872;</i></a>
                        </td>
                    </tr>
         
                 
                </tbody>
            </table>
         <div class=\"clearfix\">
                <div class=\"hint-text\">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class=\"pagination\">
                    <li class=\"page-item disabled\"><a href=\"#\">Previous</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">1</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">2</a></li>
                    <li class=\"page-item active\"><a href=\"#\" class=\"page-link\">3</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">4</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">5</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">Next</a></li>
                </ul>
            </div>
        </div>
    </div>

   <!-- Edit Modal HTML -->
   <div id=\"addEmployeeModal\" class=\"modal fade\">
      <div class=\"modal-dialog\">
         <div class=\"modal-content\">
            <form>
               <div class=\"modal-header\">                
                  <h4 class=\"modal-title\">Add Holiday</h4>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
               </div>
               <div class=\"modal-body\">               
                  <div class=\"form-group\">
                     <label>Title</label>
                     <input type=\"text\" class=\"form-control\" required>
                  </div>
                  <div class=\"form-group\">
                     <label>start time</label>
                     <input type=\"email\" class=\"form-control\" required>
                  </div>
                  <div class=\"form-group\">
                     <label>end time</label>
                     <textarea class=\"form-control\" required></textarea>
                  </div>
                  <div class=\"form-group\">
                     <label>smstext</label>
                     <input type=\"text\" class=\"form-control\" required>
                  </div>   
                  <div class=\"form-group\">
                     <label>bannertext</label>
                     <input type=\"text\" class=\"form-control\" required>
                  </div>   
                  <div class=\"form-group\">
                     <label>stateid</label>
                     <input type=\"text\" class=\"form-control\" required>
                  </div>   
                     <div class=\"form-group\">
                     <label>cityid</label>
                     <input type=\"text\" class=\"form-control\" required>
                  </div>               
               </div>
               <div class=\"modal-footer\">
                  <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                  <input type=\"submit\" class=\"btn btn-success\" value=\"Add\">
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Edit Modal HTML -->
   <div id=\"editEmployeeModal\" class=\"modal fade\">
      <div class=\"modal-dialog\">
         <div class=\"modal-content\">
            <form>
               <div class=\"modal-header\">                
                  <h4 class=\"modal-title\">Edit Holiday</h4>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
               </div>
               <div class=\"modal-body\">               
                  <div class=\"form-group\">
                     <label>Name</label>
                     <input type=\"text\" class=\"form-control\" required>
                  </div>
                  <div class=\"form-group\">
                     <label>Email</label>
                     <input type=\"email\" class=\"form-control\" required>
                  </div>
                  <div class=\"form-group\">
                     <label>Address</label>
                     <textarea class=\"form-control\" required></textarea>
                  </div>
                  <div class=\"form-group\">
                     <label>Phone</label>
                     <input type=\"text\" class=\"form-control\" required>
                  </div>               
               </div>
               <div class=\"modal-footer\">
                  <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                  <input type=\"submit\" class=\"btn btn-info\" value=\"Save\">
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Delete Modal HTML -->
   <div id=\"deleteEmployeeModal\" class=\"modal fade\">
      <div class=\"modal-dialog\">
         <div class=\"modal-content\">
            <form>
               <div class=\"modal-header\">                
                  <h4 class=\"modal-title\">Delete Holiday</h4>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
               </div>
               <div class=\"modal-body\">               
                  <p>Are you sure you want to delete these Records?</p>
                  <p class=\"text-warning\"><small>This action cannot be undone.</small></p>
               </div>
               <div class=\"modal-footer\">
                  <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                  <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
               </div>
            </form>
         </div>
      </div>
   </div>
</body>
</html>                                                                  
";
        
        $__internal_60bac9f70e0cab171e51b0e0c29db9294fe345324460ab20e5182e68c515f498->leave($__internal_60bac9f70e0cab171e51b0e0c29db9294fe345324460ab20e5182e68c515f498_prof);

    }

    public function getTemplateName()
    {
        return "books/display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  35 => 2,  11 => 1,);
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
      .table { border-collapse: collapse; } 
      .table th, td { 
         border-bottom: 1px solid #ddd; 
         width: 250px; 
         text-align: left; 
         align: left; 
      } 
   </style> 
{% endblock %}  
{% block body %} 
 <!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>HOLIDAY BANNER UI</title>
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto|Varela+Round\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<style type=\"text/css\">
    body {
        color: #566787;
      background: #f5f5f5;
      font-family: 'Varela Round', sans-serif;
      font-size: 13px;
   }
   .table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
      border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
   .table-title {        
      padding-bottom: 15px;
      background: #435d7d;
      color: #fff;
      padding: 16px 30px;
      margin: -20px -25px 10px;
      border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
      margin: 5px 0 0;
      font-size: 24px;
   }
   .table-title .btn-group {
      float: right;
   }
   .table-title .btn {
      color: #fff;
      float: right;
      font-size: 13px;
      border: none;
      min-width: 50px;
      border-radius: 2px;
      border: none;
      outline: none !important;
      margin-left: 10px;
   }
   .table-title .btn i {
      float: left;
      font-size: 21px;
      margin-right: 5px;
   }
   .table-title .btn span {
      float: left;
      margin-top: 2px;
   }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
      padding: 12px 15px;
      vertical-align: middle;
    }
   table.table tr th:first-child {
      width: 60px;
   }
   table.table tr th:last-child {
      width: 100px;
   }
    table.table-striped tbody tr:nth-of-type(odd) {
      background-color: #fcfcfc;
   }
   table.table-striped.table-hover tbody tr:hover {
      background: #f5f5f5;
   }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    } 
    table.table td:last-child i {
      opacity: 0.9;
      font-size: 22px;
        margin: 0 5px;
    }
   table.table td a {
      font-weight: bold;
      color: #566787;
      display: inline-block;
      text-decoration: none;
      outline: none !important;
   }
   table.table td a:hover {
      color: #2196F3;
   }
   table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
   table.table .avatar {
      border-radius: 50%;
      vertical-align: middle;
      margin-right: 10px;
   }
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    } 
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
   .pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
   /* Custom checkbox */
   .custom-checkbox {
      position: relative;
   }
   .custom-checkbox input[type=\"checkbox\"] {    
      opacity: 0;
      position: absolute;
      margin: 5px 0 0 3px;
      z-index: 9;
   }
   .custom-checkbox label:before{
      width: 18px;
      height: 18px;
   }
   .custom-checkbox label:before {
      content: '';
      margin-right: 10px;
      display: inline-block;
      vertical-align: text-top;
      background: white;
      border: 1px solid #bbb;
      border-radius: 2px;
      box-sizing: border-box;
      z-index: 2;
   }
   .custom-checkbox input[type=\"checkbox\"]:checked + label:after {
      content: '';
      position: absolute;
      left: 6px;
      top: 3px;
      width: 6px;
      height: 11px;
      border: solid #000;
      border-width: 0 3px 3px 0;
      transform: inherit;
      z-index: 3;
      transform: rotateZ(45deg);
   }
   .custom-checkbox input[type=\"checkbox\"]:checked + label:before {
      border-color: #03A9F4;
      background: #03A9F4;
   }
   .custom-checkbox input[type=\"checkbox\"]:checked + label:after {
      border-color: #fff;
   }
   .custom-checkbox input[type=\"checkbox\"]:disabled + label:before {
      color: #b8b8b8;
      cursor: auto;
      box-shadow: none;
      background: #ddd;
   }
   /* Modal styles */
   .modal .modal-dialog {
      max-width: 400px;
   }
   .modal .modal-header, .modal .modal-body, .modal .modal-footer {
      padding: 20px 30px;
   }
   .modal .modal-content {
      border-radius: 3px;
   }
   .modal .modal-footer {
      background: #ecf0f1;
      border-radius: 0 0 3px 3px;
   }
    .modal .modal-title {
        display: inline-block;
    }
   .modal .form-control {
      border-radius: 2px;
      box-shadow: none;
      border-color: #dddddd;
   }
   .modal textarea.form-control {
      resize: vertical;
   }
   .modal .btn {
      border-radius: 2px;
      min-width: 100px;
   }  
   .modal form label {
      font-weight: normal;
   }  
</style>

<script>
   console.log(\"hey\");
\$(document).ready(function(){
   \$.getJSON(\"holiday.json\",function(data){
      var hd='';
      \$.each(data,function(key,value){
         hd+='<tr>';
         hd+='<td>'+value.title+'</td>';
         hd+='</tr>';

      });
      \$('#holiday_data').append(hd);
   });
});
</script>

<script type=\"text/javascript\">
\$(document).ready(function(){
   // Activate tooltip
   \$('[data-toggle=\"tooltip\"]').tooltip();
   
   // Select/Deselect checkboxes
   var checkbox = \$('table tbody input[type=\"checkbox\"]');
   \$(\"#selectAll\").click(function(){
      if(this.checked){
         checkbox.each(function(){
            this.checked = true;                        
         });
      } else{
         checkbox.each(function(){
            this.checked = false;                        
         });
      } 
   });
   checkbox.click(function(){
      if(!this.checked){
         \$(\"#selectAll\").prop(\"checked\", false);
      }
   });
});
</script>

<script>
\$(document).ready(function(){
  \$(\"#StateName\").on(\"keyup\", function() {
    var value = \$(this).val().toLowerCase();
    \$(\".dropdown-menu li\").filter(function() {
      \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
\$(document).ready(function(){
  \$(\"#CityName\").on(\"keyup\", function() {
    var value = \$(this).val().toLowerCase();
    \$(\".dropdown-menu li\").filter(function() {
      \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>

</head>
<body>
    <div class=\"container\">
        <div class=\"table-wrapper\">
            <div class=\"table-title\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                  <h2>Manage <b>Holidays</b></h2>
               </div>
               <div class=\"col-sm-6\">
                  <a href=\"#addEmployeeModal\" class=\"btn btn-success\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE147;</i> <span>Add New Holiday Banner</span></a>
                  <a href=\"#deleteEmployeeModal\" class=\"btn btn-danger\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE15C;</i> <span>Delete</span></a>                 
               </div>
                </div>
            </div>
            <table class=\"table table-striped table-hover\" id=\"holiday_data\">
                <thead>
                    <tr>
                  <th>
                     <span class=\"custom-checkbox\">
                        <input type=\"checkbox\" id=\"selectAll\">
                        <label for=\"selectAll\"></label>
                     </span>
                  </th>
                        <th>TITLE</th>
                        <th>
                     <div class='input-group date' id='dtpickerdemo'>
                           <input type='text' class=\"form-control\" placeholder=\"START TIME\"/>
                           <span class=\"input-group-addon\">
                                 <span class=\"glyphicon glyphicon-calendar\"></span>
                           </span>
                        </div>
                     </th>
                  <th>
                     <div class='input-group date' id='dtpickerdemo'>
                           <input type='text' class=\"form-control\" placeholder=\"END TIME\"/>
                           <span class=\"input-group-addon\">
                                 <span class=\"glyphicon glyphicon-calendar\"></span>
                           </span>
                        </div>
                     </th>
                        <th> 
                           <div class=\"dropdown\">
                        <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">STATE NAME
                        <span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">
                              <input class=\"form-control\" id=\"StateName\" type=\"text\" placeholder=\"Search..\">
                              <li><a href=\"#\">KARNATAKA</a></li>
                              <li><a href=\"#\">TAMIL NADU</a></li>
                              <li><a href=\"#\">JavaScript</a></li>
                           <li><a href=\"#\">jQuery</a></li>
                           <li><a href=\"#\">Bootstrap</a></li>
                           <li><a href=\"#\">Angular</a></li>
                           </ul>
                      </div>
                  </th>
                        <th>
                           <div class=\"dropdown\">
                        <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">CITY NAME
                           <span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">
                           <input class=\"form-control\" id=\"CityName\" type=\"text\" placeholder=\"Search..\">
                           <li><a href=\"#\">KARNATAKA</a></li>
                              <li><a href=\"#\">TAMIL NADU</a></li>
                           <li><a href=\"#\">JavaScript</a></li>
                              <li><a href=\"#\">jQuery</a></li>
                              <li><a href=\"#\">Bootstrap</a></li>
                              <li><a href=\"#\">Angular</a></li>
                        </ul>
                     </div>
                  </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                  <td>
                     <span class=\"custom-checkbox\">
                        <input type=\"checkbox\" id=\"checkbox1\" name=\"options[]\" value=\"1\">
                        <label for=\"checkbox1\"></label>
                     </span>
                  </td>
                        <td>Thomas Hardy</td>
                        <td>thomashardy@mail.com</td>
                  <td>89 Chiaroscuro Rd, Portland, USA</td>
                        <td>(171) 555-2222</td>
                        <td></td>
                        <td>
                            <a href=\"#editEmployeeModal\" class=\"edit\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Edit\">&#xE254;</i></a>
                            <a href=\"#deleteEmployeeModal\" class=\"delete\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Delete\">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                  <td>
                     <span class=\"custom-checkbox\">
                        <input type=\"checkbox\" id=\"checkbox2\" name=\"options[]\" value=\"1\">
                        <label for=\"checkbox2\"></label>
                     </span>
                  </td>
                        <td>Dominique Perrier</td>
                        <td>dominiqueperrier@mail.com</td>
                  <td>Obere Str. 57, Berlin, Germany</td>
                        <td>(313) 555-5735</td>
                        <td></td>
                        <td>
                            <a href=\"#editEmployeeModal\" class=\"edit\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Edit\">&#xE254;</i></a>
                            <a href=\"#deleteEmployeeModal\" class=\"delete\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Delete\">&#xE872;</i></a>
                        </td>
                    </tr>
         
                 
                </tbody>
            </table>
         <div class=\"clearfix\">
                <div class=\"hint-text\">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class=\"pagination\">
                    <li class=\"page-item disabled\"><a href=\"#\">Previous</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">1</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">2</a></li>
                    <li class=\"page-item active\"><a href=\"#\" class=\"page-link\">3</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">4</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">5</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">Next</a></li>
                </ul>
            </div>
        </div>
    </div>

   <!-- Edit Modal HTML -->
   <div id=\"addEmployeeModal\" class=\"modal fade\">
      <div class=\"modal-dialog\">
         <div class=\"modal-content\">
            <form>
               <div class=\"modal-header\">                
                  <h4 class=\"modal-title\">Add Holiday</h4>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
               </div>
               <div class=\"modal-body\">               
                  <div class=\"form-group\">
                     <label>Title</label>
                     <input type=\"text\" class=\"form-control\" required>
                  </div>
                  <div class=\"form-group\">
                     <label>start time</label>
                     <input type=\"email\" class=\"form-control\" required>
                  </div>
                  <div class=\"form-group\">
                     <label>end time</label>
                     <textarea class=\"form-control\" required></textarea>
                  </div>
                  <div class=\"form-group\">
                     <label>smstext</label>
                     <input type=\"text\" class=\"form-control\" required>
                  </div>   
                  <div class=\"form-group\">
                     <label>bannertext</label>
                     <input type=\"text\" class=\"form-control\" required>
                  </div>   
                  <div class=\"form-group\">
                     <label>stateid</label>
                     <input type=\"text\" class=\"form-control\" required>
                  </div>   
                     <div class=\"form-group\">
                     <label>cityid</label>
                     <input type=\"text\" class=\"form-control\" required>
                  </div>               
               </div>
               <div class=\"modal-footer\">
                  <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                  <input type=\"submit\" class=\"btn btn-success\" value=\"Add\">
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Edit Modal HTML -->
   <div id=\"editEmployeeModal\" class=\"modal fade\">
      <div class=\"modal-dialog\">
         <div class=\"modal-content\">
            <form>
               <div class=\"modal-header\">                
                  <h4 class=\"modal-title\">Edit Holiday</h4>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
               </div>
               <div class=\"modal-body\">               
                  <div class=\"form-group\">
                     <label>Name</label>
                     <input type=\"text\" class=\"form-control\" required>
                  </div>
                  <div class=\"form-group\">
                     <label>Email</label>
                     <input type=\"email\" class=\"form-control\" required>
                  </div>
                  <div class=\"form-group\">
                     <label>Address</label>
                     <textarea class=\"form-control\" required></textarea>
                  </div>
                  <div class=\"form-group\">
                     <label>Phone</label>
                     <input type=\"text\" class=\"form-control\" required>
                  </div>               
               </div>
               <div class=\"modal-footer\">
                  <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                  <input type=\"submit\" class=\"btn btn-info\" value=\"Save\">
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Delete Modal HTML -->
   <div id=\"deleteEmployeeModal\" class=\"modal fade\">
      <div class=\"modal-dialog\">
         <div class=\"modal-content\">
            <form>
               <div class=\"modal-header\">                
                  <h4 class=\"modal-title\">Delete Holiday</h4>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
               </div>
               <div class=\"modal-body\">               
                  <p>Are you sure you want to delete these Records?</p>
                  <p class=\"text-warning\"><small>This action cannot be undone.</small></p>
               </div>
               <div class=\"modal-footer\">
                  <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                  <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
               </div>
            </form>
         </div>
      </div>
   </div>
</body>
</html>                                                                  
{% endblock %} ", "books/display.html.twig", "/Users/sandeshhg/FinalDemo/app/Resources/views/books/display.html.twig");
    }
}
