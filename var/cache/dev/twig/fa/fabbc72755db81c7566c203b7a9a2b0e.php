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

/* /components/header.html.twig */
class __TwigTemplate_939365c870d56cbd989f3cd68bf89cc0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/components/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/components/header.html.twig"));

        // line 1
        echo " <div class=\"todo-container\">

       <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/image/img.png"), "html", null, true);
        echo "\" alt=\"background\" class=\"background\">

       <span class=\"day\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["jourDate"]) || array_key_exists("jourDate", $context) ? $context["jourDate"] : (function () { throw new RuntimeError('Variable "jourDate" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</span>

       <span class=\"date\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["heure"]) || array_key_exists("heure", $context) ? $context["heure"] : (function () { throw new RuntimeError('Variable "heure" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</span>

      </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "/components/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <div class=\"todo-container\">

       <img src=\"{{asset('/image/img.png')}}\" alt=\"background\" class=\"background\">

       <span class=\"day\">{{jourDate}}</span>

       <span class=\"date\">{{heure}}</span>

      </div>
", "/components/header.html.twig", "C:\\wamp64\\www\\Todo-list\\templates\\components\\header.html.twig");
    }
}
