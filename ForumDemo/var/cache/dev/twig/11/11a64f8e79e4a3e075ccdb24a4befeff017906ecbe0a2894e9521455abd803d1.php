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

/* base.html.twig */
class __TwigTemplate_56e5bb95fffd04f0ad1a983e9daa1c041536a7c4587c001c2dc3d76f7f5b8cca extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'javascriptzz' => [$this, 'block_javascriptzz'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"/style.css\">
    <link rel=\"stylesheet\" href=\"/youb.css\">
                    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js\" integrity=\"sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=\" crossorigin=\"anonymous\"></script>

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
                <div id=\"menu_responsive\">
                <div class=\"categorie\" id=\"cat\">
                <a href=\"/\" class=\"li_menu\"><li >ACCUEIL</li></a>
                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_show", ["id" => 2]);
        echo "\" class=\"li_menu\"><li>COMPTE</li></a>
                <a class=\"li_menu\"><li class=\"active\">RECHERCHER</li></a>
                <a  href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnection");
        echo "\" class=\"li_menu\"><li>DECONNECTION</li></a>

                    
                </div>
            </div>
       <header style=\"z-index:99\">
        <div id=\"container\">
        
            <a href=\"/\"><img height=\"100\" id=\"logo_website\" src=\"/images/logo.png\" alt=\"logo\"
                    width=\"200\" /></a>
            <div id=\"li_container\">
                <a href=\"/\"><li id=\"home_icon\"></li></a>
                <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_show", ["id" => 2]);
        echo "\"><li id=\"users_icon\"> </li></a>
                <a  href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnection");
        echo "\"><li id=\"deco_icon\"></li></a>
                <li class=\"active\" id=\"search_icon\"></li>
            </div>

                  <div id=\"li_container_responsive\">
            <div id=\"container_barre\">
            <li class=\"barre\"></li>
                <li class=\"barre\"></li>
                    <li class=\"barre\"></li>
                        </div>
            </div>
    </header>
    <div class=\"serachbox\">
                        <form name=\"myForm\" id=\"recherche\" action=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recup");
        echo "\" method=\"post\">
                            <input id=\"message\" type=\"text\" name=\"recherche\" placeholder=\"Rechercher\">
                            <input class=\"sendButton\" type=\"submit\"  value=\"valider\">

                        </form>
                </div>
<div class=\"container\">
            <div class=\"flexage\" id=\"flexage\">
     </div>
        ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo " </div>
    <!-- Pied de page du Forum -->
    <footer>
        <div id=\"footer_container\">
            <div id=\"column\">
                <h2>Réalisé par :</h2>
               <img src=\"/images/logo_simplon.png\" id=\"logo_simplon\">
            </div>

            <div id=\"column\" style=\"border-left: 1px solid #f3f3f3;\">
            <h2>Contactez-nous !</h2>
            <p>Carrières: Postulez!</p>
            <p>Retrouvez nous sur:</p>
            <p>Signaler un problème</p>
            </div>
        </div>
    </footer>


        ";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 80
        echo "
 ";
        // line 81
        $this->displayBlock('javascriptzz', $context, $blocks);
        // line 84
        echo "


";
        // line 87
        $this->displayBlock('js', $context, $blocks);
        // line 119
        echo "    </body>
</html>
<script src=\"../app.js\"></script>

