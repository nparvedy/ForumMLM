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

/* profil/profil.html.twig */
class __TwigTemplate_6ad4df9db731e2d5d16045f1d9b39b313669db5ffda3c1a462d420057ab8a8d7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascriptzz' => [$this, 'block_javascriptzz'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        if ( !twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "     <div class=\"message-succes\">
          <p>";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "</p>
     </div>
";
        }
        // line 9
        echo "<br/><br/><br/><br/><br/><br/><br/><br/>

    <div class=\"profilrow\">
         <div class=\"colone-40\">
              <h2 class=\"h3ez\">Profil utilisateur</h2>

              <h4 class=\"h3ez\">Utilisateur : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15), "html", null, true);
        echo "</h4>
              <img class=\"imgUser\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "avatar", [], "any", false, false, false, 16), "html", null, true);
        echo "\" alt=\"\">
              <button id=\"upload\" type=\"submit\">Changer l'avatar</button>
              <h5 ><span>inscrit depuis :</span> ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "createdAT", [], "any", false, false, false, 18), "d/m/Y"), "html", null, true);
        echo "</h5>
              ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "candidat", [], "any", false, false, false, 19) == 1)) {
            // line 20
            echo "               <h3 class=\"h3ez\">Candidat dans la mission locale marseille</h3>
               ";
        }
        // line 22
        echo "  
  
     
         </div>
         <div class=\"colone-60\">

              <form class=\"\" action=\"\" method=\"post\">

                   <label for=\"\">Nom d'utilisateur</label>
                   <input class=\"inprof\" type=\"text\" minlength=6 maxlength=35 name=\"username\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "username", [], "any", false, false, false, 31), "html", null, true);
        echo "\" required>

                   <label for=\"\">Nom</label>
                   <input class=\"inprof\" type=\"text\" minlength=\"3\" name=\"lastname\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "lastname", [], "any", false, false, false, 34), "html", null, true);
        echo "\" required>

                   <label for=\"\">Prénom</label>
                   <input  class=\"inprof\" type=\"text\" name=\"firstname\" minlength=\"3\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "firstname", [], "any", false, false, false, 37), "html", null, true);
        echo "\" required>
                   <label for=\"\">Adresse</label>
                   <input id=\"adres\" class=\"inprof\" type=\"text\" name=\"address\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "address", [], "any", false, false, false, 39), "html", null, true);
        echo "\"required> <i class=\"fas fa-pen-square\"></i>
                   <label for=\"\">Code Postal</label>
                   <input id=\"cpos\" class=\"inprof\" type=\"tel\" name=\"zipcode\" maxlength=\"5\" minlength=\"5\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "zipcode", [], "any", false, false, false, 41), "html", null, true);
        echo "\" required >
                   <label for=\"\">Téléphone</label>
                   <input id=\"tel\" class=\"inprof\" type=\"tel\"  maxlength=\"14\" minlenght='14' name=\"phone\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "phone", [], "any", false, false, false, 43), "html", null, true);
        echo "\" required>
                   <label for=\"\">E-mail</label>
                   <input id=\"email\" class=\"inprof\" type=\"email\" name=\"email\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), "html", null, true);
        echo "\" required>
                   <label for=\"\">Mot de passe</label>
                   <input id=\"pass\" class=\"inprof\" type=\"password\" name=\"password\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "password", [], "any", false, false, false, 47), "html", null, true);
        echo "\" required>

                   <div class=\"\">
                        <button class=\"profiledit\" type=\"submit\" name=\"modifi\">Modifier</button>
                        <button class=\"canceledit\" type=\"submit\" name=\"annuler\">Annuler</button>

                   </div>

              </form>

  
         </div>
    </div>
 ";
        // line 60
        $this->displayBlock('javascriptzz', $context, $blocks);
        // line 93
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_javascriptzz($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascriptzz"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascriptzz"));

        // line 61
        echo "     <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

<script>
\$(document).ready(function(){
     \$(\".active\").click(function(){
          \$(\".serachbox\").toggle();

     });

});

