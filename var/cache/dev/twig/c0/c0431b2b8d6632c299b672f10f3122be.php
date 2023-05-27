<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* edit/show.html.twig */
class __TwigTemplate_cacbd7844754e5997dbf8ff7b952c6bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edit/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edit/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "edit/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Note-App!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
   
   

   .cadre-todo
   {
    background-color: #B0413E;
     left: -50px;
   }
   .todo-container
   {
    position: absolute;
    width: 430px;
    height: 636px;
    left: 864px;
    top: 162px;

   }
   .background
   {
    width: 430px;
    height: 202px;
    left: 864px;
    top: 162px;

    border-radius: 10px 10px 0px 0px;
   }

   .day
   {
    position: absolute;
    width: 104px;
    height: 22px;
    left: 317px;
    top: 114px;
    font-family: 'Russo One';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #FFFFFF;

   }

   .date
   {
    position: absolute;
    width: 192px;
    height: 58px;
    left: 210px;
    top: 131px;
    font-family: 'Russo One';
    font-style: normal;
    font-weight: 400;
    font-size: 48px;
    line-height: 58px;
    /* identical to box height */

    color: #FFFFFF;

   }
   .note-cadre
   {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 0px;
    gap: 10px;

    position: absolute;
    width: 373px;
    height: 49px;
    left: 893px;
    top: 387px;

   }

   .note-text-cadre 
   {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 10px 12px;
    gap: 10px;
    width: 227px;
    height: 27px;
    background: cornflowerblue;
    border-radius: 5px;
    flex: none;
      flex-grow: 0;
    order: 0;
    align-self: stretch;
    flex-grow: 1;
    position: absolute;
    left: -27px;
    top: 1px;
   }
   .note-text 
   {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: black;
    flex: none;
    order: 0;
    flex-grow: 0;
    position: absolute;
    border: none;
    background: none;
    outline: none;

   }
   .date-select
   {
       display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      padding: 10px;
      gap: 11px;
      isolation: isolate;
      width: 126px;
      height: 46px;
      border-radius: 5px;
      flex: none;
        flex-grow: 0;
      flex-grow: 0;
      order: 1;
      align-self: stretch;
      flex-grow: 0;
      position: absolute;
      left: 229px;
      top: 2px;
      background: url('https://api.iconify.design/uil/angle-down.svg') no-repeat center center / contain;
        background-color: rgba(0, 0, 0, 0);
      background-color: rgba(0, 0, 0, 0);
      -webkit-appearance: none;
      -moz-appearance: none;
      background-color: #20EEB0;
      border: 1px solid;
      text-align: center;



   }
   .date-select-choice
   {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      padding: 10px;
      gap: 11px;
      isolation: isolate;
      width: 126px;
      height: 46px;
      border-radius: 5px;
      flex: none;
        flex-grow: 0;
      flex-grow: 0;
      flex-grow: 0;
      order: 1;
      align-self: stretch;
      flex-grow: 0;
      position: absolute;
      left: 229px;
      top: 2px;
      background-color: rgba(0, 0, 0, 0);
      background-color: rgba(0, 0, 0, 0);
      -webkit-appearance: none;
      -moz-appearance: none;
      background-color: #20EEB0;
      border: 1px solid;
      text-align: center;
   }
   .btn
   {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 10px;
    gap: 11px;
    isolation: isolate;
    width: 45px;
    height: 46px;
    background: #20EEB0;
    border-radius: 5px;
    flex: none;
      flex-grow: 0;
    flex-grow: 0;
    order: 1;
    align-self: stretch;
    flex-grow: 0;
    position: absolute;
    left: 358px;
    top: 2px;
    border: 1px solid;
    cursor:pointer
   }
   .btn-icon
   {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    padding: 4px 15px;
    gap: 10px;

    width: 46px;
    height: 24px;


    /* Inside auto layout */
    flex: none;
    order: 0;
    flex-grow: 0;
    z-index: 0;
   }
   
