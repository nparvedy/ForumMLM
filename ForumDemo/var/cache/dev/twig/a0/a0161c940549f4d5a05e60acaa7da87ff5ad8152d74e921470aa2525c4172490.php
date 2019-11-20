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

/* site/searchUser.html.twig */
class __TwigTemplate_017980716be95c458ffc36212cd72c90adb819822cd48d66b268cb7e2beb0c46 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/searchUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/searchUser.html.twig"));

        $this->parent = $this->loadTemplate("baseA.html.twig", "site/searchUser.html.twig", 1);
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
        echo "   ";
        if (((isset($context["searchNum"]) || array_key_exists("searchNum", $context) ? $context["searchNum"] : (function () { throw new RuntimeError('Variable "searchNum" does not exist.', 4, $this->source); })()) > 0)) {
            // line 5
            echo "   <div class=\"retour\">
        <a href=\"";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
            echo "\" class=\"btn btn-sm btn-warning\">Retour aux utilisateurs</a> 
   </div>
   <p class=\"bienvenue container\"><strong>Vous avez ";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["searchNum"]) || array_key_exists("searchNum", $context) ? $context["searchNum"] : (function () { throw new RuntimeError('Variable "searchNum" does not exist.', 8, $this->source); })()), "html", null, true);
            echo " résultats </strong></p>

    
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
                         
       </div>

       <div class=\"col-xs-12 col-sm-8 col-md-9\">
          <div class=\"table-responsive-sm\">
          <table class=\"table table-hover\">
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
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 41
                echo "                <tr class=\"table-secondary\">
                    <th scope=\"row\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 42), "html", null, true);
                echo "</th>
                    <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 43), "d/m/Y"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 43), "H:i"), "html", null, true);
                echo "</td>
                    <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                    <td>0";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
                    <td>
                      ";
                // line 48
                echo "                       ";
                if ((twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 48) == (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 48, $this->source); })()))) {
                    // line 49
                    echo "                       <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
                    echo "\"class=\"btn btn-sm btn-danger margin0\">Votre Profil</a>
                       ";
                } else {
                    // line 51
                    echo "                       <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showUser", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                    echo "\"class=\"btn btn-sm btn-danger margin0\">Voir et Gérer</a>
                       ";
                }
                // line 53
                echo "                    </td>
                </tr>  
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "              
            </tbody>
        </table>
        </div>    
       </div>    
     
    </div>    
    ";
        } else {
            // line 63
            echo "        <div class=\"retour\">
                <a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
            echo "\" class=\"btn btn-sm btn-warning\"> Retour aux utilisateurs</a> 
        </div>
        <p class=\"bienvenue container aucun\"><strong>Aucun Résultat, lancer une autre recherche. </strong></p>
               <div class=\"users container-fluid row\" >
            <div class=\"col-xs-12 col-sm-4 col-md-5 \"></div>
            <div class=\"col-xs-12 col-sm-4 col-md-4 statistiques textCenter\">
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
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-3 \"></div>
        </div>   
    ";
        }
        // line 85
        echo "  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/searchUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 85,  196 => 64,  193 => 63,  183 => 55,  175 => 53,  169 => 51,  163 => 49,  160 => 48,  155 => 45,  151 => 44,  145 => 43,  141 => 42,  138 => 41,  134 => 40,  99 => 8,  94 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseA.html.twig' %}
{% block title %} Administration{% endblock %}
{% block body %}
   {%if searchNum >0 %}
   <div class=\"retour\">
        <a href=\"{{path('users')}}\" class=\"btn btn-sm btn-warning\">Retour aux utilisateurs</a> 
   </div>
   <p class=\"bienvenue container\"><strong>Vous avez {{ searchNum }} résultats </strong></p>

    
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
                         
       </div>

       <div class=\"col-xs-12 col-sm-8 col-md-9\">
          <div class=\"table-responsive-sm\">
          <table class=\"table table-hover\">
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
    {% else %}
        <div class=\"retour\">
                <a href=\"{{path('users')}}\" class=\"btn btn-sm btn-warning\"> Retour aux utilisateurs</a> 
        </div>
        <p class=\"bienvenue container aucun\"><strong>Aucun Résultat, lancer une autre recherche. </strong></p>
               <div class=\"users container-fluid row\" >
            <div class=\"col-xs-12 col-sm-4 col-md-5 \"></div>
            <div class=\"col-xs-12 col-sm-4 col-md-4 statistiques textCenter\">
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
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-3 \"></div>
        </div>   
    {% endif %}
  
{% endblock %}


", "site/searchUser.html.twig", "C:\\Users\\utilisateur\\Desktop\\BonVersion\\ForumDemo\\templates\\site\\searchUser.html.twig");
    }
}
