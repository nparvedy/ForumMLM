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

/* ml/forum.html.twig */
class __TwigTemplate_a27d8f5b079c040a96d09abecf10127382da7047df52fdcc281f0dcf6013576e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ml/forum.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ml/forum.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ml/forum.html.twig", 1);
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
    <main>
        <!-- Container du Tchat Forum -->
        <div class=\"container_tchat\">
            <div class=\"bandeau_tchat\">TCHAT</div>
            <div class=\"onglet_tchat\">
                <div class=\"onglet_tchat\">
                    <p>Général</p>
                    <p>Rse</p>
                    <p>Emploie</p>
                    <p>Me former</p>
                    <p>Mécenat</p>
                    <p>Partenaire</p>
                </div>
            </div>


            <!-- Tchat / Utilisateurs connectées -->
            <div class=\"container_dialogue_users\">
                    <div class=\"tchat_conversation\">
                            <input type=\"text\" autofocus>
                
                            </div>
            <div class=\"tchat_user_position\">
                <div class=\"tchat_user_connected\">
                    <div class=\"bandeau_tchat_user_connected\">
                        <p>Utilisateurs</p>
                    </div>
                </div>
            </div>

        </div>
            <!-- Tchat / Utilisateurs Close -->

        </div>
        <!-- Container du Tchat Forum Close -->
    </main>

    
    <div class=\"forum\">
    <!-- Container du Forum -->
    <div class=\"forum_section\">
        <!-- Grande section du Forum -->
        <section>
            <h2>Première catégorie</h2>
            <div class=\"section_nav_right\">
                <h3>Topics</h3>
                <h3>Posts</h3>
                <h3>Last post</h3>
            </div>
        </section>
        <!-- Petite section du Forum -->
        <div class=\"sous_section\">
            <h2>Sous section</h2>
            <!-- <div class=\"sous_section_nav_right\"><h3>1</h3><h3>1</h3><h3>LeBgDu13</h3></div> -->
        </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
                <h2>Sous section</h2>
            </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <!-- Grande section du Forum -->
        <section>
            <h2>Section</h2>
            <div class=\"section_nav_right\">
                <h3>Topics</h3>
                <h3>Posts</h3>
                <h3>Last post</h3>
            </div>
        </section>
        <!-- Petite section du Forum -->
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
                <h2>Sous section</h2>
            </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <section>
            <!-- Grande section du Forum -->
            <h2>Section</h2>
            <div class=\"section_nav_right\">
                <h3>Topics</h3>
                <h3>Posts</h3>
                <h3>Last post</h3>
            </div>
        </section>
        <!-- Petite section du Forum -->
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
                <h2>Sous section</h2>
            </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <!-- Grande section du Forum -->
        <section>
            <h2>Section</h2>
            <div class=\"section_nav_right\">
                <h3>Topics</h3>
                <h3>Posts</h3>
                <h3>Last post</h3>
            </div>
        </section>
        <!-- Petite section du Forum -->
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
                <h2>Sous section</h2>
            </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <section>
            <!-- Grande section du Forum -->
            <h2>Section</h2>
            <div class=\"section_nav_right\">
                <h3>Topics</h3>
                <h3>Posts</h3>
                <h3>Last post</h3>
            </div>
        </section>
        <!-- Petite section du Forum -->
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
                <h2>Sous section</h2>
            </div>
        <!-- Grande section du Forum -->
        <section>
            <h2>Section</h2>
            <div class=\"section_nav_right\">
                <h3>Topics</h3>
                <h3>Posts</h3>
                <h3>Last post</h3>
            </div>
        </section>
        <!-- Petite section du Forum -->
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
                <h2>Sous section</h2>
            </div>
    </div>


    <div class=\"post_it_section\">
        <div class=\"post_it_bandeau\"><h3>Dernier articles</h3></div>
        <div class=\"post_it\"></div>
        <div class=\"sous_post_it\"></div>
        <div class=\"sous_post_it\"></div>
        <div class=\"sous_post_it\"></div>
        <div class=\"sous_post_it\"></div>
        <div class=\"sous_post_it\"></div>

    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ml/forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}

    <main>
        <!-- Container du Tchat Forum -->
        <div class=\"container_tchat\">
            <div class=\"bandeau_tchat\">TCHAT</div>
            <div class=\"onglet_tchat\">
                <div class=\"onglet_tchat\">
                    <p>Général</p>
                    <p>Rse</p>
                    <p>Emploie</p>
                    <p>Me former</p>
                    <p>Mécenat</p>
                    <p>Partenaire</p>
                </div>
            </div>


            <!-- Tchat / Utilisateurs connectées -->
            <div class=\"container_dialogue_users\">
                    <div class=\"tchat_conversation\">
                            <input type=\"text\" autofocus>
                
                            </div>
            <div class=\"tchat_user_position\">
                <div class=\"tchat_user_connected\">
                    <div class=\"bandeau_tchat_user_connected\">
                        <p>Utilisateurs</p>
                    </div>
                </div>
            </div>

        </div>
            <!-- Tchat / Utilisateurs Close -->

        </div>
        <!-- Container du Tchat Forum Close -->
    </main>

    
    <div class=\"forum\">
    <!-- Container du Forum -->
    <div class=\"forum_section\">
        <!-- Grande section du Forum -->
        <section>
            <h2>Première catégorie</h2>
            <div class=\"section_nav_right\">
                <h3>Topics</h3>
                <h3>Posts</h3>
                <h3>Last post</h3>
            </div>
        </section>
        <!-- Petite section du Forum -->
        <div class=\"sous_section\">
            <h2>Sous section</h2>
            <!-- <div class=\"sous_section_nav_right\"><h3>1</h3><h3>1</h3><h3>LeBgDu13</h3></div> -->
        </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
                <h2>Sous section</h2>
            </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <!-- Grande section du Forum -->
        <section>
            <h2>Section</h2>
            <div class=\"section_nav_right\">
                <h3>Topics</h3>
                <h3>Posts</h3>
                <h3>Last post</h3>
            </div>
        </section>
        <!-- Petite section du Forum -->
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
                <h2>Sous section</h2>
            </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <section>
            <!-- Grande section du Forum -->
            <h2>Section</h2>
            <div class=\"section_nav_right\">
                <h3>Topics</h3>
                <h3>Posts</h3>
                <h3>Last post</h3>
            </div>
        </section>
        <!-- Petite section du Forum -->
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
                <h2>Sous section</h2>
            </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <!-- Grande section du Forum -->
        <section>
            <h2>Section</h2>
            <div class=\"section_nav_right\">
                <h3>Topics</h3>
                <h3>Posts</h3>
                <h3>Last post</h3>
            </div>
        </section>
        <!-- Petite section du Forum -->
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
                <h2>Sous section</h2>
            </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <section>
            <!-- Grande section du Forum -->
            <h2>Section</h2>
            <div class=\"section_nav_right\">
                <h3>Topics</h3>
                <h3>Posts</h3>
                <h3>Last post</h3>
            </div>
        </section>
        <!-- Petite section du Forum -->
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
                <h2>Sous section</h2>
            </div>
        <!-- Grande section du Forum -->
        <section>
            <h2>Section</h2>
            <div class=\"section_nav_right\">
                <h3>Topics</h3>
                <h3>Posts</h3>
                <h3>Last post</h3>
            </div>
        </section>
        <!-- Petite section du Forum -->
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
            <h2>Sous section</h2>
        </div>
        <div class=\"sous_section\">
                <h2>Sous section</h2>
            </div>
    </div>


    <div class=\"post_it_section\">
        <div class=\"post_it_bandeau\"><h3>Dernier articles</h3></div>
        <div class=\"post_it\"></div>
        <div class=\"sous_post_it\"></div>
        <div class=\"sous_post_it\"></div>
        <div class=\"sous_post_it\"></div>
        <div class=\"sous_post_it\"></div>
        <div class=\"sous_post_it\"></div>

    </div>
</div>
{% endblock %}", "ml/forum.html.twig", "C:\\Users\\Sènzo\\Desktop\\POPODEPIED\\ForumDemo\\ForumDemo\\templates\\ml\\forum.html.twig");
    }
}
