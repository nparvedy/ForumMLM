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

/* site/editSubsectionA.html.twig */
class __TwigTemplate_ebeef2641a031d3ba399040a5531b50b76379ef7a6a867243df388ac8be9e1f9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/editSubsectionA.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/editSubsectionA.html.twig"));

        $this->parent = $this->loadTemplate("baseA.html.twig", "site/editSubsectionA.html.twig", 1);
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
        echo " ";
        if ((isset($context["subsection"]) || array_key_exists("subsection", $context) ? $context["subsection"] : (function () { throw new RuntimeError('Variable "subsection" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "     <div class=\"retour\">
        <a href=\"";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sections");
            echo "\" class=\"btn btn-sm btn-warning\">Retour aux Catégories</a> 
    </div>
<div class=\"container statistiques\">

    <p class=\"bienvenue\"><strong>Renommer une sous-catégorie</strong></p>
    <!-- alert message-->
        ";
            // line 12
            if ( !twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 12, $this->source); })()))) {
                // line 13
                echo "            <div class=\"alert alert-dismissible alert-danger message container\" >
                ";
                // line 14
                echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 14, $this->source); })()), "html", null, true);
                echo "          
            </div>
        ";
            }
            // line 16
            echo " 
       
    <form action=\"\" method=\"POST\">
        <div class=\"row\">
                <div class=\"col-12\">                
                        <label for=\"name\">Nom de sous-catégorie*</label>
                </div>
                <div class=\"col-12\" style=\"display:none;\">
                         <input type=\"text\" name=\"nameC\" minlength=4 maxlength=100 required id=\"name\" class=\"form-control marginbottom\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subsection"]) || array_key_exists("subsection", $context) ? $context["subsection"] : (function () { throw new RuntimeError('Variable "subsection" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
                </div>
                <div class=\"col-12\">
                         <input type=\"text\" name=\"name\" minlength=4 maxlength=100 required id=\"name\" class=\"form-control marginbottom\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subsection"]) || array_key_exists("subsection", $context) ? $context["subsection"] : (function () { throw new RuntimeError('Variable "subsection" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "\">
                </div>
        </div>

        <div class=\"row\">
                <div class=\"col-xs-12 col-md-5\"></div>
                <div class=\"col-xs-12 col-md-7\">
                        <button type=\"submit\" name=\"validation\" class=\"btn btn-sm btn-info \">Renommer</button>
                </div>        
        </div>           
    </form>
    

</div>

";
        }
        // line 43
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/editSubsectionA.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  130 => 27,  124 => 24,  114 => 16,  108 => 14,  105 => 13,  103 => 12,  94 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseA.html.twig' %}
{% block title %} Administration{% endblock %}
{% block body %}
 {% if subsection %}
     <div class=\"retour\">
        <a href=\"{{path('sections')}}\" class=\"btn btn-sm btn-warning\">Retour aux Catégories</a> 
    </div>
<div class=\"container statistiques\">

    <p class=\"bienvenue\"><strong>Renommer une sous-catégorie</strong></p>
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
                <div class=\"col-12\" style=\"display:none;\">
                         <input type=\"text\" name=\"nameC\" minlength=4 maxlength=100 required id=\"name\" class=\"form-control marginbottom\" value=\"{{ subsection.name }}\">
                </div>
                <div class=\"col-12\">
                         <input type=\"text\" name=\"name\" minlength=4 maxlength=100 required id=\"name\" class=\"form-control marginbottom\" value=\"{{ subsection.name }}\">
                </div>
        </div>

        <div class=\"row\">
                <div class=\"col-xs-12 col-md-5\"></div>
                <div class=\"col-xs-12 col-md-7\">
                        <button type=\"submit\" name=\"validation\" class=\"btn btn-sm btn-info \">Renommer</button>
                </div>        
        </div>           
    </form>
    

</div>

{% endif %}

{% endblock %}        
", "site/editSubsectionA.html.twig", "C:\\Users\\utilisateur\\Desktop\\BonVersion\\ForumDemo\\templates\\site\\editSubsectionA.html.twig");
    }
}
