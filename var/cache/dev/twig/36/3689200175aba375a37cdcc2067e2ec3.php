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

/* customers.html.twig */
class __TwigTemplate_50fcc2fe56031a79205b7dde3b8d8ba0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customers.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "customers.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<p>Vous êtes sur la page des clients </p>

<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">ID</th>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Prénom</th>
      <th scope=\"col\">Email</th>
      <th scope=\"col\">Actions</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new RuntimeError('Variable "customers" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["onecustomer"]) {
            // line 18
            echo "    <tr>
      <th scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onecustomer"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "</th>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onecustomer"], "lastname", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
      <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onecustomer"], "firstname", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onecustomer"], "email", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
      <td><a class=\"btn btn-warning m-1\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatecustomer", ["id" => twig_get_attribute($this->env, $this->source, $context["onecustomer"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">modifier le client</a>
          <a class=\"btn btn-danger  m-1\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletecustomer", ["id" => twig_get_attribute($this->env, $this->source, $context["onecustomer"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">supprimer le client</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['onecustomer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</tbody>
</table>

<a class=\"btn btn-primary\" href=\" ";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createcustomer");
        echo " \">Ajouter un nouveau client </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "customers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 30,  119 => 27,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  94 => 20,  90 => 19,  87 => 18,  83 => 17,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{%  block content %}
<p>Vous êtes sur la page des clients </p>

<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">ID</th>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Prénom</th>
      <th scope=\"col\">Email</th>
      <th scope=\"col\">Actions</th>
    </tr>
  </thead>
  <tbody>
    {% for onecustomer in customers %}
    <tr>
      <th scope=\"row\">{{onecustomer.id}}</th>
      <td>{{onecustomer.lastname}}</td>
      <td>{{onecustomer.firstname}}</td>
      <td>{{onecustomer.email}}</td>
      <td><a class=\"btn btn-warning m-1\" href=\"{{ path ('updatecustomer', {id: onecustomer.id})}}\">modifier le client</a>
          <a class=\"btn btn-danger  m-1\" href=\"{{ path ('deletecustomer', {id: onecustomer.id})}}\">supprimer le client</a></td>
    </tr>
    {% endfor %}
</tbody>
</table>

<a class=\"btn btn-primary\" href=\" {{ path('createcustomer')}} \">Ajouter un nouveau client </a>
{% endblock %}", "customers.html.twig", "C:\\wamp\\www\\symfony\\Symfony-J3\\templates\\customers.html.twig");
    }
}
