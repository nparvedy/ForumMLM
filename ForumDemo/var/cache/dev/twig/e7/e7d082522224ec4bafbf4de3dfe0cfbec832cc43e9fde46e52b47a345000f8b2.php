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

/* site/addSubsectionA.html.twig */
class __TwigTemplate_15a3f9fc0ad9d2e55add3de2f62eb8f538d197519f003362ccf3f40703f2216f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/addSubsectionA.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/addSubsectionA.html.twig"));

        $this->parent = $this->loadTemplate("baseA.html.twig", "site/addSubsectionA.html.twig", 1);
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
        echo "<div class=\"container statistiques\">

    <p class=\"bienvenue\"><strong>Ajouter une sous-catégorie</strong></p>
    ";
        // line 7
        if ( !twig_test_empty((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "    <!-- alert message-->
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
       
    <form action=\"\" method=\"POST\">
        <div class=\"row\">
                <div class=\"col-12\">                
                        <label for=\"name\">Nom de sous-catégorie*</label>
                </div>
                <div class=\"col-12\">
                         <input type=\"text\" name=\"name\" minlength=4 maxlength=100 required id=\"name\" class=\"form-control marginbottom\">
                </div>
        </div>
        <div class=\"row\">
                <div class=\"col-12\">
                        <label for=\"description\">Description</label>
                </div>
                <div class=\"col-12\">        
                        <input type=\"text\" name=\"description\"  id=\"description\" class=\"form-control marginbottom\">
                </div>
        </div>
        <div class=\"row\">
                <div class=\"col-12\">
                        <label for=\"section\">Dans quelle catégories*</label>
                </div>
                <div class=\"col-xs-12 col-md-3\">        
                       <select name=\"section\" id=\"section\" class=\"form-control\">
                        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 39
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 39), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                       </select>
                </div>
        </div>
        <div class=\"row\">
                <div class=\"col-xs-12 col-md-5\"></div>
                <div class=\"col-xs-12 col-md-7\">
                        <button type=\"submit\" name=\"validation\" class=\"btn btn-sm btn-info\">Ajouter une sous-catégorie</button>
                </div>        
        </div>           
    </form>
    ";
        } else {
            // line 51
            echo "  
    <a href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addSectionA");
            echo "\" class=\"btn btn-danger\">Il n'y pas de catégorie aller en créer une </a>
    ";
        }
        // line 53
        echo " 

</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/addSubsectionA.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 53,  167 => 52,  164 => 51,  151 => 41,  140 => 39,  136 => 38,  109 => 13,  103 => 11,  100 => 10,  98 => 9,  95 => 8,  93 => 7,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseA.html.twig' %}
{% block title %} Administration{% endblock %}
{% block body %}
<div class=\"container statistiques\">

    <p class=\"bienvenue\"><strong>Ajouter une sous-catégorie</strong></p>
    {% if  categories is not empty  %}
    <!-- alert message-->
        {% if message is not empty %}
            <div class=\"alert alert-dismissible alert-danger message container\" >
                {{ message }}          
            </div>
        {% endif %} 
       
    <form action=\"\" method=\"POST\">
        <div class=\"row\">
                <div class=\"col-12\">                
                        <label for=\"name\">Nom de sous-catégorie*</label>
                </div>
                <div class=\"col-12\">
                         <input type=\"text\" name=\"name\" minlength=4 maxlength=100 required id=\"name\" class=\"form-control marginbottom\">
                </div>
        </div>
        <div class=\"row\">
                <div class=\"col-12\">
                        <label for=\"description\">Description</label>
                </div>
                <div class=\"col-12\">        
                        <input type=\"text\" name=\"description\"  id=\"description\" class=\"form-control marginbottom\">
                </div>
        </div>
        <div class=\"row\">
                <div class=\"col-12\">
                        <label for=\"section\">Dans quelle catégories*</label>
                </div>
                <div class=\"col-xs-12 col-md-3\">        
                       <select name=\"section\" id=\"section\" class=\"form-control\">
                        {% for categorie in categories %}
                            <option value=\"{{ categorie.id }}\">{{ categorie.name }}</option>
                        {% endfor %}
                       </select>
                </div>
        </div>
        <div class=\"row\">
                <div class=\"col-xs-12 col-md-5\"></div>
                <div class=\"col-xs-12 col-md-7\">
                        <button type=\"submit\" name=\"validation\" class=\"btn btn-sm btn-info\">Ajouter une sous-catégorie</button>
                </div>        
        </div>           
    </form>
    {% else  %}  
    <a href=\"{{path('addSectionA')}}\" class=\"btn btn-danger\">Il n'y pas de catégorie aller en créer une </a>
    {% endif %} 

</div>



{% endblock %}        ", "site/addSubsectionA.html.twig", "C:\\Users\\utilisateur\\Desktop\\BonVersion\\ForumDemo\\templates\\site\\addSubsectionA.html.twig");
    }
}
