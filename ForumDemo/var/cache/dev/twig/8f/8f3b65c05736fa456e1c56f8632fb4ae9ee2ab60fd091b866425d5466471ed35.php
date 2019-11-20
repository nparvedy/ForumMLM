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

/* site/sections.html.twig */
class __TwigTemplate_303c5209db9c80a34958d7b77c9b93ee83c934c5b358ca2b9d7ba107665394ed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/sections.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/sections.html.twig"));

        $this->parent = $this->loadTemplate("baseA.html.twig", "site/sections.html.twig", 1);
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
        if ((isset($context["sections"]) || array_key_exists("sections", $context))) {
            // line 6
            echo "     <p class=\"bienvenue container\"><strong>Vous avez ";
            echo twig_escape_filter($this->env, (isset($context["categoriesNum"]) || array_key_exists("categoriesNum", $context) ? $context["categoriesNum"] : (function () { throw new RuntimeError('Variable "categoriesNum" does not exist.', 6, $this->source); })()), "html", null, true);
            echo " Catégories </strong></p>
          <!-- alert message-->
        ";
            // line 8
            if ( !twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 8, $this->source); })()))) {
                // line 9
                echo "            ";
                if ( !twig_test_empty((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 9, $this->source); })()))) {
                    // line 10
                    echo "                <div class=\"alert alert-dismissible ";
                    echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 10, $this->source); })()), "html", null, true);
                    echo " message container\" >
                    ";
                    // line 11
                    echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 11, $this->source); })()), "html", null, true);
                    echo "          
                </div>
            ";
                } else {
                    // line 14
                    echo "                <div class=\"alert alert-dismissible alert-danger message container\" >
                    ";
                    // line 15
                    echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 15, $this->source); })()), "html", null, true);
                    echo "          
                </div>
            ";
                }
                // line 18
                echo "        ";
            }
            echo "   
        
    <div class=\"users container-fluid row\" >
       <div class=\"col-xs-12 col-sm-4 col-md-3 statistiques\">
            <div class=\"card text-white bg-info mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header \">Chercher une catégorie</div>
                <div class=\"card-body\">
                            <form class=\"form-inline my-1 my-lg-0\" method=\"POST\">
                                <input class=\"form-control mr-sm-2 col-12\" type=\"text\" name=\"sectionname\" required placeholder=\"Search\"> 
                                <div class=\"col-12 chercher\">                               
                                    <button class=\"btn btn-danger my-2 my-sm-0\" type=\"submit\" name=\"search\">Chercher</button>
                                </div>
                            </form>
                </div>
            </div>              
            <div class=\"card text-white bg-success mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header\">Ajouter une catégorie</div>
                <div class=\"card-body\">
                    <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addSectionA");
            echo "\"> <img src=\"/imagesAdmin/addCategoryA.ico\" style=\"width:75px; height:75px;\" title=\"Ajouter une catégoies\"></a>
                </div>
            </div>  

            <div class=\"card text-white bg-success mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header\">Ajouter une sous-catégorie</div>
                <div class=\"card-body\">
                    <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addSubsectionA");
            echo "\" class=\"btn btn-warning textNon\" style=\"text-decoration:none;\"title=\"Ajouter sous-catégorie\">Ajouter sous-catégorie</a>
                </div>
            </div>                           
       </div>
       <div class=\"col-xs-12 col-sm-8 col-md-9\">
          <div class=\"table-responsive-sm\">
          <table class=\"table table-hover \">
            <thead>
                <tr class=\" table-active\">
                <th scope=\"col\" >Titre</th>
                <th scope=\"col\" >Sous-catégories </th>
                <th scope=\"col\" >Opérations sur ces catégories</th>               
                </tr>
            </thead>
            <tbody>
            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 59
                echo "                <tr class=\"table-secondary\">
                    <th scope=\"row\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "name", [], "any", false, false, false, 60), "html", null, true);
                echo "</th>
                    
                    <td>
                       ";
                // line 63
                if (twig_get_attribute($this->env, $this->source, $context["section"], "subsections", [], "any", true, true, false, 63)) {
                    // line 64
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["section"], "subsections", [], "any", false, false, false, 64));
                    foreach ($context['_seq'] as $context["_key"] => $context["subsection"]) {
                        echo " 
                            <div class=\"container\" >
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        ";
                        // line 68
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subsection"], "name", [], "any", false, false, false, 68), "html", null, true);
                        echo " 
                                    </div>
                                    <div class=\"col-12\">
                                        <a href=\"";
                        // line 71
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteSubsectionA", ["id" => twig_get_attribute($this->env, $this->source, $context["subsection"], "id", [], "any", false, false, false, 71)]), "html", null, true);
                        echo "\" class=\"btn  btn-danger btn-sm  \" title=\"supprimer cette sous catégorie\">Supprimer</a>
                                        <a href=\"";
                        // line 72
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editSubsectionA", ["id" => twig_get_attribute($this->env, $this->source, $context["subsection"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                        echo "\"class=\"btn btn-sm btn-warning margin0\" title=\"renommer cette sous catégorie\">Renommer</a>
                                    </div>                                
                                </div> 
                            </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subsection'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    echo "                        ";
                } else {
                    // line 78
                    echo "                        <p>Il n'y pas de sujet dans cette catégorie</p>
                        ";
                }
                // line 80
                echo "                    </td>
                    
                    <td>
                       <a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteSectionA", ["id" => twig_get_attribute($this->env, $this->source, $context["section"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                echo "\" class=\"btn btn-danger \" title=\"supprimer cette catégorie\">Supprimer</a>
                       <a href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editSectionA", ["id" => twig_get_attribute($this->env, $this->source, $context["section"], "id", [], "any", false, false, false, 84)]), "html", null, true);
                echo "\"class=\"btn btn-warning margin0\" title=\"renommer cette catégorie\">Renommer</a>
                    </td>
                </tr>  
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "              
            </tbody>
        </table>
        </div>    
       </div>          
     
     
    </div>    