</style>

   
  <div class=\"cadre-todo\">
     ";
        // line 231
        $this->loadTemplate("/components/header.html.twig", "edit/show.html.twig", 231)->display(twig_array_merge($context, ["jourDate" => (isset($context["jourDate"]) || array_key_exists("jourDate", $context) ? $context["jourDate"] : (function () { throw new RuntimeError('Variable "jourDate" does not exist.', 231, $this->source); })()), "heure" => (isset($context["heure"]) || array_key_exists("heure", $context) ? $context["heure"] : (function () { throw new RuntimeError('Variable "heure" does not exist.', 231, $this->source); })())]));
        // line 232
        echo "      <div class=\"note-cadre\">
        <form action=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_task", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 233, $this->source); })()), "id", [], "any", false, false, false, 233)]), "html", null, true);
        echo "\" method=\"post\">
              <div class=\"note-text-cadre\">
                <input type=\"text\" name=\"titre\" value=\"";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 235, $this->source); })()), "titre", [], "any", false, false, false, 235), "html", null, true);
        echo "\" class=\"note-text\" id=\"titre\">
              </div>
                <button type=\"submit\" class=\"btn\">
                    <img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/image/ok.png"), "html", null, true);
        echo "\" alt=\"icon\" style=\"position: absolute;\">
                 </button>
                 <select name=\"jourDate\" class=\"date-select-choice\" id=\"selectChoice\" onclick=\"onSelect()\">
                     <option>";
        // line 241
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 241, $this->source); })()), "jourDate", [], "any", false, false, false, 241), "html", null, true);
        echo "</option>
                    ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["array_day"]) || array_key_exists("array_day", $context) ? $context["array_day"] : (function () { throw new RuntimeError('Variable "array_day" does not exist.', 242, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 243
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "first", [], "any", false, false, false, 243), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "first", [], "any", false, false, false, 243), "html", null, true);
            echo "</option>
                        <option value=\"";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "second", [], "any", false, false, false, 244), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "second", [], "any", false, false, false, 244), "html", null, true);
            echo "</option>
                        <option value=\"";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "third", [], "any", false, false, false, 245), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "third", [], "any", false, false, false, 245), "html", null, true);
            echo "</option>
                        <option value=\"";
            // line 246
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "fourth", [], "any", false, false, false, 246), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "fourth", [], "any", false, false, false, 246), "html", null, true);
            echo "</option>
                        <option value=\"";
            // line 247
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "fifth", [], "any", false, false, false, 247), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "fifth", [], "any", false, false, false, 247), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo "                 </select>
          </form>
      </div>

      
     

  </div>

</div>

<script>



 function onSelect()
 {
   var select= document.getElementById('selectChoice').value  


   if(select.length !==0)
   {
      document.getElementById('selectChoice').className=\"date-select-choice\"

   }
   
   else
   {
      document.getElementById('selectChoice').className=\"date-select\"

   }


   
   
 }

 

  
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "edit/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 249,  370 => 247,  364 => 246,  358 => 245,  352 => 244,  345 => 243,  341 => 242,  337 => 241,  331 => 238,  325 => 235,  320 => 233,  317 => 232,  315 => 231,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Note-App!{% endblock %}

