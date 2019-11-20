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

/* site/admin.html.twig */
class __TwigTemplate_0d5eb7485f246aed4cf9ade73350febfc214f104e23e199aa56788681f3bdef0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/admin.html.twig"));

        $this->parent = $this->loadTemplate("baseA.html.twig", "site/admin.html.twig", 1);
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

    <p class=\"bienvenue\"><strong>Bienvenue ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 6, $this->source); })()), "html", null, true);
        echo " sur votre partie d'administration</strong></p>
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <div class=\"card text-white bg-info mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header cardName\">Statistique de l'utilisateurs </div>
                <div class=\"card-body\">
                    <img src=\"/imagesAdmin/usersA.jpg\">
                    <h6 class=\"card-text quie\">Utilisateurs</h6>
                    <a class=\"card-link\"  href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["usersNum"]) || array_key_exists("usersNum", $context) ? $context["usersNum"] : (function () { throw new RuntimeError('Variable "usersNum" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</a>
                </div>
            </div >
        </div>
        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <div class=\"card text-white bg-warning mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header cardName\">Statistique de l'articles </div>
                <div class=\"card-body\">
                    <img src=\"/imagesAdmin/articlesA.png\">
                    <h6 class=\"card-text quie\">Articles</h6>
                    <a class=\"card-link\"  href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["articlesNum"]) || array_key_exists("articlesNum", $context) ? $context["articlesNum"] : (function () { throw new RuntimeError('Variable "articlesNum" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</a>
                </div>
            </div >
        </div>
        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <div class=\"card text-white bg-success mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header cardName\">Statistique des catégories </div>
                <div class=\"card-body\">
                    <img src=\"/imagesAdmin/categoriesA.jpg\">
                    <h6 class=\"card-text quie\">Catégories</h6>
                    <a class=\"card-link\"  href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sections");
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["categoriesNum"]) || array_key_exists("categoriesNum", $context) ? $context["categoriesNum"] : (function () { throw new RuntimeError('Variable "categoriesNum" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</a>
                </div>
            </div >
        </div> 
        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header cardName\">Statistique des commentaires </div>
                <div class=\"card-body\">
                    <img src=\"/imagesAdmin/commentsA.jpg\">
                    <h6 class=\"card-text quie\">Commentaires</h6>
                    <h6 class=\"card-text\"  >";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["commentsNum"]) || array_key_exists("commentsNum", $context) ? $context["commentsNum"] : (function () { throw new RuntimeError('Variable "commentsNum" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "</h6>
                </div>
            </div >
        </div>    
        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <div class=\"card text-white bg-danger mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header cardName\">Statistique des messages </div>
                <div class=\"card-body\">
                    <img src=\"/imagesAdmin/messagesA.png\">
                    <h6 class=\"card-text quie\">Messages</h6>
                    <h6 class=\"card-text\"  >";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["messagesNum"]) || array_key_exists("messagesNum", $context) ? $context["messagesNum"] : (function () { throw new RuntimeError('Variable "messagesNum" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "</h6>
                </div>
            </div >
        </div>                 
    </div>



</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 54,  148 => 44,  133 => 34,  118 => 24,  103 => 14,  92 => 6,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseA.html.twig' %}
{% block title %} Administration{% endblock %}
{% block body %}
<div class=\"container statistiques\">

    <p class=\"bienvenue\"><strong>Bienvenue {{ username }} sur votre partie d'administration</strong></p>
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <div class=\"card text-white bg-info mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header cardName\">Statistique de l'utilisateurs </div>
                <div class=\"card-body\">
                    <img src=\"/imagesAdmin/usersA.jpg\">
                    <h6 class=\"card-text quie\">Utilisateurs</h6>
                    <a class=\"card-link\"  href=\"{{ path('users') }}\">{{usersNum}}</a>
                </div>
            </div >
        </div>
        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <div class=\"card text-white bg-warning mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header cardName\">Statistique de l'articles </div>
                <div class=\"card-body\">
                    <img src=\"/imagesAdmin/articlesA.png\">
                    <h6 class=\"card-text quie\">Articles</h6>
                    <a class=\"card-link\"  href=\"{{ path('articles') }}\">{{articlesNum}}</a>
                </div>
            </div >
        </div>
        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <div class=\"card text-white bg-success mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header cardName\">Statistique des catégories </div>
                <div class=\"card-body\">
                    <img src=\"/imagesAdmin/categoriesA.jpg\">
                    <h6 class=\"card-text quie\">Catégories</h6>
                    <a class=\"card-link\"  href=\"{{ path('sections') }}\">{{categoriesNum}}</a>
                </div>
            </div >
        </div> 
        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header cardName\">Statistique des commentaires </div>
                <div class=\"card-body\">
                    <img src=\"/imagesAdmin/commentsA.jpg\">
                    <h6 class=\"card-text quie\">Commentaires</h6>
                    <h6 class=\"card-text\"  >{{commentsNum}}</h6>
                </div>
            </div >
        </div>    
        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <div class=\"card text-white bg-danger mb-3\" style=\"max-width: 20rem;\">
                <div class=\"card-header cardName\">Statistique des messages </div>
                <div class=\"card-body\">
                    <img src=\"/imagesAdmin/messagesA.png\">
                    <h6 class=\"card-text quie\">Messages</h6>
                    <h6 class=\"card-text\"  >{{messagesNum}}</h6>
                </div>
            </div >
        </div>                 
    </div>



</div>



{% endblock %}


", "site/admin.html.twig", "C:\\Users\\utilisateur\\Desktop\\BonVersion\\ForumDemo\\templates\\site\\admin.html.twig");
    }
}
