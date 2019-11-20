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

/* ml/test.html.twig */
class __TwigTemplate_8f0b521b85422d7020e157c32cda1dd0c28771af5064019ae37d1757445bd2b7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ml/test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ml/test.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ml/test.html.twig", 1);
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

        echo "<main>
    <div id=\"container_register\">
        <div class=\"container_register\">
            <form method=\"post\" enctype=\"multipart/form-data\" action=\"\" id=\"formulaire_register\"
    style=\"width: 100%;\">

                <label for=\"input_register\">Nom d'utilisateur</label>
                    <input type=\"text\" id=\"input_register\" name=\"username\" placeholder=\"Nom d'utilisateur\">
                    <hr>
                    <label for=\"input_register\">Mot de passe</label>
                    <input type=\"password\" id=\"input_register\" name=\"password\" placeholder=\"Mot de passe\">
                    <hr>
                     <label for=\"input_register\">Prénom</label>
                    <input type=\"text\" id=\"input_register\" name=\"firstname\" placeholder=\"Prénom\">
                    <hr>
                     <label for=\"input_register\">Nom de famille</label>
                    <input type=\"text\" id=\"input_register\" name=\"lastname\" placeholder=\"Nom de famille\">
                    <hr>
                     <label for=\"input_register\">Homme ou femme ?</label>
                    <select name=\"sex\">
                        <option value=\"homme\">Homme</option>
                        <option value=\"femme\">Femme</option>
                    </select>
                    <hr>
                     <label for=\"input_register\">Adresse mail</label>
                    <input type=\"text\" id=\"input_register\" name=\"email\" placeholder=\"Adresse mail\"required>

                     <label for=\"input_register\">Adresse de résidence</label>
                    <input type=\"text\" id=\"input_register\" name=\"address\" placeholder=\"Adresse de résidence\"required>
                    <hr>
                     <label for=\"input_register\">Code postal</label>
                    <input type=\"text\" id=\"input_register\" name=\"zipcode\" placeholder=\"Code postal\" required>
                    <hr>
                     <label for=\"input_register\">Mot de passe</label>
                    <input type=\"date\" id=\"input_register\" max=\"2050-06-25\" min=\"1900-08-13\" name=\"birthday\" required>
                    <hr>
                    <label for=\"input_register\">Etes-vous inscrit à la mission local ?</label>
                    <select name=\"candidat\">
                        <option value=\"oui\">Oui</option>
                        <option value=\"non\">Non</option>
                    </select>
                    <hr>
                    <label for=\"input_register\">Votre numéro de téléphone</label>
                    <input type=\"text\" id=\"input_register\" name=\"phone\" placeholder=\"phone\">
                    <hr>
                    <label for=\"input_register\">Avatar ( Facultatif )</label>
                    <input type=\"file\" name=\"avatar\" id=\"input_register\">
                <br />
                <button type=\"submit\" id=\"envoyer\">M'inscrire</button>
            </form><br>
            <button id=\"button_select_choice\" onclick=\"connexion()\">Se connecter</button>
        </div>
    </div>
            <div id=\"container_co\">
                    <form method=\"post\" action=\"\" style=\"display:flex;\">
<input type=\"text\" name=\"usernameco\" id=\"input_login\" placeholder=\"Nom d'utilisateur\">
<input type=\"password\" name=\"passwordco\" id=\"input_login\" placeholder=\"Mot de passe\"><br/>
<button type=\"submit\" id=\"envoyer_login\">Confirmer</button>
</form>
<button id=\"button_select_choice\" onclick=\"register()\">S'inscrire</button>
        </div>
        <div id=\"choice\">
<button id=\"button_select_choice\" onclick=\"connexion()\">Se connecter</button>
<button id=\"button_select_choice\" onclick=\"register()\">S'inscrire</button>
</div>
        ";
        // line 68
        if ((isset($context["confirm"]) || array_key_exists("confirm", $context) ? $context["confirm"] : (function () { throw new RuntimeError('Variable "confirm" does not exist.', 68, $this->source); })())) {
            // line 69
            echo "<div id=\"succes\"><p>";
            echo twig_escape_filter($this->env, (isset($context["confirm"]) || array_key_exists("confirm", $context) ? $context["confirm"] : (function () { throw new RuntimeError('Variable "confirm" does not exist.', 69, $this->source); })()), "html", null, true);
            echo "</p></div>
";
        }
        // line 71
        echo "        ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 71, $this->source); })())) {
            // line 72
            echo "<div id=\"error\"><p>";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 72, $this->source); })()), "html", null, true);
            echo "</p></div>
";
        }
        // line 74
        echo "</main>





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "  <script type=\"text/javascript\">
    function connexion() {
         var connexion = document.getElementById('container_co');
         var choice = document.getElementById('choice');
         var register = document.getElementById('container_register');

        register.style.display = \"none\";
        connexion.style.display = \"block\";
        choice.style.display = \"none\";

    }
    
    function register() {
        var register = document.getElementById('container_register');
        var choice = document.getElementById('choice');
        var connexion = document.getElementById('container_co');

        connexion.style.display = \"none\";
        register.style.display = \"block\";
        choice.style.display = \"none\";
    }

    function timeco() { 
        var succes = document.getElementById('succes');
        var error = document.getElementById('error');

        succes.style.display = \"none\";
        error.style.display = \"none\";
        alert('ok') }

