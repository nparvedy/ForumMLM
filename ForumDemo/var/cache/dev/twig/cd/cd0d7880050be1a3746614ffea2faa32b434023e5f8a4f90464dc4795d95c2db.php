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

/* site/addUserA.html.twig */
class __TwigTemplate_24b258a7b5628e211e72c15ac3f5731a4f1f72f3e8ae1e51adc137871638fbb8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/addUserA.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/addUserA.html.twig"));

        $this->parent = $this->loadTemplate("baseA.html.twig", "site/addUserA.html.twig", 1);
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

    <p class=\"bienvenue\"><strong>Ajouter un utilisateur</strong></p>
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
       
    <form action=\"\" method=\"POST\" class=\"formUser\">
        <div class=\"row\">

                <div class=\"col-xs-12 col-md-12\">                
                     <label for=\"admin\">Admin*</label>
                     <select name=\"admin\" id=\"admin\" class=\"form-control\">
                        <option value=\"1\">Oui</option>
                        <option value=\"0\">Non</option>
                     </select>                                           
                </div>
        </div>     
        <div class=\"row\">
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"username\">Pseudo*</label>
                     <input type=\"text\" name=\"username\" minlength=6 maxlength=25 required id=\"username\" class=\"form-control marginbottom\">                        
                </div>
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"firstname\">Prénom*</label>
                     <input type=\"text\" name=\"firstname\" minlength=3 maxlength=25 required id=\"firstname\" class=\"form-control marginbottom\">                        
                </div>
        </div>
        <div class=\"row\">
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"lastname\">Nom*</label>
                     <input type=\"text\" name=\"lastname\" minlength=3 maxlength=25 required id=\"lastname\" class=\"form-control marginbottom\">                        
                </div>
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"sex\">Sexe*</label>
                     <select name=\"sex\" id=\"sex\" class=\"form-control\">
                        <option>Femme</option>
                        <option>Homme</option>
                     </select>                                           
                </div>
        </div>
        <div class=\"row\">
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"email\">Mail*</label>
                     <input type=\"email\" name=\"email\"  maxlength=75 required id=\"email\" class=\"form-control marginbottom\">                        
                </div>
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"phone\">Téléphone*</label>
                     <input type=\"tel\" name=\"phone\" minlength=10 maxlength=10 required id=\"phone\" class=\"form-control marginbottom\">                                       
                </div>
        </div> 
        <div class=\"row\">
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"address\">Adresse*</label>
                     <input type=\"text\" name=\"address\" minlength=6 maxlength=100 required id=\"address\" class=\"form-control marginbottom\">                        
                </div>
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"arrondissement\">Arrondissement*</label>
                     <input type=\"tel\" name=\"arrondissement\" minlength=5 maxlength=5 required id=\"arrondissement\" class=\"form-control marginbottom\">                                       
                </div>
        </div>  
        <div class=\"row\">
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"birthday\">Date de naissance*</label>
                     <input type=\"date\" name=\"birthday\" required id=\"birthday\" class=\"form-control marginbottom\">                        
                </div>
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"candidat\">Candidat*</label>
                     <select name=\"candidat\" id=\"candidat\" class=\"form-control\">
                        <option value=\"1\">Oui</option>
                        <option value=\"0\">Non</option>
                     </select>                                           
                </div>
        </div>   
        <div class=\"row\">
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"password\">Mot de passe*</label>
                     <input type=\"password\" name=\"password\" minlength=6 maxlength=25 required id=\"password\" class=\"form-control marginbottom\">                        
                </div>
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"passwordC\">Confirmer votre mot de passe*</label>
                     <input type=\"password\" name=\"passwordC\" minlength=6 maxlength=25 required id=\"passwordC\" class=\"form-control marginbottom\">                        
                </div>
        </div>                             
        <div class=\"row\">
                <div class=\"col-xs-12 col-md-5\"></div>
                <div class=\"col-xs-12 col-md-7\">
                        <button type=\"submit\" name=\"validation\" class=\"btn btn-sm btn-success marginValide\">Ajouter un utilisateur</button>
                </div>        
        </div>           
    </form>
    

