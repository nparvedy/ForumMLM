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

/* site/showUser.html.twig */
class __TwigTemplate_8c0e831dead5f1475942fe8262e3217edd84f1400423371dafa67805095ceb62 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/showUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/showUser.html.twig"));

        $this->parent = $this->loadTemplate("baseA.html.twig", "site/showUser.html.twig", 1);
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
        if ((isset($context["user"]) || array_key_exists("user", $context))) {
            // line 6
            echo "        <div class=\"retour\">
            <a href=\"";
            // line 7
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
            echo "\" class=\"btn btn-sm btn-warning\">Retour aux utilisateurs</a> 
        </div>
        <div class=\"container profil\"> 
            <div class=\"row\" >
             <div class=\"col-xs-12 col-sm-4 col-md-3 \">
                <div class=\"col-12\">
                 <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "avatar", [], "any", false, false, false, 13), "html", null, true);
            echo "\"> 
                </div> 
                <div class=\"col-12\">
                 ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "admin", [], "any", false, false, false, 16) == 1)) {
                // line 17
                echo "                 <label ><strong>Admin:</strong> oui</label>                 
                 ";
            } else {
                // line 19
                echo "                 <label ><strong>Admin:</strong> No</label>  
                 ";
            }
            // line 21
            echo "                </div>                
                <div class=\"col-12\">
                 <label ><strong>Date de création:</strong> ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "createdAt", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "createdAt", [], "any", false, false, false, 23), "H:i"), "html", null, true);
            echo "</label>
                </div>
             </div>
             <div class=\"col-xs-12 col-sm-8 col-md-9 infoProfil \">
               <div class=\"row lineProfil\">
                    <div class=\"col-xs-12 col-md-4\">
                        <label ><strong>Pseudo: </strong> ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "username", [], "any", false, false, false, 29), "html", null, true);
            echo "</label>
                    </div>
                    <div class=\"col-xs-12 col-md-4\">
                        <label ><strong>Prénom: </strong> ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "firstname", [], "any", false, false, false, 32), "html", null, true);
            echo "</label>
                    </div>
                    <div class=\"col-xs-12 col-md-4\">
                        <label ><strong>Nom: </strong> ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "lastname", [], "any", false, false, false, 35), "html", null, true);
            echo "</label>
                    </div>
                </div>
                <div class=\"row lineProfil\">
                    <div class=\"col-xs-12 col-md-6\">
                        <label ><strong>Mail: </strong> ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), "html", null, true);
            echo "</label>
                    </div>
                    <div class=\"col-xs-12 col-md-6\">
                        <label ><strong>Téléphone: </strong> 0";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "phone", [], "any", false, false, false, 43), "html", null, true);
            echo "</label>
                    </div>
  
                </div>    
                <div class=\"row lineProfil\">
                    <div class=\"col-xs-12 col-md-6\">
                        <label ><strong>Adresse: </strong> ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "address", [], "any", false, false, false, 49), "html", null, true);
            echo "</label>
                    </div>
                    <div class=\"col-xs-12 col-md-6\">
                        <label ><strong>Arrondissement: </strong> ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "zipcode", [], "any", false, false, false, 52), "html", null, true);
            echo "</label>
                    </div> 
                </div>  
                <div class=\"row lineProfil\">
                    <div class=\"col-xs-12 col-md-4\">
                       ";
            // line 57
            if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "candidat", [], "any", false, false, false, 57) == 1)) {
                // line 58
                echo "                        <label ><strong>Candidat: </strong>oui</label>
                       ";
            } else {
                // line 59
                echo " 
                        <label ><strong>Candidat: </strong>no</label>
                       ";
            }
            // line 61
            echo " 
                    </div>
                    <div class=\"col-xs-12 col-md-4\">
                        <label ><strong>Date de naissance: </strong> ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "birthday", [], "any", false, false, false, 64), "html", null, true);
            echo "</label>
                    </div> 
                    <div class=\"col-xs-12 col-md-4\">
                        <label ><strong>Sexe: </strong> ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "sex", [], "any", false, false, false, 67), "html", null, true);
            echo "</label>
                    </div>
                </div>                             
             </div>
           </div>
        </div>
        <div class=\"container \">
          <div class=\"row\">
            <div class=\"col-xs-12 col-md-6\">
                
            </div>        
            <div class=\"col-xs-12 col-md-2\">
                <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteUserA", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\"><img src=\"/imagesAdmin/trashA.jpg\" class=\"trash\" title=\"Supprimer cet utilisateur\"></a>
            </div>

         </div>              
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/showUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 79,  207 => 67,  201 => 64,  196 => 61,  191 => 59,  187 => 58,  185 => 57,  177 => 52,  171 => 49,  162 => 43,  156 => 40,  148 => 35,  142 => 32,  136 => 29,  125 => 23,  121 => 21,  117 => 19,  113 => 17,  111 => 16,  105 => 13,  96 => 7,  93 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseA.html.twig' %}
{% block title %} Administration{% endblock %}
{% block body %}
   
    {% if user is defined %}
        <div class=\"retour\">
            <a href=\"{{path('users')}}\" class=\"btn btn-sm btn-warning\">Retour aux utilisateurs</a> 
        </div>
        <div class=\"container profil\"> 
            <div class=\"row\" >
             <div class=\"col-xs-12 col-sm-4 col-md-3 \">
                <div class=\"col-12\">
                 <img src=\"{{user.avatar}}\"> 
                </div> 
                <div class=\"col-12\">
                 {% if user.admin == 1 %}
                 <label ><strong>Admin:</strong> oui</label>                 
                 {% else %}
                 <label ><strong>Admin:</strong> No</label>  
                 {% endif %}
                </div>                
                <div class=\"col-12\">
                 <label ><strong>Date de création:</strong> {{user.createdAt | date('d/m/Y')}} à {{user.createdAt | date('H:i')}}</label>
                </div>
             </div>
             <div class=\"col-xs-12 col-sm-8 col-md-9 infoProfil \">
               <div class=\"row lineProfil\">
                    <div class=\"col-xs-12 col-md-4\">
                        <label ><strong>Pseudo: </strong> {{user.username }}</label>
                    </div>
                    <div class=\"col-xs-12 col-md-4\">
                        <label ><strong>Prénom: </strong> {{user.firstname }}</label>
                    </div>
                    <div class=\"col-xs-12 col-md-4\">
                        <label ><strong>Nom: </strong> {{user.lastname }}</label>
                    </div>
                </div>
                <div class=\"row lineProfil\">
                    <div class=\"col-xs-12 col-md-6\">
                        <label ><strong>Mail: </strong> {{user.email }}</label>
                    </div>
                    <div class=\"col-xs-12 col-md-6\">
                        <label ><strong>Téléphone: </strong> 0{{user.phone}}</label>
                    </div>
  
                </div>    
                <div class=\"row lineProfil\">
                    <div class=\"col-xs-12 col-md-6\">
                        <label ><strong>Adresse: </strong> {{user.address }}</label>
                    </div>
                    <div class=\"col-xs-12 col-md-6\">
                        <label ><strong>Arrondissement: </strong> {{user.zipcode}}</label>
                    </div> 
                </div>  
                <div class=\"row lineProfil\">
                    <div class=\"col-xs-12 col-md-4\">
                       {% if user.candidat ==1%}
                        <label ><strong>Candidat: </strong>oui</label>
                       {% else %} 
                        <label ><strong>Candidat: </strong>no</label>
                       {% endif %} 
                    </div>
                    <div class=\"col-xs-12 col-md-4\">
                        <label ><strong>Date de naissance: </strong> {{user.birthday}}</label>
                    </div> 
                    <div class=\"col-xs-12 col-md-4\">
                        <label ><strong>Sexe: </strong> {{user.sex }}</label>
                    </div>
                </div>                             
             </div>
           </div>
        </div>
        <div class=\"container \">
          <div class=\"row\">
            <div class=\"col-xs-12 col-md-6\">
                
            </div>        
            <div class=\"col-xs-12 col-md-2\">
                <a href=\"{{ path('deleteUserA',{id:user.id})}}\"><img src=\"/imagesAdmin/trashA.jpg\" class=\"trash\" title=\"Supprimer cet utilisateur\"></a>
            </div>

         </div>              
        </div>
    {% endif %}
{% endblock %}", "site/showUser.html.twig", "C:\\Users\\utilisateur\\Desktop\\ForumDemo\\ForumDemo\\templates\\site\\showUser.html.twig");
    }
}
