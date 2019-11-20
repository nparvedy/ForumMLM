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

/* site/articles.html.twig */
class __TwigTemplate_4cb5a7a032554ed29401fea47b8b450aa08ef5b7b0afb5eb20d29d7da7fbb966 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/articles.html.twig"));

        $this->parent = $this->loadTemplate("baseA.html.twig", "site/articles.html.twig", 1);
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
        if ((isset($context["articles"]) || array_key_exists("articles", $context))) {
            // line 6
            echo "
     <p class=\"bienvenue container\"><strong>Vous avez ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["articlesNum"]) || array_key_exists("articlesNum", $context) ? $context["articlesNum"] : (function () { throw new RuntimeError('Variable "articlesNum" does not exist.', 7, $this->source); })()), "html", null, true);
            echo " articles </strong></p>
     <!-- alert message-->
        ";
            // line 9
            if ( !twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 9, $this->source); })()))) {
                // line 10
                echo "            <div class=\"alert alert-dismissible alert-danger message container\" >
                ";
                // line 11
                echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 11, $this->source); })()), "html", null, true);
                echo "          
            </div>
        ";
            }
            // line 13
            echo "     
    <div class=\"users container-fluid row\" >
       <div class=\"col-xs-12 col-sm-4 col-md-3 statistiques\">
            <div class=\"card text-white bg-info mb-3\" style=\"max-width: 20rem;\">
                    <div class=\"card-header \">Chercher un article</div>
                    <div class=\"card-body\">
                                <form class=\"form-inline my-1 my-lg-0\" method=\"POST\">
                                    <input class=\"form-control mr-sm-2 col-12\" type=\"text\" name=\"articlename\" required placeholder=\"Search\"> 
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
                                <th scope=\"col\" >Titre</th>
                                <th scope=\"col\" >Auteur</th>
                                <th scope=\"col\" >Catégorie</th>
                                <th scope=\"col\" >Date de création</th>                
                                <th scope=\"col\" >Opération</th>
                                </tr>
                            </thead>
                            <tbody >
                            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 44
                echo "                                <tr class=\"table-secondary \">
                                    
                                    <th scope=\"row\">";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 46), "html", null, true);
                echo "</th>
                                    <td >";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "user", [], "any", false, false, false, 47), "username", [], "any", false, false, false, 47), "html", null, true);
                echo " </td>
                                    <td >";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "subsection", [], "any", false, false, false, 48), "section", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                                    <td >";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 49), "d/m/Y"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 49), "H:i"), "html", null, true);
                echo "</td>
                                    
                                    <td >
                                    <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showArticle", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger \">Voir et Gérer</a>
                                    
                                    </td>
                                    
                                </tr> 
                            
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "              
                            </tbody>
                        </table>  
                    </div>
                
                </div>  
       </div>    
     
    </div>    
";
        }
        // line 68
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 68,  185 => 58,  172 => 52,  164 => 49,  160 => 48,  156 => 47,  152 => 46,  148 => 44,  144 => 43,  112 => 13,  106 => 11,  103 => 10,  101 => 9,  96 => 7,  93 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseA.html.twig' %}
{% block title %} Administration{% endblock %}
{% block body %}
   
{% if articles is defined %}

     <p class=\"bienvenue container\"><strong>Vous avez {{ articlesNum }} articles </strong></p>
     <!-- alert message-->
        {% if message is not empty  %}
            <div class=\"alert alert-dismissible alert-danger message container\" >
                {{ message }}          
            </div>
        {% endif %}     
    <div class=\"users container-fluid row\" >
       <div class=\"col-xs-12 col-sm-4 col-md-3 statistiques\">
            <div class=\"card text-white bg-info mb-3\" style=\"max-width: 20rem;\">
                    <div class=\"card-header \">Chercher un article</div>
                    <div class=\"card-body\">
                                <form class=\"form-inline my-1 my-lg-0\" method=\"POST\">
                                    <input class=\"form-control mr-sm-2 col-12\" type=\"text\" name=\"articlename\" required placeholder=\"Search\"> 
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
                                <th scope=\"col\" >Titre</th>
                                <th scope=\"col\" >Auteur</th>
                                <th scope=\"col\" >Catégorie</th>
                                <th scope=\"col\" >Date de création</th>                
                                <th scope=\"col\" >Opération</th>
                                </tr>
                            </thead>
                            <tbody >
                            {% for article in articles %}
                                <tr class=\"table-secondary \">
                                    
                                    <th scope=\"row\">{{article.name}}</th>
                                    <td >{{article.user.username }} </td>
                                    <td >{{article.subsection.section.name }}</td>
                                    <td >{{article.createdAt | date('d/m/Y')}} à {{article.createdAt | date('H:i')}}</td>
                                    
                                    <td >
                                    <a href=\"{{path('showArticle',{id:article.id})}}\" class=\"btn btn-sm btn-danger \">Voir et Gérer</a>
                                    
                                    </td>
                                    
                                </tr> 
                            
                            {% endfor %}              
                            </tbody>
                        </table>  
                    </div>
                
                </div>  
       </div>    
     
    </div>    
{% endif %}


{% endblock %}


", "site/articles.html.twig", "C:\\Users\\utilisateur\\Desktop\\ForumDemo\\ForumDemo\\templates\\site\\articles.html.twig");
    }
}
