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

/* search/searchresult.html.twig */
class __TwigTemplate_94451732388593ecba61be8f908ae3bfac7142cfe47e00a53f3ea55949c2c292 extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/searchresult.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/searchresult.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search/searchresult.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Hello SearchController! ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
     ";
        // line 14
        echo "
     <div class=\"resultcontent\">
          ";
        // line 16
        if ((isset($context["articles"]) || array_key_exists("articles", $context))) {
            // line 17
            echo "          ";
            if ((twig_length_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 17, $this->source); })())) == 0)) {
                // line 18
                echo "          <div class=\"searchtitle\">
               <h2>Désolé, aucun résultat pour votre recherche</h2>

          </div>
          ";
            } else {
                // line 23
                echo "          <div class=\"searchtitle\">
               <h2>Resultat de la recherche ";
                // line 24
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 24, $this->source); })())), "html", null, true);
                echo "</h2>
          </div>
          ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 26, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 27
                    echo "               <div class=\"sectionrow\">
                    <h3>";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 28), "html", null, true);
                    echo "</h3>

                    <p>";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 30), "html", null, true);
                    echo "</p>
                    <button class=\"button\"><a href=\"#\"><span>Lire la suite </span></a></button>
               </div>
               <div class=\"row\">
                    <div class=\"\">
                         <h5>Ecrit par ";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "user", [], "any", false, false, false, 35), "username", [], "any", false, false, false, 35), "html", null, true);
                    echo " le  ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 35), "d/m/Y"), "html", null, true);
                    echo " dans la section ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "subsection", [], "any", false, false, false, 35), "section", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                    echo "</h5>
                    </div>
               </div>

          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "          ";
            }
            // line 41
            echo "          ";
        }
        // line 42
        echo "
     </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "search/searchresult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 42,  153 => 41,  150 => 40,  135 => 35,  127 => 30,  122 => 28,  119 => 27,  115 => 26,  110 => 24,  107 => 23,  100 => 18,  97 => 17,  95 => 16,  91 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Hello SearchController! {% endblock %}

{% block body %}

     {# pour tests
     {% if not app.user.username %}
     <p>User not found</p>
     {% else %}
     <p>User : {{app.user.username}}</p>
     {% endif %}
     #}

     <div class=\"resultcontent\">
          {% if articles is defined %}
          {% if articles | length == 0 %}
          <div class=\"searchtitle\">
               <h2>Désolé, aucun résultat pour votre recherche</h2>

          </div>
          {% else %}
          <div class=\"searchtitle\">
               <h2>Resultat de la recherche {{articles | length}}</h2>
          </div>
          {% for article in articles %}
               <div class=\"sectionrow\">
                    <h3>{{article.name}}</h3>

                    <p>{{article.content}}</p>
                    <button class=\"button\"><a href=\"#\"><span>Lire la suite </span></a></button>
               </div>
               <div class=\"row\">
                    <div class=\"\">
                         <h5>Ecrit par {{article.user.username}} le  {{article.createdAt | date('d/m/Y')}} dans la section {{article.subsection.section.name}}</h5>
                    </div>
               </div>

          {% endfor %}
          {% endif %}
          {% endif %}

     </div>

{% endblock body %}
", "search/searchresult.html.twig", "C:\\Users\\utilisateur\\Desktop\\ForumDemo\\ForumDemo\\templates\\search\\searchresult.html.twig");
    }
}
