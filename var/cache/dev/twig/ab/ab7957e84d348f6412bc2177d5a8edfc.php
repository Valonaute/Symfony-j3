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

/* address.html.twig */
class __TwigTemplate_a1b0d878b00cb383202e0a64696661fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "address.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "address.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "address.html.twig", 1);
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
        echo "<p>Vous êtes sur la page des address </p>

<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">ID</th>
      <th scope=\"col\">Adresse 1</th>
      <th scope=\"col\">Adresse 2</th>
      <th scope=\"col\">Code postal</th>
      <th scope=\"col\">Ville</th>
      <th scope=\"col\">Actions</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["oneaddress"]) {
            // line 19
            echo "    <tr>
      <th scope=\"row\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oneaddress"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</th>
      <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oneaddress"], "address1", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oneaddress"], "address2", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oneaddress"], "zipcode", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oneaddress"], "city", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
      <td><a class=\"btn btn-warning m-1\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateaddress", ["id" => twig_get_attribute($this->env, $this->source, $context["oneaddress"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">modifier l'adresse</a>
          <a class=\"btn btn-danger  m-1\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteaddress", ["id" => twig_get_attribute($this->env, $this->source, $context["oneaddress"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">supprimer l'adresse</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oneaddress'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</tbody>
</table>

<a class=\"btn btn-primary\" href=\" ";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createaddress");
        echo " \">Ajouter une nouvelle adresse </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 32,  124 => 29,  115 => 26,  111 => 25,  107 => 24,  103 => 23,  99 => 22,  95 => 21,  91 => 20,  88 => 19,  84 => 18,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{%  block content %}
<p>Vous êtes sur la page des address </p>

<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">ID</th>
      <th scope=\"col\">Adresse 1</th>
      <th scope=\"col\">Adresse 2</th>
      <th scope=\"col\">Code postal</th>
      <th scope=\"col\">Ville</th>
      <th scope=\"col\">Actions</th>
    </tr>
  </thead>
  <tbody>
    {% for oneaddress in address %}
    <tr>
      <th scope=\"row\">{{oneaddress.id}}</th>
      <td>{{oneaddress.address1}}</td>
      <td>{{oneaddress.address2}}</td>
      <td>{{oneaddress.zipcode}}</td>
      <td>{{oneaddress.city}}</td>
      <td><a class=\"btn btn-warning m-1\" href=\"{{ path ('updateaddress', {id: oneaddress.id})}}\">modifier l'adresse</a>
          <a class=\"btn btn-danger  m-1\" href=\"{{ path ('deleteaddress', {id: oneaddress.id})}}\">supprimer l'adresse</a></td>
    </tr>
    {% endfor %}
</tbody>
</table>

<a class=\"btn btn-primary\" href=\" {{ path('createaddress')}} \">Ajouter une nouvelle adresse </a>
{% endblock %}", "address.html.twig", "C:\\wamp\\www\\symfony\\Symfony-J3\\templates\\address.html.twig");
    }
}
