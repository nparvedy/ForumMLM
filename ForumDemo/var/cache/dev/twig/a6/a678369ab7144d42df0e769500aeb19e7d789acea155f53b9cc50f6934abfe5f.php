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
        // line 10
        echo "     <h2>Profil utilisateur</h2>

    <div class=\"profilrow\">
         <div class=\"colone-40\">
              <h4>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "username", [], "any", false, false, false, 14), "html", null, true);
        echo "</h4>
              <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "avatar", [], "any", false, false, false, 15), "html", null, true);
        echo "\" alt=\"\">
              <button id=\"upload\" type=\"submit\">Changer l'avatar</button>
              <h5> <span>inscrit depuis :</span> ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "createdAT", [], "any", false, false, false, 17), "d/m/Y"), "html", null, true);
        echo "</h5>
              ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "candidat", [], "any", false, false, false, 18) == 1)) {
            // line 19
            echo "               <h3>Candidat dans la mission locale marseille</h3>
               ";
        }
        // line 21
        echo "  
  
     
         </div>
         <div class=\"colone-60\">

              <form class=\"\" action=\"\" method=\"post\">

                   <label for=\"\">Pseudo</label>
                   <input class=\"inprof\" type=\"text\" minlength=6 maxlength=35 name=\"username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "username", [], "any", false, false, false, 30), "html", null, true);
        echo "\" required>

                   <label for=\"\">Nom</label>
                   <input class=\"inprof\" type=\"text\" minlength=\"3\" name=\"lastname\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "lastname", [], "any", false, false, false, 33), "html", null, true);
        echo "\" required>

                   <label for=\"\">Prénom</label>
                   <input  class=\"inprof\" type=\"text\" name=\"firstname\" minlength=\"3\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "firstname", [], "any", false, false, false, 36), "html", null, true);
        echo "\" required>
                   <label for=\"\">Adresse</label>
                   <input id=\"adres\" class=\"inprof\" type=\"text\" name=\"address\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "address", [], "any", false, false, false, 38), "html", null, true);
        echo "\"required> <i class=\"fas fa-pen-square\"></i>
                   <label for=\"\">Code Postal</label>
                   <input id=\"cpos\" class=\"inprof\" type=\"tel\" name=\"zipcode\" maxlength=\"5\" minlength=\"5\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "zipcode", [], "any", false, false, false, 40), "html", null, true);
        echo "\" required >
                   <label for=\"\">Téléphone</label>
                   <input id=\"tel\" class=\"inprof\" type=\"tel\"  maxlength=\"14\" minlenght='14' name=\"phone\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "phone", [], "any", false, false, false, 42), "html", null, true);
        echo "\" required>
                   <label for=\"\">E-mail</label>
                   <input id=\"email\" class=\"inprof\" type=\"email\" name=\"email\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), "html", null, true);
        echo "\" required>
                   <label for=\"\">Mot de passe</label>
                   <input id=\"pass\" class=\"inprof\" type=\"password\" name=\"password\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "password", [], "any", false, false, false, 46), "html", null, true);
        echo "\" required>

                   <div class=\"\">
                        <button class=\"profiledit\" type=\"submit\" name=\"modifi\">Modifier</button>
                        <button class=\"canceledit\" type=\"submit\" name=\"annuler\">Annuler</button>

                   </div>

              </form>

  
         </div>
    </div>
 ";
        // line 59
        $this->displayBlock('javascriptzz', $context, $blocks);
        // line 92
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_javascriptzz($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascriptzz"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascriptzz"));

        // line 60
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
        return array (  195 => 60,  185 => 59,  174 => 92,  172 => 59,  156 => 46,  151 => 44,  146 => 42,  141 => 40,  136 => 38,  131 => 36,  125 => 33,  119 => 30,  108 => 21,  104 => 19,  102 => 18,  98 => 17,  93 => 15,  89 => 14,  83 => 10,  77 => 7,  74 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

{% if message is not empty %}
     <div class=\"message-succes\">
          <p>{{message}}</p>
     </div>
{% endif %}
     <h2>Profil utilisateur</h2>

    <div class=\"profilrow\">
         <div class=\"colone-40\">
              <h4>{{user.username}}</h4>
              <img src=\"{{user.avatar}}\" alt=\"\">
              <button id=\"upload\" type=\"submit\">Changer l'avatar</button>
              <h5> <span>inscrit depuis :</span> {{user.createdAT |date('d/m/Y')}}</h5>
              {% if user.candidat == 1 %}
               <h3>Candidat dans la mission locale marseille</h3>
               {% endif %}
  
  
     
         </div>
         <div class=\"colone-60\">

              <form class=\"\" action=\"\" method=\"post\">

                   <label for=\"\">Pseudo</label>
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

     ", "profil/profil.html.twig", "C:\\Users\\utilisateur\\Desktop\\ForumDemo\\ForumDemo\\templates\\profil\\profil.html.twig");
    }
}