";
        }
        // line 96
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/sections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 96,  246 => 87,  236 => 84,  232 => 83,  227 => 80,  223 => 78,  220 => 77,  209 => 72,  205 => 71,  199 => 68,  189 => 64,  187 => 63,  181 => 60,  178 => 59,  174 => 58,  156 => 43,  146 => 36,  124 => 18,  118 => 15,  115 => 14,  109 => 11,  104 => 10,  101 => 9,  99 => 8,  93 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseA.html.twig' %}
{% block title %} Administration{% endblock %}
{% block body %}
   
{% if sections is defined %}
     <p class=\"bienvenue container\"><strong>Vous avez {{ categoriesNum }} Catégories </strong></p>
          <!-- alert message-->
        {% if message is not empty %}
            {% if class is not empty %}
                <div class=\"alert alert-dismissible {{ class }} message container\" >
                    {{ message }}          
                </div>
            {% else %}
                <div class=\"alert alert-dismissible alert-danger message container\" >
                    {{ message }}          
                </div>
            {% endif %}
        {% endif %}   
        
    <div class=\"users container-fluid row\" >
       <div class=\"col-xs-12 col-sm-4 col-md-3 statistiques\">
            <div class=\"card text-white bg-info mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header \">Chercher une catégorie</div>
                <div class=\"card-body\">
                            <form class=\"form-inline my-1 my-lg-0\" method=\"POST\">
                                <input class=\"form-control mr-sm-2 col-12\" type=\"text\" name=\"sectionname\" required placeholder=\"Search\"> 
                                <div class=\"col-12 chercher\">                               
                                    <button class=\"btn btn-danger my-2 my-sm-0\" type=\"submit\" name=\"search\">Chercher</button>
                                </div>
                            </form>
                </div>
            </div>              
            <div class=\"card text-white bg-success mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header\">Ajouter une catégorie</div>
                <div class=\"card-body\">
                    <a href=\"{{path('addSectionA')}}\"> <img src=\"/imagesAdmin/addCategoryA.ico\" style=\"width:75px; height:75px;\" title=\"Ajouter une catégoies\"></a>
                </div>
            </div>  

            <div class=\"card text-white bg-success mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header\">Ajouter une sous-catégorie</div>
                <div class=\"card-body\">
                    <a href=\"{{path('addSubsectionA')}}\" class=\"btn btn-warning textNon\" style=\"text-decoration:none;\"title=\"Ajouter sous-catégorie\">Ajouter sous-catégorie</a>
                </div>
            </div>                           
       </div>
       <div class=\"col-xs-12 col-sm-8 col-md-9\">
          <div class=\"table-responsive-sm\">
          <table class=\"table table-hover \">
            <thead>
                <tr class=\" table-active\">
                <th scope=\"col\" >Titre</th>
                <th scope=\"col\" >Sous-catégories </th>
                <th scope=\"col\" >Opérations sur ces catégories</th>               
                </tr>
            </thead>
            <tbody>
            {% for section in sections %}
                <tr class=\"table-secondary\">
                    <th scope=\"row\">{{section.name}}</th>
                    
                    <td>
                       {% if section.subsections is defined %}
                        {% for subsection in section.subsections %} 
                            <div class=\"container\" >
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        {{ subsection.name }} 
                                    </div>
                                    <div class=\"col-12\">
                                        <a href=\"{{path('deleteSubsectionA', {id:subsection.id})}}\" class=\"btn  btn-danger btn-sm  \" title=\"supprimer cette sous catégorie\">Supprimer</a>
                                        <a href=\"{{path('editSubsectionA', {id:subsection.id})}}\"class=\"btn btn-sm btn-warning margin0\" title=\"renommer cette sous catégorie\">Renommer</a>
                                    </div>                                
                                </div> 
                            </div>
                        {% endfor %}
                        {% else %}
                        <p>Il n'y pas de sujet dans cette catégorie</p>
                        {% endif %}
                    </td>
                    
                    <td>
                       <a href=\"{{path('deleteSectionA', {id:section.id})}}\" class=\"btn btn-danger \" title=\"supprimer cette catégorie\">Supprimer</a>
                       <a href=\"{{path('editSectionA', {id:section.id})}}\"class=\"btn btn-warning margin0\" title=\"renommer cette catégorie\">Renommer</a>
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


", "site/sections.html.twig", "C:\\Users\\utilisateur\\Desktop\\ForumDemo\\ForumDemo\\templates\\site\\sections.html.twig");
    }
}
