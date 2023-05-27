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

/* security/register.html.twig */
class __TwigTemplate_931f7550c7d103e5c626ba5a4447213a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/register.html.twig", 1);
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
     position: absolute;
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
    width: 60px;
    height: 22px;
    left: 334px;
    top: 114px;

    font-family: 'Russo One', serif;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    /* identical to box height */

    color: #FFFFFF;

   }

   .date
   {
    position: absolute;
    width: 192px;
    height: 58px;
    left: 210px;
    top: 131px;
       font-family: 'Russo One', serif;
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
    top: 500px;

   }

   .note-text-cadre-name
   {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 10px 12px;
    gap: 10px;
    width: 267px;
    height: 27px;
    background: cornflowerblue;
    border-radius: 27px;
    flex: none;
    order: 0;
    align-self: stretch;
    flex-grow: 1;
    position: absolute;
    top: -78px;
    left:48px
   }
    
   .note-text-cadre-email 
   {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 10px 12px;
    gap: 10px;
    width: 267px;
    height: 27px;
    background: cornflowerblue;
    border-radius: 27px;
    flex: none;
    order: 0;
    align-self: stretch;
    flex-grow: 1;
    position: absolute;
    top: 0px;
    left:48px
   }

    .note-text-cadre-password
   {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 10px 12px;
    gap: 10px;
    width: 267px;
    height: 27px;
    background: cornflowerblue;
    border-radius: 27px;
    flex: none;
    order: 0;
    align-self: stretch;
    flex-grow: 1;
    position: absolute;
    top: 75px;
    left:48px;
   }
   .note-text-cadre-password-confirm
   {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 10px 12px;
    gap: 10px;
    width: 267px;
    height: 27px;
    background: cornflowerblue;
    border-radius: 27px;
    flex: none;
    order: 0;
    align-self: stretch;
    flex-grow: 1;
    position: absolute;
    top: 145px;
    left:48px;
   }
   .note-text 
   {
    width: 275px;
    height: 19px;
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
      width: 50px;
      height: 46px;
      border-radius: 5px;
      flex: none;
        flex-grow: 0;
      flex-grow: 0;
      order: 1;
      align-self: stretch;
      flex-grow: 0;
      position: absolute;
      left: 304px;
      top: 2px;
      background: url('https://api.iconify.design/uil/angle-down.svg') no-repeat center center / contain;
        background-color: rgba(0, 0, 0, 0);
      background-color: rgba(0, 0, 0, 0);
      -webkit-appearance: none;
      -moz-appearance: none;
      background-color: #20EEB0;
      border: 1px solid;


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
      width: 50px;
      height: 46px;
      border-radius: 5px;
      flex: none;
        flex-grow: 0;
      flex-grow: 0;
      order: 1;
      align-self: stretch;
      flex-grow: 0;
      position: absolute;
      left: 304px;
      top: 2px;
        background-color: rgba(0, 0, 0, 0);
      background-color: rgba(0, 0, 0, 0);
      -webkit-appearance: none;
      -moz-appearance: none;
      background-color: #20EEB0;
      border: 1px solid;


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
    width: 114px;
    height: 46px;
    background: #20EEB0;
    border-radius: 26px;
    flex: none;
    flex-grow: 0;
    flex-grow: 0;
    order: 1;
    align-self: stretch;
    flex-grow: 0;
    position: absolute;
    left: 141px;
    top: 222px;
    border: 1px solid;
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
   .connexion
   {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 10px;
    gap: 11px;
    isolation: isolate;
    width: 114px;
    height: 0px;
    color: darkslateblue;
    border-radius: 0px;
    flex: none;
    flex-grow: 0;
    flex-grow: 0;
    order: 1;
    align-self: stretch;
    flex-grow: 0;
    position: absolute;
    left: 206px;
    top: 289px;
   }
</style>

   
  <div class=\"cadre-todo\">
       
       <div class=\"todo-container\">

         <img src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/image/background.png"), "html", null, true);
        echo "\" alt=\"background\" class=\"background\">

      </div>


      <div class=\"note-cadre\">

        <form action=\"";
        // line 323
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" method=\"post\">

             ";
        // line 325
        if (array_key_exists("error", $context)) {
            // line 326
            echo "                 <p style=\"position: absolute;left: 150px; top: -121px;color: red;\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 326, $this->source); })()), "html", null, true);
            echo "</p>
              ";
        }
        // line 328
        echo "
              <div class=\"note-text-cadre-name\">
                <label for=\"name\" class=\"label-name\" style=\"position: absolute;top: -24px;left: -10px;\">
                  Nom: </label>
                <input type=\"text\" name=\"nom\" value=\"\" class=\"note-text\" required>
              </div>
              
              <div class=\"note-text-cadre-email\">
                <label for=\"email\" class=\"label-email\" style=\"position: absolute;top: -23px;left: -12px;\">
                  Email: </label>
                <input type=\"text\" name=\"email\" value=\"\" class=\"note-text\" required>
              </div>

               <div class=\"note-text-cadre-password\">
                <label for=\"password\" class=\"label-password\" style=\"position: absolute;top: -24px; left: -15px;\">
                  Mot de passe: </label>
                <input type=\"password\" name=\"password\" value=\"\" class=\"note-text\" required>
              </div>


              <div class=\"note-text-cadre-password-confirm\">
                <label for=\"password_confirm\" class=\"label-password-confirm\" style=\"position: absolute;top: -21px;left: -15px;\">
                  Confirmation de mot passe: </label>
                <input type=\"password\" name=\"password_confirm\" value=\"\" class=\"note-text\" required>
              </div>



              
               
                <button type=\"submit\" class=\"btn\">
                    Enregister
                 </button>

                 <a href=\"";
        // line 362
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"connexion\">
                      <p>Se connecter</p>
                 </a>
          </form>
      </div>

     

  </div>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 362,  423 => 328,  417 => 326,  415 => 325,  410 => 323,  400 => 316,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Note-App!{% endblock %}

{% block body %}
<style>
  
  
   .cadre-todo
   {
     position: absolute;
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
    width: 60px;
    height: 22px;
    left: 334px;
    top: 114px;

    font-family: 'Russo One', serif;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    /* identical to box height */

    color: #FFFFFF;

   }

   .date
   {
    position: absolute;
    width: 192px;
    height: 58px;
    left: 210px;
    top: 131px;
       font-family: 'Russo One', serif;
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
    top: 500px;

   }

   .note-text-cadre-name
   {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 10px 12px;
    gap: 10px;
    width: 267px;
    height: 27px;
    background: cornflowerblue;
    border-radius: 27px;
    flex: none;
    order: 0;
    align-self: stretch;
    flex-grow: 1;
    position: absolute;
    top: -78px;
    left:48px
   }
    
   .note-text-cadre-email 
   {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 10px 12px;
    gap: 10px;
    width: 267px;
    height: 27px;
    background: cornflowerblue;
    border-radius: 27px;
    flex: none;
    order: 0;
    align-self: stretch;
    flex-grow: 1;
    position: absolute;
    top: 0px;
    left:48px
   }

    .note-text-cadre-password
   {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 10px 12px;
    gap: 10px;
    width: 267px;
    height: 27px;
    background: cornflowerblue;
    border-radius: 27px;
    flex: none;
    order: 0;
    align-self: stretch;
    flex-grow: 1;
    position: absolute;
    top: 75px;
    left:48px;
   }
   .note-text-cadre-password-confirm
   {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 10px 12px;
    gap: 10px;
    width: 267px;
    height: 27px;
    background: cornflowerblue;
    border-radius: 27px;
    flex: none;
    order: 0;
    align-self: stretch;
    flex-grow: 1;
    position: absolute;
    top: 145px;
    left:48px;
   }
   .note-text 
   {
    width: 275px;
    height: 19px;
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
      width: 50px;
      height: 46px;
      border-radius: 5px;
      flex: none;
        flex-grow: 0;
      flex-grow: 0;
      order: 1;
      align-self: stretch;
      flex-grow: 0;
      position: absolute;
      left: 304px;
      top: 2px;
      background: url('https://api.iconify.design/uil/angle-down.svg') no-repeat center center / contain;
        background-color: rgba(0, 0, 0, 0);
      background-color: rgba(0, 0, 0, 0);
      -webkit-appearance: none;
      -moz-appearance: none;
      background-color: #20EEB0;
      border: 1px solid;


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
      width: 50px;
      height: 46px;
      border-radius: 5px;
      flex: none;
        flex-grow: 0;
      flex-grow: 0;
      order: 1;
      align-self: stretch;
      flex-grow: 0;
      position: absolute;
      left: 304px;
      top: 2px;
        background-color: rgba(0, 0, 0, 0);
      background-color: rgba(0, 0, 0, 0);
      -webkit-appearance: none;
      -moz-appearance: none;
      background-color: #20EEB0;
      border: 1px solid;


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
    width: 114px;
    height: 46px;
    background: #20EEB0;
    border-radius: 26px;
    flex: none;
    flex-grow: 0;
    flex-grow: 0;
    order: 1;
    align-self: stretch;
    flex-grow: 0;
    position: absolute;
    left: 141px;
    top: 222px;
    border: 1px solid;
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
   .connexion
   {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 10px;
    gap: 11px;
    isolation: isolate;
    width: 114px;
    height: 0px;
    color: darkslateblue;
    border-radius: 0px;
    flex: none;
    flex-grow: 0;
    flex-grow: 0;
    order: 1;
    align-self: stretch;
    flex-grow: 0;
    position: absolute;
    left: 206px;
    top: 289px;
   }
</style>

   
  <div class=\"cadre-todo\">
       
       <div class=\"todo-container\">

         <img src=\"{{asset('/image/background.png')}}\" alt=\"background\" class=\"background\">

      </div>


      <div class=\"note-cadre\">

        <form action=\"{{path('app_register')}}\" method=\"post\">

             {% if error is defined %}
                 <p style=\"position: absolute;left: 150px; top: -121px;color: red;\">{{error}}</p>
              {% endif %}

              <div class=\"note-text-cadre-name\">
                <label for=\"name\" class=\"label-name\" style=\"position: absolute;top: -24px;left: -10px;\">
                  Nom: </label>
                <input type=\"text\" name=\"nom\" value=\"\" class=\"note-text\" required>
              </div>
              
              <div class=\"note-text-cadre-email\">
                <label for=\"email\" class=\"label-email\" style=\"position: absolute;top: -23px;left: -12px;\">
                  Email: </label>
                <input type=\"text\" name=\"email\" value=\"\" class=\"note-text\" required>
              </div>

               <div class=\"note-text-cadre-password\">
                <label for=\"password\" class=\"label-password\" style=\"position: absolute;top: -24px; left: -15px;\">
                  Mot de passe: </label>
                <input type=\"password\" name=\"password\" value=\"\" class=\"note-text\" required>
              </div>


              <div class=\"note-text-cadre-password-confirm\">
                <label for=\"password_confirm\" class=\"label-password-confirm\" style=\"position: absolute;top: -21px;left: -15px;\">
                  Confirmation de mot passe: </label>
                <input type=\"password\" name=\"password_confirm\" value=\"\" class=\"note-text\" required>
              </div>



              
               
                <button type=\"submit\" class=\"btn\">
                    Enregister
                 </button>

                 <a href=\"{{path('app_login')}}\" class=\"connexion\">
                      <p>Se connecter</p>
                 </a>
          </form>
      </div>

     

  </div>




{% endblock %}
", "security/register.html.twig", "C:\\wamp64\\www\\Todo-list\\templates\\security\\register.html.twig");
    }
}
