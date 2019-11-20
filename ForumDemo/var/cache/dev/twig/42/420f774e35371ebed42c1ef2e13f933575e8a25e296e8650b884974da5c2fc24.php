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

/* ml/reset.html.twig */
class __TwigTemplate_becfbf318b66815fc5677379f1863b434b4c2651a4c115a67a0576aeff9c3b73 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ml/reset.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ml/reset.html.twig"));

        // line 1
        echo "
<html lang=\"en\">
<head>
  <title>Récupération mot de passe - Mission local</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css\">
</head>
<body>
<style>
body {
    background:#e1e1e1;
    margin-top: 100px;
}
</style>
<div class=\"container\">
   ";
        // line 17
        if ((isset($context["confirm"]) || array_key_exists("confirm", $context) ? $context["confirm"] : (function () { throw new RuntimeError('Variable "confirm" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "<p>";
            echo twig_escape_filter($this->env, (isset($context["confirm"]) || array_key_exists("confirm", $context) ? $context["confirm"] : (function () { throw new RuntimeError('Variable "confirm" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "</p>
";
        }
        // line 20
        echo "  <h2>Recupération du mot de passe</h2>
  <form action=\"\" method=\"POST\">
    <div class=\"form-group\">
      <label for=\"email\">Email :</label>
      <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Entrer votre adresse email\" name=\"email\">
    </div>
    <button type=\"submit\" class=\"btn btn-default\">Confirmer</button>
  </form>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ml/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  63 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<html lang=\"en\">
<head>
  <title>Récupération mot de passe - Mission local</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css\">
</head>
<body>
<style>
body {
    background:#e1e1e1;
    margin-top: 100px;
}
</style>
<div class=\"container\">
   {% if confirm %}
<p>{{ confirm }}</p>
{% endif %}
  <h2>Recupération du mot de passe</h2>
  <form action=\"\" method=\"POST\">
    <div class=\"form-group\">
      <label for=\"email\">Email :</label>
      <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Entrer votre adresse email\" name=\"email\">
    </div>
    <button type=\"submit\" class=\"btn btn-default\">Confirmer</button>
  </form>
</div>
", "ml/reset.html.twig", "C:\\Users\\Sènzo\\Desktop\\POPODEPIED\\ForumDemo\\ForumDemo\\templates\\ml\\reset.html.twig");
    }
}
