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

/* site/users.html.twig */
class __TwigTemplate_d52f6dc4d2d5d97a5417d4fa759ff69edeceb85c3085d07a3f2fe171fdbf4330 extends \Twig\Template
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
        return "baseA.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/users.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/users.html.twig"));

        $this->parent = $this->loadTemplate("baseA.html.twig", "site/users.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Administration";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   
";
        // line 5
        if ((isset($context["users"]) || array_key_exists("users", $context))) {
            // line 6
            echo "     <p class=\"bienvenue container\"><strong>Vous avez ";
            echo twig_escape_filter($this->env, (isset($context["usersNum"]) || array_key_exists("usersNum", $context) ? $context["usersNum"] : (function () { throw new RuntimeError('Variable "usersNum" does not exist.', 6, $this->source); })()), "html", null, true);
            echo " utilisateurs </strong></p>
          <!-- alert message-->
        ";
            // line 8
            if ( !twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 8, $this->source); })()))) {
                // line 9
                echo "            <div class=\"alert alert-dismissible alert-danger message container\" >
                ";
                // line 10
                echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 10, $this->source); })()), "html", null, true);
                echo "          
            </div>
        ";
            }
            // line 12
            echo "  
    <div class=\"users container-fluid row\" >
       <div class=\"col-xs-12 col-sm-4 col-md-3 statistiques\">
            <div class=\"card text-white bg-info mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header \">Chercher un utilisateur</div>
                <div class=\"card-body\">
                            <form class=\"form-inline my-1 my-lg-0\" method=\"POST\">
                                <input class=\"form-control mr-sm-2 col-12\" type=\"text\" name=\"username\" required placeholder=\"Search\"> 
                                <div class=\"col-12 chercher\">                               
                                    <button class=\"btn btn-danger my-2 my-sm-0\" type=\"submit\" name=\"search\">Chercher</button>
                                </div>
                            </form>
                </div>
            </div>  
            <div class=\"card text-white bg-success mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header\">Ajouter un utilisateur</div>
                <div class=\"card-body\">
                    <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addUserA");
            echo "\"> <img src=\"/imagesAdmin/addUserA.png\" style=\"width:75px; height:75px;\" title=\"Ajouter un utilisateur\"></a>
                </div>
            </div>                          
       </div>

       <div class=\"col-xs-12 col-sm-8 col-md-9\">
          <div class=\"table-responsive-sm\">
          <table class=\"table table-hover \">
            <thead>
                <tr class=\" table-active\">
                <th scope=\"col\" >Pseudo</th>
                <th scope=\"col\" >Date d'inscription</th>
                <th scope=\"col\" >Mail</th>
                <th scope=\"col\" >Téléphone</th>
                <th scope=\"col\" >Opération</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 48
                echo "                <tr class=\"table-secondary\">
                    <th scope=\"row\">";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 49), "html", null, true);
                echo "</th>
                    <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 50), "d/m/Y"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 50), "H:i"), "html", null, true);
                echo "</td>
                    <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
                    <td>0";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
                    <td>
                       ";
                // line 55
                echo "                       ";
                if ((twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 55) == (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 55, $this->source); })()))) {
                    // line 56
                    echo "                       <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
                    echo "\"class=\"btn btn-sm btn-danger margin0\">Votre Profil</a>
                       ";
                } else {
                    // line 58
                    echo "                       <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showUser", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                    echo "\"class=\"btn btn-sm btn-danger margin0\">Voir et Gérer</a>
                       ";
                }
                // line 60
                echo "                    </td>
                </tr>  
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "              
            </tbody>
        </table>
        </div>    
       </div>    
     
    </div>    
";
        }
        // line 70
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 70,  199 => 62,  191 => 60,  185 => 58,  179 => 56,  176 => 55,  171 => 52,  167 => 51,  161 => 50,  157 => 49,  154 => 48,  150 => 47,  129 => 29,  110 => 12,  104 => 10,  101 => 9,  99 => 8,  93 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseA.html.twig' %}
{% block title %} Administration{% endblock %}
{% block body %}
   
{% if users is defined %}
     <p class=\"bienvenue container\"><strong>Vous avez {{ usersNum }} utilisateurs </strong></p>
          <!-- alert message-->
        {% if message is not empty %}
            <div class=\"alert alert-dismissible alert-danger message container\" >
                {{ message }}          
            </div>
        {% endif %}  
    <div class=\"users container-fluid row\" >
       <div class=\"col-xs-12 col-sm-4 col-md-3 statistiques\">
            <div class=\"card text-white bg-info mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header \">Chercher un utilisateur</div>
                <div class=\"card-body\">
                            <form class=\"form-inline my-1 my-lg-0\" method=\"POST\">
                                <input class=\"form-control mr-sm-2 col-12\" type=\"text\" name=\"username\" required placeholder=\"Search\"> 
                                <div class=\"col-12 chercher\">                               
                                    <button class=\"btn btn-danger my-2 my-sm-0\" type=\"submit\" name=\"search\">Chercher</button>
                                </div>
                            </form>
                </div>
            </div>  
            <div class=\"card text-white bg-success mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header\">Ajouter un utilisateur</div>
                <div class=\"card-body\">
                    <a href=\"{{path('addUserA')}}\"> <img src=\"/imagesAdmin/addUserA.png\" style=\"width:75px; height:75px;\" title=\"Ajouter un utilisateur\"></a>
                </div>
            </div>                          
       </div>

       <div class=\"col-xs-12 col-sm-8 col-md-9\">
          <div class=\"table-responsive-sm\">
          <table class=\"table table-hover \">
            <thead>
                <tr class=\" table-active\">
                <th scope=\"col\" >Pseudo</th>
                <th scope=\"col\" >Date d'inscription</th>
                <th scope=\"col\" >Mail</th>
                <th scope=\"col\" >Téléphone</th>
                <th scope=\"col\" >Opération</th>
                </tr>
            </thead>
            <tbody>
            {% for user in users %}
                <tr class=\"table-secondary\">
                    <th scope=\"row\">{{user.username}}</th>
                    <td>{{user.createdAt | date('d/m/Y')}} à {{user.createdAt | date('H:i')}}</td>
                    <td>{{user.email}}</td>
                    <td>0{{user.phone}}</td>
                    <td>
                       {# <a href=\"#\" class=\"btn btn-sm btn-info \">Voir</a> #}
                       {% if user.username == username %}
                       <a href=\"{{path('profil')}}\"class=\"btn btn-sm btn-danger margin0\">Votre Profil</a>
                       {% else %}
                       <a href=\"{{path('showUser',{'id': user.id })}}\"class=\"btn btn-sm btn-danger margin0\">Voir et Gérer</a>
                       {% endif %}
                    </td>
                </tr>  
            {% endfor %}              
            </tbody>
        </table>
        </div>    
       </div>    
     
    </div>    
{% endif %}


{% endblock %}


", "site/users.html.twig", "C:\\Users\\utilisateur\\Desktop\\ForumDemo\\ForumDemo\\templates\\site\\users.html.twig");
    }
}
