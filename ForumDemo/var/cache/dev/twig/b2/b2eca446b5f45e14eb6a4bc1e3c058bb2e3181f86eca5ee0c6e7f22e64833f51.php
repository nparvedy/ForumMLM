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

/* ml/index.html.twig */
class __TwigTemplate_01cbd2d938c4ce23cea3088777ec4785e2f04e23ee7997b8745841dd31a0f75c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ml/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ml/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ml/index.html.twig", 1);
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
        echo "    <div class=\"tchat_contain\">
        <div id=\"title_tchat\">
            Tchat
        </div>

        <div class=\"block\"></div>

        <div id=\"users_online\">
            <p id=\"title_users\">
                Utilisateurs connectés<br/>
            </p>
            <br/><li class=\"users\"></li>
        <li class=\"users\"><img class=\"bouleCo\"src=\"../images/boule.png\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</img></li>
        </div>

        <!-- MESSAGE TCHAT -->
        <div
            class=\"messages\"
            id=\"test\"
            onscroll=\"blnScroll=false\"
            onfocus=\"blnScroll=true\"></div>

    </div>
    <!-- FIN MESSAGE TCHAT -->
</div>
<div class=\"input_contain\">

    <form method=\"POST\" action=\"\">
        <input
            type=\"text\"
            class=\"tchat_input\"
            name=\"message\"
            id=\"messageS\"
            placeholder=\"Ecrire ici..\">
        <input
            type=\"submit\"
            name=\"submit\"
            value=\"Envoyez votre message !\"
            id=\"envoi\"
            hidden=\"hidden\">
    </form>