setTimeout(timeco, 5000);
    </script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ml/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 83,  168 => 82,  152 => 74,  146 => 72,  143 => 71,  137 => 69,  135 => 68,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}<main>
    <div id=\"container_register\">
        <div class=\"container_register\">
            <form method=\"post\" enctype=\"multipart/form-data\" action=\"\" id=\"formulaire_register\"
    style=\"width: 100%;\">

                <label for=\"input_register\">Nom d'utilisateur</label>
                    <input type=\"text\" id=\"input_register\" name=\"username\" placeholder=\"Nom d'utilisateur\">
                    <hr>
                    <label for=\"input_register\">Mot de passe</label>
                    <input type=\"password\" id=\"input_register\" name=\"password\" placeholder=\"Mot de passe\">
                    <hr>
                     <label for=\"input_register\">Prénom</label>
                    <input type=\"text\" id=\"input_register\" name=\"firstname\" placeholder=\"Prénom\">
                    <hr>
                     <label for=\"input_register\">Nom de famille</label>
                    <input type=\"text\" id=\"input_register\" name=\"lastname\" placeholder=\"Nom de famille\">
                    <hr>
                     <label for=\"input_register\">Homme ou femme ?</label>
                    <select name=\"sex\">
                        <option value=\"homme\">Homme</option>
                        <option value=\"femme\">Femme</option>
                    </select>
                    <hr>
                     <label for=\"input_register\">Adresse mail</label>
                    <input type=\"text\" id=\"input_register\" name=\"email\" placeholder=\"Adresse mail\"required>

                     <label for=\"input_register\">Adresse de résidence</label>
                    <input type=\"text\" id=\"input_register\" name=\"address\" placeholder=\"Adresse de résidence\"required>
                    <hr>
                     <label for=\"input_register\">Code postal</label>
                    <input type=\"text\" id=\"input_register\" name=\"zipcode\" placeholder=\"Code postal\" required>
                    <hr>
                     <label for=\"input_register\">Mot de passe</label>
                    <input type=\"date\" id=\"input_register\" max=\"2050-06-25\" min=\"1900-08-13\" name=\"birthday\" required>
                    <hr>
                    <label for=\"input_register\">Etes-vous inscrit à la mission local ?</label>
                    <select name=\"candidat\">
                        <option value=\"oui\">Oui</option>
                        <option value=\"non\">Non</option>
                    </select>
                    <hr>
                    <label for=\"input_register\">Votre numéro de téléphone</label>
                    <input type=\"text\" id=\"input_register\" name=\"phone\" placeholder=\"phone\">
                    <hr>
                    <label for=\"input_register\">Avatar ( Facultatif )</label>
                    <input type=\"file\" name=\"avatar\" id=\"input_register\">
                <br />
                <button type=\"submit\" id=\"envoyer\">M'inscrire</button>
            </form><br>
            <button id=\"button_select_choice\" onclick=\"connexion()\">Se connecter</button>
        </div>
    </div>
            <div id=\"container_co\">
                    <form method=\"post\" action=\"\" style=\"display:flex;\">
<input type=\"text\" name=\"usernameco\" id=\"input_login\" placeholder=\"Nom d'utilisateur\">
<input type=\"password\" name=\"passwordco\" id=\"input_login\" placeholder=\"Mot de passe\"><br/>
<button type=\"submit\" id=\"envoyer_login\">Confirmer</button>
</form>
<button id=\"button_select_choice\" onclick=\"register()\">S'inscrire</button>
        </div>
        <div id=\"choice\">
<button id=\"button_select_choice\" onclick=\"connexion()\">Se connecter</button>
<button id=\"button_select_choice\" onclick=\"register()\">S'inscrire</button>
</div>
        {% if confirm %}
<div id=\"succes\"><p>{{ confirm }}</p></div>
{% endif %}
        {% if error %}
<div id=\"error\"><p>{{ error }}</p></div>
{% endif %}
</main>





{% endblock %}

  {% block javascripts %}
  <script type=\"text/javascript\">
    function connexion() {
         var connexion = document.getElementById('container_co');
         var choice = document.getElementById('choice');
         var register = document.getElementById('container_register');

        register.style.display = \"none\";
        connexion.style.display = \"block\";
        choice.style.display = \"none\";

    }
    
    function register() {
        var register = document.getElementById('container_register');
        var choice = document.getElementById('choice');
        var connexion = document.getElementById('container_co');

        connexion.style.display = \"none\";
        register.style.display = \"block\";
        choice.style.display = \"none\";
    }

    function timeco() { 
        var succes = document.getElementById('succes');
        var error = document.getElementById('error');

        succes.style.display = \"none\";
        error.style.display = \"none\";
        alert('ok') }

setTimeout(timeco, 5000);
    </script>
  {% endblock %}", "ml/test.html.twig", "C:\\Users\\utilisateur\\Desktop\\ForumDemo\\ForumDemo\\templates\\ml\\test.html.twig");
    }
}
