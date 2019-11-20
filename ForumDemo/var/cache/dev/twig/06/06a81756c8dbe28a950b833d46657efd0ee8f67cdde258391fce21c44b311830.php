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

/* site/showArticle.html.twig */
class __TwigTemplate_3a308421078c9580187a352c07be5fc2acb91a2d76b4b2b0599d16b19c99b50f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/showArticle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/showArticle.html.twig"));

        $this->parent = $this->loadTemplate("baseA.html.twig", "site/showArticle.html.twig", 1);
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
        echo "    ";
        if ((isset($context["article"]) || array_key_exists("article", $context))) {
            // line 5
            echo "        <div class=\"retour\">
            <a href=\"";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
            echo "\" class=\"btn btn-sm btn-warning\">Retour aux articles</a> 
        </div>
        ";
            // line 8
            if ((isset($context["message"]) || array_key_exists("message", $context))) {
                // line 9
                echo "            <div class=\"alert alert-dismissible alert-danger message container\" >
                ";
                // line 10
                echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 10, $this->source); })()), "html", null, true);
                echo "          
            </div>
        ";
            }
            // line 13
            echo "        <div class=\"container \"> 
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-4 col-md-3  \">
                    <div class=\"col-12 \">
                    <img  src=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "avatar", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"imageA\"> 
                    </div> 
                    <div class=\"col-12\">                   
                        <label ><strong>Auteur: </strong><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showUser", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\" title=\"voir cet utilisateur\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "username", [], "any", false, false, false, 20), "html", null, true);
            echo "</a> </label> 
                    </div>

                </div>
                <!-- l'article -->
                <div class=\"col-xs-12 col-sm-8 col-md-9  articleshow\">
                    <div class=\"card text-white bg-secondary mb-3\" >
                    <div class=\"card-header\" ><h4>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</h4></div>
                    <div class=\"card-body\">
                        <p class=\"card-text\" style=\"color:#663300;\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 29, $this->source); })()), "content", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
                        <label><strong>Date de création:</strong> ";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "createdAt", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "createdAt", [], "any", false, false, false, 30), "H:i"), "html", null, true);
            echo "</label>
                    </div>
                    </div>

                </div>           

            </div>
            <div class=\"row\">
                <div class=\"col-12 trashA \"> 
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteArticleA", ["id" => twig_get_attribute($this->env, $this->source,             // line 40
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\"><img src=\"/imagesAdmin/trashA.jpg\" class=\"trash\" title=\"Supprimer cet article\"></a>
                </div>  
            </div>
           ";
            // line 43
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 43, $this->source); })()), "comments", [], "any", false, false, false, 43))) {
                // line 44
                echo "           <div class=\"row\">
                <div class=\"col-xs-12 col-sm-4 col-md-3  \">
      

                </div>
                <!-- l'article -->
                <div class=\"col-xs-12 col-sm-8 col-md-9  \">
                    <div class=\"card text-white bg-dark mb-3\" >
                    <div class=\"card-header\" style=\"text-align:center\"><h5> Les commentaires sur cet article</h5></div>
                    <div class=\"card-body\">
                        ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 54, $this->source); })()), "comments", [], "any", false, false, false, 54));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 55
                    echo "                        <div class=\"row Comment\">
                            <div class=\"col-12\">                   
                                <label ><a href=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showUser", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)]), "html", null, true);
                    echo " \" title=\"voir cet utilisateur\" class=\"auteurC\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 57), "username", [], "any", false, false, false, 57), "html", null, true);
                    echo "</a> </label> 
                            </div> 
                            <div class=\"col-xs-12 col-md-8 dateC\">                       
                                <label> ";
                    // line 60
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 60), "d/m/Y"), "html", null, true);
                    echo " à ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 60), "H:i"), "html", null, true);
                    echo "</label>
                            </div>
                            <div class=\"col-xs-12 col-md-4\">
                                <a class=\"btn btn-sm btn-danger\" href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteCA", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63), "idC" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                    echo "\">Supprimer cette commentaire</a>                                
                            </div>
                            <div class=\"col-12\">      
                                <p class=\"card-text\" style=\"color:#663300;\">";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 66), "html", null, true);
                    echo "</p>
                            </div>     
                        </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "                    </div>
                    </div>

                </div>           

            </div>
            ";
            }
            // line 77
            echo "        </div>



   ";
        }
        // line 81
        echo "     
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/showArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 81,  227 => 77,  218 => 70,  208 => 66,  202 => 63,  194 => 60,  186 => 57,  182 => 55,  178 => 54,  166 => 44,  164 => 43,  158 => 40,  157 => 39,  143 => 30,  139 => 29,  134 => 27,  122 => 20,  116 => 17,  110 => 13,  104 => 10,  101 => 9,  99 => 8,  94 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseA.html.twig' %}
{% block title %} Administration{% endblock %}
{% block body %}
    {% if article is defined %}
        <div class=\"retour\">
            <a href=\"{{path('articles')}}\" class=\"btn btn-sm btn-warning\">Retour aux articles</a> 
        </div>
        {% if message is defined %}
            <div class=\"alert alert-dismissible alert-danger message container\" >
                {{ message }}          
            </div>
        {% endif %}
        <div class=\"container \"> 
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-4 col-md-3  \">
                    <div class=\"col-12 \">
                    <img  src=\"{{article.user.avatar}}\" class=\"imageA\"> 
                    </div> 
                    <div class=\"col-12\">                   
                        <label ><strong>Auteur: </strong><a href=\"{{path('showUser',{'id': article.user.id })}}\" title=\"voir cet utilisateur\">{{article.user.username}}</a> </label> 
                    </div>

                </div>
                <!-- l'article -->
                <div class=\"col-xs-12 col-sm-8 col-md-9  articleshow\">
                    <div class=\"card text-white bg-secondary mb-3\" >
                    <div class=\"card-header\" ><h4>{{ article.name }}</h4></div>
                    <div class=\"card-body\">
                        <p class=\"card-text\" style=\"color:#663300;\">{{ article.content }}</p>
                        <label><strong>Date de création:</strong> {{article.createdAt | date('d/m/Y')}} à {{article.createdAt | date('H:i')}}</label>
                    </div>
                    </div>

                </div>           

            </div>
            <div class=\"row\">
                <div class=\"col-12 trashA \"> 
                    <a href=\"{{ path('deleteArticleA'
                    ,{id:article.id})}}\"><img src=\"/imagesAdmin/trashA.jpg\" class=\"trash\" title=\"Supprimer cet article\"></a>
                </div>  
            </div>
           {% if article.comments is not empty  %}
           <div class=\"row\">
                <div class=\"col-xs-12 col-sm-4 col-md-3  \">
      

                </div>
                <!-- l'article -->
                <div class=\"col-xs-12 col-sm-8 col-md-9  \">
                    <div class=\"card text-white bg-dark mb-3\" >
                    <div class=\"card-header\" style=\"text-align:center\"><h5> Les commentaires sur cet article</h5></div>
                    <div class=\"card-body\">
                        {% for comment in article.comments %}
                        <div class=\"row Comment\">
                            <div class=\"col-12\">                   
                                <label ><a href=\"{{path('showUser',{'id': comment.user.id })}} \" title=\"voir cet utilisateur\" class=\"auteurC\">{{comment.user.username}}</a> </label> 
                            </div> 
                            <div class=\"col-xs-12 col-md-8 dateC\">                       
                                <label> {{comment.createdAt | date('d/m/Y')}} à {{comment.createdAt | date('H:i')}}</label>
                            </div>
                            <div class=\"col-xs-12 col-md-4\">
                                <a class=\"btn btn-sm btn-danger\" href=\"{{path(\"deleteCA\",{id:article.id, idC:comment.id})}}\">Supprimer cette commentaire</a>                                
                            </div>
                            <div class=\"col-12\">      
                                <p class=\"card-text\" style=\"color:#663300;\">{{ comment.content }}</p>
                            </div>     
                        </div>
                        {% endfor %}
                    </div>
                    </div>

                </div>           

            </div>
            {% endif %}
        </div>



   {% endif %}     
{% endblock %}", "site/showArticle.html.twig", "C:\\Users\\utilisateur\\Desktop\\ForumDemo\\ForumDemo\\templates\\site\\showArticle.html.twig");
    }
}