\$(document).ready(function(){
    \$('.sendButton').prop('disabled',true);
    \$('#message').keyup(function(){
        \$('.sendButton').prop('disabled', this.value == \"\" ? true : false);
    })
});


\$(document).ready(function(){
     \$(\".inprof\").prop('disabled',true);
     \$(\".fa-pen-square\").click(function(){
          \$(\".inprof\").prop('disabled', this.value == \"\" ? true : false);
          \$(\"#upload\").css('visibility','visible');
          \$(\".profiledit\").css('visibility','visible');
          \$(\".canceledit\").css('visibility','visible');
     });
});

\$(\".message-succes\").fadeIn(1000).delay(5000).fadeOut(1000);
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 61,  187 => 60,  176 => 93,  174 => 60,  158 => 47,  153 => 45,  148 => 43,  143 => 41,  138 => 39,  133 => 37,  127 => 34,  121 => 31,  110 => 22,  106 => 20,  104 => 19,  100 => 18,  95 => 16,  91 => 15,  83 => 9,  77 => 7,  74 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

{% if message is not empty %}
     <div class=\"message-succes\">
          <p>{{message}}</p>
     </div>
{% endif %}<br/><br/><br/><br/><br/><br/><br/><br/>

    <div class=\"profilrow\">
         <div class=\"colone-40\">
              <h2 class=\"h3ez\">Profil utilisateur</h2>

              <h4 class=\"h3ez\">Utilisateur : {{user.username}}</h4>
              <img class=\"imgUser\" src=\"{{user.avatar}}\" alt=\"\">
              <button id=\"upload\" type=\"submit\">Changer l'avatar</button>
              <h5 ><span>inscrit depuis :</span> {{user.createdAT |date('d/m/Y')}}</h5>
              {% if user.candidat == 1 %}
               <h3 class=\"h3ez\">Candidat dans la mission locale marseille</h3>
               {% endif %}
  
  
     
         </div>
         <div class=\"colone-60\">

              <form class=\"\" action=\"\" method=\"post\">

                   <label for=\"\">Nom d'utilisateur</label>
                   <input class=\"inprof\" type=\"text\" minlength=6 maxlength=35 name=\"username\" value=\"{{user.username}}\" required>

                   <label for=\"\">Nom</label>
                   <input class=\"inprof\" type=\"text\" minlength=\"3\" name=\"lastname\" value=\"{{user.lastname}}\" required>

                   <label for=\"\">Prénom</label>
                   <input  class=\"inprof\" type=\"text\" name=\"firstname\" minlength=\"3\" value=\"{{user.firstname}}\" required>
                   <label for=\"\">Adresse</label>
                   <input id=\"adres\" class=\"inprof\" type=\"text\" name=\"address\" value=\"{{user.address}}\"required> <i class=\"fas fa-pen-square\"></i>
                   <label for=\"\">Code Postal</label>
                   <input id=\"cpos\" class=\"inprof\" type=\"tel\" name=\"zipcode\" maxlength=\"5\" minlength=\"5\" value=\"{{user.zipcode}}\" required >
                   <label for=\"\">Téléphone</label>
                   <input id=\"tel\" class=\"inprof\" type=\"tel\"  maxlength=\"14\" minlenght='14' name=\"phone\" value=\"{{user.phone}}\" required>
                   <label for=\"\">E-mail</label>
                   <input id=\"email\" class=\"inprof\" type=\"email\" name=\"email\" value=\"{{user.email}}\" required>
                   <label for=\"\">Mot de passe</label>
                   <input id=\"pass\" class=\"inprof\" type=\"password\" name=\"password\" value=\"{{user.password}}\" required>

                   <div class=\"\">
                        <button class=\"profiledit\" type=\"submit\" name=\"modifi\">Modifier</button>
                        <button class=\"canceledit\" type=\"submit\" name=\"annuler\">Annuler</button>

                   </div>

              </form>

  
         </div>
    </div>
 {% block javascriptzz %}
     <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

<script>
\$(document).ready(function(){
     \$(\".active\").click(function(){
          \$(\".serachbox\").toggle();

     });

});

\$(document).ready(function(){
    \$('.sendButton').prop('disabled',true);
    \$('#message').keyup(function(){
        \$('.sendButton').prop('disabled', this.value == \"\" ? true : false);
    })
});


\$(document).ready(function(){
     \$(\".inprof\").prop('disabled',true);
     \$(\".fa-pen-square\").click(function(){
          \$(\".inprof\").prop('disabled', this.value == \"\" ? true : false);
          \$(\"#upload\").css('visibility','visible');
          \$(\".profiledit\").css('visibility','visible');
          \$(\".canceledit\").css('visibility','visible');
     });
});

\$(\".message-succes\").fadeIn(1000).delay(5000).fadeOut(1000);
</script>
{% endblock %}

{% endblock %}

     ", "profil/profil.html.twig", "C:\\Users\\utilisateur\\Desktop\\BonVersion\\ForumDemo\\templates\\profil\\profil.html.twig");
    }
}