</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/addUserA.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 12,  99 => 10,  96 => 9,  94 => 8,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseA.html.twig' %}
{% block title %} Administration{% endblock %}
{% block body %}
<div class=\"container statistiques\">

    <p class=\"bienvenue\"><strong>Ajouter un utilisateur</strong></p>
    <!-- alert message-->
        {% if message is not empty %}
            <div class=\"alert alert-dismissible alert-danger message container\" >
                {{ message }}          
            </div>
        {% endif %} 
       
    <form action=\"\" method=\"POST\" class=\"formUser\">
        <div class=\"row\">

                <div class=\"col-xs-12 col-md-12\">                
                     <label for=\"admin\">Admin*</label>
                     <select name=\"admin\" id=\"admin\" class=\"form-control\">
                        <option value=\"1\">Oui</option>
                        <option value=\"0\">Non</option>
                     </select>                                           
                </div>
        </div>     
        <div class=\"row\">
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"username\">Pseudo*</label>
                     <input type=\"text\" name=\"username\" minlength=6 maxlength=25 required id=\"username\" class=\"form-control marginbottom\">                        
                </div>
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"firstname\">Prénom*</label>
                     <input type=\"text\" name=\"firstname\" minlength=3 maxlength=25 required id=\"firstname\" class=\"form-control marginbottom\">                        
                </div>
        </div>
        <div class=\"row\">
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"lastname\">Nom*</label>
                     <input type=\"text\" name=\"lastname\" minlength=3 maxlength=25 required id=\"lastname\" class=\"form-control marginbottom\">                        
                </div>
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"sex\">Sexe*</label>
                     <select name=\"sex\" id=\"sex\" class=\"form-control\">
                        <option>Femme</option>
                        <option>Homme</option>
                     </select>                                           
                </div>
        </div>
        <div class=\"row\">
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"email\">Mail*</label>
                     <input type=\"email\" name=\"email\"  maxlength=75 required id=\"email\" class=\"form-control marginbottom\">                        
                </div>
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"phone\">Téléphone*</label>
                     <input type=\"tel\" name=\"phone\" minlength=10 maxlength=10 required id=\"phone\" class=\"form-control marginbottom\">                                       
                </div>
        </div> 
        <div class=\"row\">
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"address\">Adresse*</label>
                     <input type=\"text\" name=\"address\" minlength=6 maxlength=100 required id=\"address\" class=\"form-control marginbottom\">                        
                </div>
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"arrondissement\">Arrondissement*</label>
                     <input type=\"tel\" name=\"arrondissement\" minlength=5 maxlength=5 required id=\"arrondissement\" class=\"form-control marginbottom\">                                       
                </div>
        </div>  
        <div class=\"row\">
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"birthday\">Date de naissance*</label>
                     <input type=\"date\" name=\"birthday\" required id=\"birthday\" class=\"form-control marginbottom\">                        
                </div>
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"candidat\">Candidat*</label>
                     <select name=\"candidat\" id=\"candidat\" class=\"form-control\">
                        <option value=\"1\">Oui</option>
                        <option value=\"0\">Non</option>
                     </select>                                           
                </div>
        </div>   
        <div class=\"row\">
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"password\">Mot de passe*</label>
                     <input type=\"password\" name=\"password\" minlength=6 maxlength=25 required id=\"password\" class=\"form-control marginbottom\">                        
                </div>
                <div class=\"col-xs-12 col-md-6\">                
                     <label for=\"passwordC\">Confirmer votre mot de passe*</label>
                     <input type=\"password\" name=\"passwordC\" minlength=6 maxlength=25 required id=\"passwordC\" class=\"form-control marginbottom\">                        
                </div>
        </div>                             
        <div class=\"row\">
                <div class=\"col-xs-12 col-md-5\"></div>
                <div class=\"col-xs-12 col-md-7\">
                        <button type=\"submit\" name=\"validation\" class=\"btn btn-sm btn-success marginValide\">Ajouter un utilisateur</button>
                </div>        
        </div>           
    </form>
    

</div>



{% endblock %}        
", "site/addUserA.html.twig", "C:\\Users\\utilisateur\\Desktop\\ForumDemo\\ForumDemo\\templates\\site\\addUserA.html.twig");
    }
}
