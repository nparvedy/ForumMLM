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

/* site/searchSection.html.twig */
class __TwigTemplate_a57bb927bee6edac310c3863fa4516a90fc3ddbc722ea97273278d7e56746f74 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/searchSection.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/searchSection.html.twig"));

        $this->parent = $this->loadTemplate("baseA.html.twig", "site/searchSection.html.twig", 1);
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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sections");
            echo "\" class=\"btn btn-sm btn-warning\">Retour aux catégories</a> 
   </div>
   <p class=\"bienvenue container\"><strong>Vous avez ";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["searchNum"]) || array_key_exists("searchNum", $context) ? $context["searchNum"] : (function () { throw new RuntimeError('Variable "searchNum" does not exist.', 8, $this->source); })()), "html", null, true);
            echo " résultats </strong></p>
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
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 36
                echo "                <tr class=\"table-secondary\">
                    <th scope=\"row\">";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "name", [], "any", false, false, false, 37), "html", null, true);
                echo "</th>
                    
                    <td>
                       ";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["section"], "subsections", [], "any", true, true, false, 40)) {
                    // line 41
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["section"], "subsections", [], "any", false, false, false, 41));
                    foreach ($context['_seq'] as $context["_key"] => $context["subsection"]) {
                        echo " 
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        ";
                        // line 45
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subsection"], "name", [], "any", false, false, false, 45), "html", null, true);
                        echo " 
                                    </div>
                                    <div class=\"col-12\">
                                        <a href=\"";
                        // line 48
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteSubsectionA", ["id" => twig_get_attribute($this->env, $this->source, $context["subsection"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                        echo "\" class=\"btn  btn-danger btn-sm  \" title=\"supprimer cette sous catégorie\">Supprimer</a>
                                        <a href=\"";
                        // line 49
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editSubsectionA", ["id" => twig_get_attribute($this->env, $this->source, $context["subsection"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                        echo "\" class=\"btn btn-sm btn-warning margin0\" title=\"renommer cette sous catégorie\">Renommer</a>
                                    </div>                                
                                </div> 
                            </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subsection'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "                        ";
                } else {
                    // line 55
                    echo "                        <p>Il n'y pas de sujet dans cette catégorie</p>
                        ";
                }
                // line 57
                echo "                    </td>
                    
                    <td>
                       <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteSectionA", ["id" => twig_get_attribute($this->env, $this->source, $context["section"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                echo "\" class=\"btn btn-danger \" title=\"supprimer cette catégorie\">Supprimer</a>
                       <a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editSectionA", ["id" => twig_get_attribute($this->env, $this->source, $context["section"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                echo "\"class=\"btn btn-warning margin0\" title=\"renommer cette catégorie\">Renommer</a>
                    </td>
                </tr>  
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "              
            </tbody>
        </table>
        </div>    
       </div>          
     
     
    </div>    
    
  
     
  
    ";
        } else {
            // line 77
            echo "        <div class=\"retour\">
                <a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sections");
            echo "\" class=\"btn btn-sm btn-warning\"> Retour aux catégories</a> 
        </div>
        <p class=\"bienvenue container aucun\"><strong>Aucun Résultat, lancer une autre recherche. </strong></p>
               <div class=\"users container-fluid row\" >
            <div class=\"col-xs-12 col-sm-4 col-md-5 \"></div>
            <div class=\"col-xs-12 col-sm-4 col-md-4 statistiques textCenter\">
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
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-3 \"></div>
        </div>   
    ";
        }
        // line 99
        echo "  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/searchSection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 99,  219 => 78,  216 => 77,  201 => 64,  191 => 61,  187 => 60,  182 => 57,  178 => 55,  175 => 54,  164 => 49,  160 => 48,  154 => 45,  144 => 41,  142 => 40,  136 => 37,  133 => 36,  129 => 35,  99 => 8,  94 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseA.html.twig' %}
{% block title %} Administration{% endblock %}
{% block body %}
   {%if searchNum >0 %}
   <div class=\"retour\">
        <a href=\"{{path('sections')}}\" class=\"btn btn-sm btn-warning\">Retour aux catégories</a> 
   </div>
   <p class=\"bienvenue container\"><strong>Vous avez {{ searchNum }} résultats </strong></p>
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
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        {{ subsection.name }} 
                                    </div>
                                    <div class=\"col-12\">
                                        <a href=\"{{path('deleteSubsectionA', {id:subsection.id})}}\" class=\"btn  btn-danger btn-sm  \" title=\"supprimer cette sous catégorie\">Supprimer</a>
                                        <a href=\"{{path('editSubsectionA', {id:subsection.id})}}\" class=\"btn btn-sm btn-warning margin0\" title=\"renommer cette sous catégorie\">Renommer</a>
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
    
  
     
  
    {% else %}
        <div class=\"retour\">
                <a href=\"{{path('sections')}}\" class=\"btn btn-sm btn-warning\"> Retour aux catégories</a> 
        </div>
        <p class=\"bienvenue container aucun\"><strong>Aucun Résultat, lancer une autre recherche. </strong></p>
               <div class=\"users container-fluid row\" >
            <div class=\"col-xs-12 col-sm-4 col-md-5 \"></div>
            <div class=\"col-xs-12 col-sm-4 col-md-4 statistiques textCenter\">
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
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-3 \"></div>
        </div>   
    {% endif %}
  
{% endblock %}


", "site/searchSection.html.twig", "C:\\Users\\Sènzo\\Desktop\\POPODEPIED\\ForumDemo\\ForumDemo\\templates\\site\\searchSection.html.twig");
    }
}
