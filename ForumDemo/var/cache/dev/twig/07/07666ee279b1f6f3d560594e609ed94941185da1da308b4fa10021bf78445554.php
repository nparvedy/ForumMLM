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

/* site/developpeur.html.twig */
class __TwigTemplate_b11aa3a4e4c28ade9020412c6f490ebfbd14e0885a5f74bbe8d572ebe24c0cbb extends \Twig\Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/developpeur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/developpeur.html.twig"));

        // line 1
        echo "
<head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/css/styleAdminLogin.css\">
        <script defer src=\"https://use.fontawesome.com/releases/v5.0.8/js/solid.js\" integrity=\"sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l\" crossorigin=\"anonymous\">
\t\t</script>
        <script defer src=\"https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js\" integrity=\"sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c\" crossorigin=\"anonymous\">
        </script>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>
";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
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

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"col-xs-12 col-md-4\">
            <a  href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\"><img src=\"/imagesAdmin/logo.png\"/></a>
        </div>
    
        <div class=\"col-xs-12 col-md-8\">        
            <h4>Mission Locale Marseille</h4>
        </div>
    </nav>


\t<div class=\"container\" style=\"padding-right: 5%; padding-left: 5%; text-align:center; \">
\t\t<div class=\"row textCenter carteA numerique \">
\t\t\t    
\t\t\t\t<div   style=\" \" class=\"col-xs-12 col-md-6 textCenter \" ><img src=\"/imagesAdmin/developpeur.jpg\" width=\"200px\" height=\"225px\" class=\"img-responsive \"/></div>
\t\t\t
\t\t\t    <div class=\"col-xs-12 col-md-6 textLeft contenuC\">
\t\t\t\t\t<div class=\"col-xs-12\"><strong>
\t\t\t\t\t\t<h2>Hmzeh Bassissi</h2></strong></div>\t\t\t\t
\t\t\t\t\t<div class=\"col-xs-12\"><strong>Développeur WEB</strong></div>
\t\t\t\t\t<div class=\"col-xs-12\"><srtrong><i class=\"fas fa-mobile-alt\"></i></srtrong> <strong>0782440117</strong>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12\">   
\t\t\t\t\t\t<a href=\"mailto:?to=hamzehbassissi@gmail.com\">
\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i><strong>
\t\t\t\t\t\t hamzehbassissi@gmail.com
\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/developpeur.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 16,  123 => 14,  113 => 13,  95 => 11,  76 => 4,  66 => 13,  63 => 12,  61 => 11,  51 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Login{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/css/styleAdminLogin.css\">
        <script defer src=\"https://use.fontawesome.com/releases/v5.0.8/js/solid.js\" integrity=\"sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l\" crossorigin=\"anonymous\">
\t\t</script>
        <script defer src=\"https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js\" integrity=\"sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c\" crossorigin=\"anonymous\">
        </script>
        {% block stylesheets %}{% endblock %}
</head>
{% block body %}
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"col-xs-12 col-md-4\">
            <a  href=\"{{path('admin')}}\"><img src=\"/imagesAdmin/logo.png\"/></a>
        </div>
    
        <div class=\"col-xs-12 col-md-8\">        
            <h4>Mission Locale Marseille</h4>
        </div>
    </nav>


\t<div class=\"container\" style=\"padding-right: 5%; padding-left: 5%; text-align:center; \">
\t\t<div class=\"row textCenter carteA numerique \">
\t\t\t    
\t\t\t\t<div   style=\" \" class=\"col-xs-12 col-md-6 textCenter \" ><img src=\"/imagesAdmin/developpeur.jpg\" width=\"200px\" height=\"225px\" class=\"img-responsive \"/></div>
\t\t\t
\t\t\t    <div class=\"col-xs-12 col-md-6 textLeft contenuC\">
\t\t\t\t\t<div class=\"col-xs-12\"><strong>
\t\t\t\t\t\t<h2>Hmzeh Bassissi</h2></strong></div>\t\t\t\t
\t\t\t\t\t<div class=\"col-xs-12\"><strong>Développeur WEB</strong></div>
\t\t\t\t\t<div class=\"col-xs-12\"><srtrong><i class=\"fas fa-mobile-alt\"></i></srtrong> <strong>0782440117</strong>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12\">   
\t\t\t\t\t\t<a href=\"mailto:?to=hamzehbassissi@gmail.com\">
\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i><strong>
\t\t\t\t\t\t hamzehbassissi@gmail.com
\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t{% endblock %}", "site/developpeur.html.twig", "C:\\Users\\Sènzo\\Desktop\\POPODEPIED\\ForumDemo\\ForumDemo\\templates\\site\\developpeur.html.twig");
    }
}