{% block body %}
<style>
   
   

   .cadre-todo
   {
    background-color: #B0413E;
     left: -50px;
   }
   .todo-container
   {
    position: absolute;
    width: 430px;
    height: 636px;
    left: 864px;
    top: 162px;

   }
   .background
   {
    width: 430px;
    height: 202px;
    left: 864px;
    top: 162px;

    border-radius: 10px 10px 0px 0px;
   }

   .day
   {
    position: absolute;
    width: 104px;
    height: 22px;
    left: 317px;
    top: 114px;
    font-family: 'Russo One';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #FFFFFF;

   }

   .date
   {
    position: absolute;
    width: 192px;
    height: 58px;
    left: 210px;
    top: 131px;
    font-family: 'Russo One';
    font-style: normal;
    font-weight: 400;
    font-size: 48px;
    line-height: 58px;
    /* identical to box height */

    color: #FFFFFF;

   }
   .note-cadre
   {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 0px;
    gap: 10px;

    position: absolute;
    width: 373px;
    height: 49px;
    left: 893px;
    top: 387px;

   }

   .note-text-cadre 
   {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 10px 12px;
    gap: 10px;
    width: 227px;
    height: 27px;
    background: cornflowerblue;
    border-radius: 5px;
    flex: none;
      flex-grow: 0;
    order: 0;
    align-self: stretch;
    flex-grow: 1;
    position: absolute;
    left: -27px;
    top: 1px;
   }
   .note-text 
   {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: black;
    flex: none;
    order: 0;
    flex-grow: 0;
    position: absolute;
    border: none;
    background: none;
    outline: none;

   }
   .date-select
   {
       display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      padding: 10px;
      gap: 11px;
      isolation: isolate;
      width: 126px;
      height: 46px;
      border-radius: 5px;
      flex: none;
        flex-grow: 0;
      flex-grow: 0;
      order: 1;
      align-self: stretch;
      flex-grow: 0;
      position: absolute;
      left: 229px;
      top: 2px;
      background: url('https://api.iconify.design/uil/angle-down.svg') no-repeat center center / contain;
        background-color: rgba(0, 0, 0, 0);
      background-color: rgba(0, 0, 0, 0);
      -webkit-appearance: none;
      -moz-appearance: none;
      background-color: #20EEB0;
      border: 1px solid;
      text-align: center;



   }
   .date-select-choice
   {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      padding: 10px;
      gap: 11px;
      isolation: isolate;
      width: 126px;
      height: 46px;
      border-radius: 5px;
      flex: none;
        flex-grow: 0;
      flex-grow: 0;
      flex-grow: 0;
      order: 1;
      align-self: stretch;
      flex-grow: 0;
      position: absolute;
      left: 229px;
      top: 2px;
      background-color: rgba(0, 0, 0, 0);
      background-color: rgba(0, 0, 0, 0);
      -webkit-appearance: none;
      -moz-appearance: none;
      background-color: #20EEB0;
      border: 1px solid;
      text-align: center;
   }
   .btn
   {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 10px;
    gap: 11px;
    isolation: isolate;
    width: 45px;
    height: 46px;
    background: #20EEB0;
    border-radius: 5px;
    flex: none;
      flex-grow: 0;
    flex-grow: 0;
    order: 1;
    align-self: stretch;
    flex-grow: 0;
    position: absolute;
    left: 358px;
    top: 2px;
    border: 1px solid;
    cursor:pointer
   }
   .btn-icon
   {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    padding: 4px 15px;
    gap: 10px;

    width: 46px;
    height: 24px;


    /* Inside auto layout */
    flex: none;
    order: 0;
    flex-grow: 0;
    z-index: 0;
   }
   
</style>

   
  <div class=\"cadre-todo\">
     {% include \"/components/header.html.twig\" with{'jourDate':jourDate, 'heure':heure} %}
      <div class=\"note-cadre\">
        <form action=\"{{path('edit_task', {'id':task.id})}}\" method=\"post\">
              <div class=\"note-text-cadre\">
                <input type=\"text\" name=\"titre\" value=\"{{task.titre}}\" class=\"note-text\" id=\"titre\">
              </div>
                <button type=\"submit\" class=\"btn\">
                    <img src=\"{{asset('/image/ok.png')}}\" alt=\"icon\" style=\"position: absolute;\">
                 </button>
                 <select name=\"jourDate\" class=\"date-select-choice\" id=\"selectChoice\" onclick=\"onSelect()\">
                     <option>{{task.jourDate}}</option>
                    {% for day in array_day %}
                        <option value=\"{{day.first}}\">{{day.first}}</option>
                        <option value=\"{{day.second}}\">{{day.second}}</option>
                        <option value=\"{{day.third}}\">{{day.third}}</option>
                        <option value=\"{{day.fourth}}\">{{day.fourth}}</option>
                        <option value=\"{{day.fifth}}\">{{day.fifth}}</option>
                    {% endfor %}
                 </select>
          </form>
      </div>

      
     

  </div>

</div>

<script>



 function onSelect()
 {
   var select= document.getElementById('selectChoice').value  


   if(select.length !==0)
   {
      document.getElementById('selectChoice').className=\"date-select-choice\"

   }
   
   else
   {
      document.getElementById('selectChoice').className=\"date-select\"

   }


   
   
 }

 

  
</script>
{% endblock %}
", "edit/show.html.twig", "C:\\wamp64\\www\\Todo-list\\templates\\edit\\show.html.twig");
    }
}