<style>
</style>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "       
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_javascriptzz($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascriptzz"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascriptzz"));

        // line 82
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 88
        echo "        <script>
        //Document GET//
        bouton = document.getElementById('container_barre');
        responsive = document.getElementById('menu_responsive');
        sous_responsive = document.getElementById('cat');
        flex = document.getElementById('flexage');

        //Initialisation style//
        responsive.style.width = \"100%\";
        responsive.style.height = \"0px\";
        responsive.style.transition = \"0.6s\";
        flex.style.transition =\"0.6s\";
        flex.style.height =\"0px\";

        //Nav responsive//
        bouton.addEventListener(\"click\",function() {
        if (responsive.style.height ==\"0px\") {
            responsive.style.height = \"280px\";
            flex.style.transition =\"0.6s\";
            flex.style.height =\"280px\";
        }
            else {
                flex.style.transition =\"0.6s\";
                flex.style.height =\"0px\";
                responsive.style.height = \"0\";
            }
        });

        </script>
        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 88,  278 => 87,  267 => 82,  257 => 81,  246 => 78,  236 => 77,  225 => 56,  215 => 55,  197 => 12,  178 => 5,  163 => 119,  161 => 87,  156 => 84,  154 => 81,  151 => 80,  149 => 77,  128 => 58,  126 => 55,  114 => 46,  98 => 33,  94 => 32,  79 => 20,  74 => 18,  67 => 13,  65 => 12,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"/style.css\">
    <link rel=\"stylesheet\" href=\"/youb.css\">
                    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js\" integrity=\"sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=\" crossorigin=\"anonymous\"></script>

        {% block stylesheets %}{% endblock %}
    </head>
    <body>
                <div id=\"menu_responsive\">
                <div class=\"categorie\" id=\"cat\">
                <a href=\"/\" class=\"li_menu\"><li >ACCUEIL</li></a>
                <a href=\"{{path('profil_show',{'id':2})}}\" class=\"li_menu\"><li>COMPTE</li></a>
                <a class=\"li_menu\"><li class=\"active\">RECHERCHER</li></a>
                <a  href=\"{{ path('deconnection')}}\" class=\"li_menu\"><li>DECONNECTION</li></a>

                    
                </div>
            </div>
       <header style=\"z-index:99\">
        <div id=\"container\">
        
            <a href=\"/\"><img height=\"100\" id=\"logo_website\" src=\"/images/logo.png\" alt=\"logo\"
                    width=\"200\" /></a>
            <div id=\"li_container\">
                <a href=\"/\"><li id=\"home_icon\"></li></a>
                <a href=\"{{path('profil_show',{'id':2})}}\"><li id=\"users_icon\"> </li></a>
                <a  href=\"{{ path('deconnection')}}\"><li id=\"deco_icon\"></li></a>
                <li class=\"active\" id=\"search_icon\"></li>
            </div>

                  <div id=\"li_container_responsive\">
            <div id=\"container_barre\">
            <li class=\"barre\"></li>
                <li class=\"barre\"></li>
                    <li class=\"barre\"></li>
                        </div>
            </div>
    </header>
    <div class=\"serachbox\">
                        <form name=\"myForm\" id=\"recherche\" action=\"{{path('recup')}}\" method=\"post\">
                            <input id=\"message\" type=\"text\" name=\"recherche\" placeholder=\"Rechercher\">
                            <input class=\"sendButton\" type=\"submit\"  value=\"valider\">

                        </form>
                </div>
<div class=\"container\">
            <div class=\"flexage\" id=\"flexage\">
     </div>
        {% block body %}
       
        {% endblock %}
 </div>
    <!-- Pied de page du Forum -->
    <footer>
        <div id=\"footer_container\">
            <div id=\"column\">
                <h2>Réalisé par :</h2>
               <img src=\"/images/logo_simplon.png\" id=\"logo_simplon\">
            </div>

            <div id=\"column\" style=\"border-left: 1px solid #f3f3f3;\">
            <h2>Contactez-nous !</h2>
            <p>Carrières: Postulez!</p>
            <p>Retrouvez nous sur:</p>
            <p>Signaler un problème</p>
            </div>
        </div>
    </footer>


        {% block javascripts %}

        {% endblock %}

 {% block javascriptzz %}
    
{% endblock %}



{% block js %}
        <script>
        //Document GET//
        bouton = document.getElementById('container_barre');
        responsive = document.getElementById('menu_responsive');
        sous_responsive = document.getElementById('cat');
        flex = document.getElementById('flexage');

        //Initialisation style//
        responsive.style.width = \"100%\";
        responsive.style.height = \"0px\";
        responsive.style.transition = \"0.6s\";
        flex.style.transition =\"0.6s\";
        flex.style.height =\"0px\";

        //Nav responsive//
        bouton.addEventListener(\"click\",function() {
        if (responsive.style.height ==\"0px\") {
            responsive.style.height = \"280px\";
            flex.style.transition =\"0.6s\";
            flex.style.height =\"280px\";
        }
            else {
                flex.style.transition =\"0.6s\";
                flex.style.height =\"0px\";
                responsive.style.height = \"0\";
            }
        });

        </script>
        
        {% endblock %}
    </body>
</html>
<script src=\"../app.js\"></script>

<style>
</style>", "base.html.twig", "C:\\Users\\utilisateur\\Desktop\\BonVersion\\ForumDemo\\templates\\base.html.twig");
    }
}
