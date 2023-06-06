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

/* base.html.twig */
class __TwigTemplate_c62c3bdb6ed60f2d5d03616fcf972ac5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "        
        <div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
            <h5 class=\"my-0 mr-md-auto font-weight-normal\">Company name</h5>
            <nav class=\"my-2 my-md-0 mr-md-3\">
              <a class=\"btn btn-primary m-1\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("address");
        echo "\">Adresses</a>
              <a class=\"btn btn-primary m-1\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customers");
        echo "\">Clients</a>
            </nav>
            <a class=\"btn btn-outline-primary m-1\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createaddress");
        echo "\">Créer une adresse</a>
            <a class=\"btn btn-outline-primary m-1\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createcustomer");
        echo "\">Créer un client</a>
        </div>
          
        <div class=\"container\">
        ";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "        </div>
          
        <footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
            <div class=\"row\">
            <div class=\"col-12 col-md\">
                <img class=\"mb-2\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/vision.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"200\">
                <small class=\"d-block mb-3 text-muted\">&copy; 2017-2022</small>
            </div>
            <div class=\"col-6 col-md\">
                <h5>Features</h5>
                <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Cool stuff</a></li>
                <li><a class=\"text-muted\" href=\"#\">Random feature</a></li>
                <li><a class=\"text-muted\" href=\"#\">Team feature</a></li>
                <li><a class=\"text-muted\" href=\"#\">Stuff for developers</a></li>
                <li><a class=\"text-muted\" href=\"#\">Another one</a></li>
                <li><a class=\"text-muted\" href=\"#\">Last time</a></li>
                </ul>
            </div>
            <div class=\"col-6 col-md\">
                <h5>Resources</h5>
                <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Resource</a></li>
                <li><a class=\"text-muted\" href=\"#\">Resource name</a></li>
                <li><a class=\"text-muted\" href=\"#\">Another resource</a></li>
                <li><a class=\"text-muted\" href=\"#\">Final resource</a></li>
                </ul>
            </div>
            <div class=\"col-6 col-md\">
                <h5>About</h5>
                <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Team</a></li>
                <li><a class=\"text-muted\" href=\"#\">Locations</a></li>
                <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
                <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
                </ul>
            </div>
            </div>
        </footer>
          

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "    
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            echo "
        <div class=\"alert alert-success\">
        ";
            // line 35
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  276 => 39,  266 => 35,  262 => 33,  258 => 32,  255 => 31,  245 => 30,  198 => 46,  191 => 41,  189 => 30,  182 => 26,  178 => 25,  173 => 23,  169 => 22,  163 => 18,  153 => 17,  140 => 13,  130 => 12,  118 => 9,  113 => 8,  103 => 7,  84 => 5,  72 => 83,  70 => 17,  66 => 15,  64 => 12,  61 => 11,  59 => 7,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css')}}\">
        {% endblock %}

        {% block javascripts %}
        <script src=\"{{ asset('assets/js/bootstrap.js')}}\"></script>
        {% endblock %}
    </head>
    <body>
        {% block body %}
        
        <div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
            <h5 class=\"my-0 mr-md-auto font-weight-normal\">Company name</h5>
            <nav class=\"my-2 my-md-0 mr-md-3\">
              <a class=\"btn btn-primary m-1\" href=\"{{ path ('address')}}\">Adresses</a>
              <a class=\"btn btn-primary m-1\" href=\"{{ path ('customers')}}\">Clients</a>
            </nav>
            <a class=\"btn btn-outline-primary m-1\" href=\"{{ path('createaddress')}}\">Créer une adresse</a>
            <a class=\"btn btn-outline-primary m-1\" href=\"{{ path ('createcustomer')}}\">Créer un client</a>
        </div>
          
        <div class=\"container\">
        {% block content %}
    
        {% for message in app.flashes('success') %}

        <div class=\"alert alert-success\">
        {{ message }}
        </div>

        {% endfor %}
        
        {% endblock content %}
        </div>
          
        <footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
            <div class=\"row\">
            <div class=\"col-12 col-md\">
                <img class=\"mb-2\" src=\"{{ asset ('assets/img/vision.jpg')}}\" alt=\"\" width=\"200\">
                <small class=\"d-block mb-3 text-muted\">&copy; 2017-2022</small>
            </div>
            <div class=\"col-6 col-md\">
                <h5>Features</h5>
                <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Cool stuff</a></li>
                <li><a class=\"text-muted\" href=\"#\">Random feature</a></li>
                <li><a class=\"text-muted\" href=\"#\">Team feature</a></li>
                <li><a class=\"text-muted\" href=\"#\">Stuff for developers</a></li>
                <li><a class=\"text-muted\" href=\"#\">Another one</a></li>
                <li><a class=\"text-muted\" href=\"#\">Last time</a></li>
                </ul>
            </div>
            <div class=\"col-6 col-md\">
                <h5>Resources</h5>
                <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Resource</a></li>
                <li><a class=\"text-muted\" href=\"#\">Resource name</a></li>
                <li><a class=\"text-muted\" href=\"#\">Another resource</a></li>
                <li><a class=\"text-muted\" href=\"#\">Final resource</a></li>
                </ul>
            </div>
            <div class=\"col-6 col-md\">
                <h5>About</h5>
                <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Team</a></li>
                <li><a class=\"text-muted\" href=\"#\">Locations</a></li>
                <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
                <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
                </ul>
            </div>
            </div>
        </footer>
          

        {% endblock body %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\symfony\\Symfony-J3\\templates\\base.html.twig");
    }
}
