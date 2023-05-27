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

/* components/flash-message.html.twig */
class __TwigTemplate_47cdac898842ead2fe4e70a50e0abbf5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/flash-message.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/flash-message.html.twig"));

        // line 1
        echo "<style>
  
    .flash
    {
    position: absolute;
    width: 900px;
    height: 116px;
    left: 300px;
    top: 10px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 300;
    font-size: 36px;
    line-height: 116px;
    color: red;
    }

</style>

";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
            // line 21
            echo "
      ";
            // line 22
            if ($context["notice"]) {
                // line 23
                echo "        <div x-data=\"{show:true}\" x-init=\"setTimeout(()=>show=false, 6000)\"x-show=\"show\" class=\"flash\"> 
       <p>
        ";
                // line 25
                echo twig_escape_filter($this->env, $context["notice"], "html", null, true);
                echo "
       </p>
  </div>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/flash-message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  73 => 23,  71 => 22,  68 => 21,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
  
    .flash
    {
    position: absolute;
    width: 900px;
    height: 116px;
    left: 300px;
    top: 10px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 300;
    font-size: 36px;
    line-height: 116px;
    color: red;
    }

</style>

{% for notice in app.flashes('notice') %}

      {% if notice  %}
        <div x-data=\"{show:true}\" x-init=\"setTimeout(()=>show=false, 6000)\"x-show=\"show\" class=\"flash\"> 
       <p>
        {{ notice }}
       </p>
  </div>
      {% endif %}
{% endfor %}", "components/flash-message.html.twig", "C:\\wamp64\\www\\Todo-list\\templates\\components\\flash-message.html.twig");
    }
}