</div>
<main>
    <div id=\"countain_forum\">
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 49
            echo "            <div id=\"forum\">
                <div id=\"title\">
                    <table>
                        <tr>
                            <th>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "</th>
                        </tr>
                    </table>
                </div>

                <table>
                    ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["section"], "subsections", [], "any", false, false, false, 59));
            foreach ($context['_seq'] as $context["_key"] => $context["subsection"]) {
                // line 60
                echo "                    
                        <tr> 
                            <td><a class=\"lienIndex\" href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test", ["id_subsection" => twig_get_attribute($this->env, $this->source, $context["subsection"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subsection"], "name", [], "any", false, false, false, 62), "html", null, true);
                echo "</a></td>

                        </tr>
                        
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subsection'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                </table>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
    </div>
    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 73
            echo " <a class=\"articleLast\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id_subsection" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "subsection", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73), "id_article" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\"> 
        <div id=\"article_recent\">
           <div id=\"title_postit\">
                ";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 76), "html", null, true);
            echo "
            </div>
            <div id=\"postit\">
                <p>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 79), "html", null, true);
            echo "</p>
                <input type=\"text\" id=\"username\"value=\"";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 80, $this->source); })()), "html", null, true);
            echo "\">
                <input type=\"text\" id=\"idid\" value=\"";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["idUser"]) || array_key_exists("idUser", $context) ? $context["idUser"] : (function () { throw new RuntimeError('Variable "idUser" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81), "html", null, true);
            echo "\" >
            </div>
        </div>
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "</main>





<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script>
    function getQueryStringValue(key) {
        return decodeURIComponent(window.location.search.replace(new RegExp(
            \"^(?:.*[&\\\\?]\" + encodeURIComponent(key).replace(/[\\.\\+\\*]/g, \"\\\\\$&\") + \"(?:\\\\=\" +
                    \"([^&]*))?)?.*\$\",
            \"i\"
        ), \"\$1\"));
    }

    \$('#envoi').click(function (e) {
        e.preventDefault(); // on empêche le bouton d'envoyer le formulaire
        // on sécurise les données
        message = document.getElementById('messageS').value;
        gets = getQueryStringValue('id');
        username = document.getElementById('username').value;
        idUser = document.getElementById('idid').value;
        console.log(username + idUser + gets +\" \"+ message);
        console.log('hallo');
        if (message != null) { // on vérifie que les variables ne sont pas vides
           console.log('halssso'); \$.ajax({
    
                url: \"config.php\", // on donne l'URL du fichier de traitement
                type: \"POST\", // la requête est de type POST
                data: {
                    message: (message),
                    gets: (gets),
                    username: (username),
                    idUser: (idUser)
                }
            });
            function scrollTchat() {}
            \$('#messages').append(\"<p>dit : \" + message + \"</p>\"); // on ajoute le message dans la zone prévue
            reset = document.getElementById('messageS');
            reset.value = \"\";

            setTimeout(function () {
                test.scrollTop = test.scrollHeight;
            }, 500);
        }
    });
        function cc() {
 \$('.block')
.load('tchat.php')
.fadeIn(\"slow\");
};
cc();
    setInterval(function time() {
        gets = getQueryStringValue('id');
        username = document.getElementById('username').value;

        \$.ajax({
            url: \"charger.php\",
            method: \"GET\",
            data: { //Initilisation des data à passer//
                id: JSON.stringify(gets),
                username: (username)
            },
            success: function (res) {
                \$('.messages').html(res);

            }
        })
    }, 500);
    var blnScroll = true;
    test = document.getElementById('test');
    test.style.overflowY = \"scroll\";
    var auto_refresh = setInterval(function cc() {
        if (blnScroll == true) {
            test.scrollTop = test.scrollHeight;
        } else {
            test.scrollTop = test.scrollTop;
        }
    }, 500);
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ml/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 86,  194 => 81,  190 => 80,  186 => 79,  180 => 76,  173 => 73,  169 => 72,  165 => 70,  157 => 67,  144 => 62,  140 => 60,  136 => 59,  127 => 53,  121 => 49,  117 => 48,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"tchat_contain\">
        <div id=\"title_tchat\">
            Tchat
        </div>

        <div class=\"block\"></div>

        <div id=\"users_online\">
            <p id=\"title_users\">
                Utilisateurs connectés<br/>
            </p>
            <br/><li class=\"users\"></li>
        <li class=\"users\"><img class=\"bouleCo\"src=\"../images/boule.png\">{{ username }}</img></li>
        </div>

        <!-- MESSAGE TCHAT -->
        <div
            class=\"messages\"
            id=\"test\"
            onscroll=\"blnScroll=false\"
            onfocus=\"blnScroll=true\"></div>

    </div>
    <!-- FIN MESSAGE TCHAT -->
</div>
<div class=\"input_contain\">

    <form method=\"POST\" action=\"\">
        <input
            type=\"text\"
            class=\"tchat_input\"
            name=\"message\"
            id=\"messageS\"
            placeholder=\"Ecrire ici..\">
        <input
            type=\"submit\"
            name=\"submit\"
            value=\"Envoyez votre message !\"
            id=\"envoi\"
            hidden=\"hidden\">
    </form>
</div>
<main>
    <div id=\"countain_forum\">
        {% for section in sections %}
            <div id=\"forum\">
                <div id=\"title\">
                    <table>
                        <tr>
                            <th>{{ section.name }}</th>
                        </tr>
                    </table>
                </div>

                <table>
                    {% for subsection in section.subsections %}
                    
                        <tr> 
                            <td><a class=\"lienIndex\" href=\"{{ path('test', {'id_subsection': subsection.id}) }}\">{{ subsection.name }}</a></td>

                        </tr>
                        
                    {% endfor %}
                </table>
            </div>
        {% endfor %}

    </div>
    {% for article in articles %}
 <a class=\"articleLast\" href=\"{{ path('article_show', {'id_subsection': article.subsection.id, 'id_article': article.id}) }}\"> 
        <div id=\"article_recent\">
           <div id=\"title_postit\">
                {{ article.name }}
            </div>
            <div id=\"postit\">
                <p>{{ article.content }}</p>
                <input type=\"text\" id=\"username\"value=\"{{ username }}\">
                <input type=\"text\" id=\"idid\" value=\"{{ idUser.id }}\" >
            </div>
        </div>
        </a>
    {% endfor %}
</main>





<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script>
    function getQueryStringValue(key) {
        return decodeURIComponent(window.location.search.replace(new RegExp(
            \"^(?:.*[&\\\\?]\" + encodeURIComponent(key).replace(/[\\.\\+\\*]/g, \"\\\\\$&\") + \"(?:\\\\=\" +
                    \"([^&]*))?)?.*\$\",
            \"i\"
        ), \"\$1\"));
    }

    \$('#envoi').click(function (e) {
        e.preventDefault(); // on empêche le bouton d'envoyer le formulaire
        // on sécurise les données
        message = document.getElementById('messageS').value;
        gets = getQueryStringValue('id');
        username = document.getElementById('username').value;
        idUser = document.getElementById('idid').value;
        console.log(username + idUser + gets +\" \"+ message);
        console.log('hallo');
        if (message != null) { // on vérifie que les variables ne sont pas vides
           console.log('halssso'); \$.ajax({
    
                url: \"config.php\", // on donne l'URL du fichier de traitement
                type: \"POST\", // la requête est de type POST
                data: {
                    message: (message),
                    gets: (gets),
                    username: (username),
                    idUser: (idUser)
                }
            });
            function scrollTchat() {}
            \$('#messages').append(\"<p>dit : \" + message + \"</p>\"); // on ajoute le message dans la zone prévue
            reset = document.getElementById('messageS');
            reset.value = \"\";

            setTimeout(function () {
                test.scrollTop = test.scrollHeight;
            }, 500);
        }
    });
        function cc() {
 \$('.block')
.load('tchat.php')
.fadeIn(\"slow\");
};
cc();
    setInterval(function time() {
        gets = getQueryStringValue('id');
        username = document.getElementById('username').value;

        \$.ajax({
            url: \"charger.php\",
            method: \"GET\",
            data: { //Initilisation des data à passer//
                id: JSON.stringify(gets),
                username: (username)
            },
            success: function (res) {
                \$('.messages').html(res);

            }
        })
    }, 500);
    var blnScroll = true;
    test = document.getElementById('test');
    test.style.overflowY = \"scroll\";
    var auto_refresh = setInterval(function cc() {
        if (blnScroll == true) {
            test.scrollTop = test.scrollHeight;
        } else {
            test.scrollTop = test.scrollTop;
        }
    }, 500);
</script>
{% endblock %}", "ml/index.html.twig", "C:\\Users\\utilisateur\\Desktop\\ForumDemo\\ForumDemo\\templates\\ml\\index.html.twig");
    }
}
