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

/* Post/details.html.twig */
class __TwigTemplate_9baa7f0ce4ca785cb4dafe5f20894a73 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Post/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Post/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Post/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Post Details";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Post Details</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

    ";
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 119
        echo "

    ";
        // line 121
        $this->displayBlock('javascripts', $context, $blocks);
        // line 137
        echo "</head>
<body>


<!-- *** Header Area Start *** -->
  <header class=\"header-area header-sticky\">

        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- *** Logo Start *** -->
                    <a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" class=\"logo\">
                        <img src=\"assets/images/logo.png\" alt=\"\">
                    </a>
                    <!-- *** Logo End *** -->
                    
                    <!-- *** Search End *** -->
                    <div class=\"search-input\">
                      <form id=\"search\" action=\"#\">
                        <input type=\"text\" placeholder=\"Type Something\" id='searchText' name=\"searchKeyword\" onkeypress=\"handle\" />
                        <i class=\"fa fa-search\"></i>
                      </form>
                    </div>
                    <!-- *** Search End *** -->
                    <!-- *** Menu Start *** -->
                    <ul class=\"nav\"> 
                        <li><a href=\"index.html\" >Home</a></li>
                        <li><a href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse");
        echo "\">Browse</a></li>
                        <li><a href=\"";
        // line 165
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_details");
        echo "\">Details</a></li>
                        <li><a href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_streams");
        echo "\">Streams</a></li>
                        <li><a href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        echo "\" class=\"active\">Profile <img src=\"assets/images/profile-header.jpg\" alt=\"\"></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- *** Menu End *** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- *** Header Area End *** -->

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-content\">
            <div class=\"post\">


<a href=\"";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listPost");
        echo "\" class=\"btn btn-secondary\">List Posts</a>
    <h3>";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 187, $this->source); })()), "titre", [], "any", false, false, false, 187), "html", null, true);
        echo "</h3>
    <p>";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 188, $this->source); })()), "contenuPub", [], "any", false, false, false, 188), "html", null, true);
        echo "</p>
    <p>Date: ";
        // line 189
        ((twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 189, $this->source); })()), "datePub", [], "any", false, false, false, 189)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 189, $this->source); })()), "datePub", [], "any", false, false, false, 189), "format", ["Y-m-d H:i:s"], "method", false, false, false, 189), "html", null, true))) : (print ("")));
        echo "</p>
    <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 190, $this->source); })()), "file", [], "any", false, false, false, 190))), "html", null, true);
        echo "\" alt=\"Image\" class=\"post-image\">

    <!-- Afficher les commentaires -->
    <h3>Commentaires:</h3>
    <ul class=\"comments-list\">
        ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 195, $this->source); })()), "comments", [], "any", false, false, false, 195));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 196
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "contenuComment", [], "any", false, false, false, 196), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "    </ul>

    <!-- Ajouter un commentaire -->
    <form method=\"post\" action=\"";
        // line 201
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_comment");
        echo "\" class=\"comment-form\">
        <label for=\"contenuComment\">Contenu du commentaire</label>
        <input type=\"text\" name=\"contenuComment\">
        <input type=\"hidden\" name=\"postId\" value=\"";
        // line 204
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 204, $this->source); })()), "id", [], "any", false, false, false, 204), "html", null, true);
        echo "\">
        <button type=\"submit\" class=\"button button5\">Ajouter un commentaire</button>
    </form>

    <!-- Actions sur le post -->
    <div class=\"post-actions\">
        <button class=\"likeButton\" data-post-id=\"";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 210, $this->source); })()), "id", [], "any", false, false, false, 210), "html", null, true);
        echo "\">Like</button>
        <button class=\"dislikeButton\" data-post-id=\"";
        // line 211
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 211, $this->source); })()), "id", [], "any", false, false, false, 211), "html", null, true);
        echo "\">Dislike</button>
        <a href=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletePost", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 212, $this->source); })()), "id", [], "any", false, false, false, 212)]), "html", null, true);
        echo "\" class=\"button button5 deleteButton\">Delete</a>
        <a href=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editPost", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 213, $this->source); })()), "id", [], "any", false, false, false, 213)]), "html", null, true);
        echo "\" class=\"button button5 editButton\">Edit</a>
        <span>Likes: ";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 214, $this->source); })()), "likes", [], "any", false, false, false, 214), "html", null, true);
        echo "</span>
        <span>Dislikes: ";
        // line 215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 215, $this->source); })()), "dislikes", [], "any", false, false, false, 215), "html", null, true);
        echo "</span>
    </div>

</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-cyborg-gaming.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
    
        <style>
        /* Styles pour le texte en blanc */
        body, .main-nav a, .search-input input, .search-input i, .nav a,
        form label, form input[type=\"text\"], form input[type=\"date\"], form button {
            color: #ffffff; /* Texte en blanc */
        }
        /* Styles pour les messages d'erreur en rouge */
        .error-message {
            color: #ff0000; /* Rouge */
            font-size: 14px;
        }
        /* Styles pour le formulaire */
        form {
            margin-top: 20px;
        }

        /* Styles pour les étiquettes des champs */
        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Styles pour les champs de texte */
        form input[type=\"text\"], form input[type=\"date\"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #333333; /* Couleur de fond */
            color: #ffffff; /* Couleur du texte */
        }

        /* Styles pour le bouton de soumission */
        form .button.button5 {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #ff007f; /* Couleur de fond */
            color: #ffffff; /* Couleur du texte */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Au survol du bouton */
        form .button.button5:hover {
            background-color: rgba(255, 0, 127, 0.8); /* Rose avec une opacité de 80% */
        }

        /* Styles pour le bouton de réinitialisation */
        form button[type=\"reset\"].button5 {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #ff007f; /* Couleur de fond */
            color: #ffffff; /* Couleur du texte */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Au survol du bouton de réinitialisation */
        form button[type=\"reset\"].button5:hover {
            background-color: rgba(255, 0, 127, 0.8); /* Rose avec une opacité de 80% */
        }

        /* Style pour la classe post-image */
        .post-image {
            width: 50%; /* Définissez la largeur souhaitée */
            height: auto; /* La hauteur s'ajustera automatiquement pour préserver les proportions */
        }

        /* Style pour le bouton Delete en rouge */
        .deleteButton {
            background-color: #f56464; /* Rouge */
            color: #ffffff; /* Texte en blanc */
        }

        /* Style pour le bouton Edit en bleu */
        .editButton {
            background-color: #639ff2; /* Bleu */
            color: #ffffff; /* Texte en blanc */
        }

        /* Style pour les boutons Like et Dislike en jaune */
        .likeButton,
        .dislikeButton {
            background-color: #edc06d; /* Jaune */
            color: #000000; /* Texte en noir */
        }
    </style>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 122
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "></script>

        <script>
            // Fonction de réinitialisation
            function resetForm() {
                document.getElementById(\"votre-formulaire-id\").reset();
            }
        </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Post/details.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  440 => 128,  436 => 127,  432 => 126,  428 => 125,  424 => 124,  420 => 123,  415 => 122,  405 => 121,  296 => 20,  292 => 19,  288 => 18,  284 => 17,  279 => 16,  269 => 15,  253 => 215,  249 => 214,  245 => 213,  241 => 212,  237 => 211,  233 => 210,  224 => 204,  218 => 201,  213 => 198,  204 => 196,  200 => 195,  192 => 190,  188 => 189,  184 => 188,  180 => 187,  176 => 186,  154 => 167,  150 => 166,  146 => 165,  142 => 164,  123 => 148,  110 => 137,  108 => 121,  104 => 119,  102 => 15,  99 => 14,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Post Details{% endblock %}

{% block body %}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Post Details</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

    {# Run composer require symfony/webpack-encore-bundle to start using Symfony UX #}

    {% block stylesheets %}
        <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-cyborg-gaming.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
    
        <style>
        /* Styles pour le texte en blanc */
        body, .main-nav a, .search-input input, .search-input i, .nav a,
        form label, form input[type=\"text\"], form input[type=\"date\"], form button {
            color: #ffffff; /* Texte en blanc */
        }
        /* Styles pour les messages d'erreur en rouge */
        .error-message {
            color: #ff0000; /* Rouge */
            font-size: 14px;
        }
        /* Styles pour le formulaire */
        form {
            margin-top: 20px;
        }

        /* Styles pour les étiquettes des champs */
        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Styles pour les champs de texte */
        form input[type=\"text\"], form input[type=\"date\"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #333333; /* Couleur de fond */
            color: #ffffff; /* Couleur du texte */
        }

        /* Styles pour le bouton de soumission */
        form .button.button5 {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #ff007f; /* Couleur de fond */
            color: #ffffff; /* Couleur du texte */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Au survol du bouton */
        form .button.button5:hover {
            background-color: rgba(255, 0, 127, 0.8); /* Rose avec une opacité de 80% */
        }

        /* Styles pour le bouton de réinitialisation */
        form button[type=\"reset\"].button5 {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #ff007f; /* Couleur de fond */
            color: #ffffff; /* Couleur du texte */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Au survol du bouton de réinitialisation */
        form button[type=\"reset\"].button5:hover {
            background-color: rgba(255, 0, 127, 0.8); /* Rose avec une opacité de 80% */
        }

        /* Style pour la classe post-image */
        .post-image {
            width: 50%; /* Définissez la largeur souhaitée */
            height: auto; /* La hauteur s'ajustera automatiquement pour préserver les proportions */
        }

        /* Style pour le bouton Delete en rouge */
        .deleteButton {
            background-color: #f56464; /* Rouge */
            color: #ffffff; /* Texte en blanc */
        }

        /* Style pour le bouton Edit en bleu */
        .editButton {
            background-color: #639ff2; /* Bleu */
            color: #ffffff; /* Texte en blanc */
        }

        /* Style pour les boutons Like et Dislike en jaune */
        .likeButton,
        .dislikeButton {
            background-color: #edc06d; /* Jaune */
            color: #000000; /* Texte en noir */
        }
    </style>

    {% endblock %}


    {% block javascripts %}
        <script src={{ asset('vendor/jquery/jquery.min.js') }}></script>
        <script src={{ asset('vendor/bootstrap/js/bootstrap.min.js') }}></script>
        <script src={{ asset('assets/js/isotope.min.js') }}></script>
        <script src={{ asset('assets/js/owl-carousel.js') }}></script>
        <script src={{ asset('assets/js/owl-carousel.js') }}></script>
        <script src={{ asset('assets/js/popup.js') }}></script>
        <script src={{ asset('assets/js/custom.js') }}></script>

        <script>
            // Fonction de réinitialisation
            function resetForm() {
                document.getElementById(\"votre-formulaire-id\").reset();
            }
        </script>
    {% endblock %}
</head>
<body>


<!-- *** Header Area Start *** -->
  <header class=\"header-area header-sticky\">

        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- *** Logo Start *** -->
                    <a href=\"{{ path('app_index') }}\" class=\"logo\">
                        <img src=\"assets/images/logo.png\" alt=\"\">
                    </a>
                    <!-- *** Logo End *** -->
                    
                    <!-- *** Search End *** -->
                    <div class=\"search-input\">
                      <form id=\"search\" action=\"#\">
                        <input type=\"text\" placeholder=\"Type Something\" id='searchText' name=\"searchKeyword\" onkeypress=\"handle\" />
                        <i class=\"fa fa-search\"></i>
                      </form>
                    </div>
                    <!-- *** Search End *** -->
                    <!-- *** Menu Start *** -->
                    <ul class=\"nav\"> 
                        <li><a href=\"index.html\" >Home</a></li>
                        <li><a href=\"{{ path('app_browse') }}\">Browse</a></li>
                        <li><a href=\"{{ path('app_details') }}\">Details</a></li>
                        <li><a href=\"{{ path('app_streams') }}\">Streams</a></li>
                        <li><a href=\"{{ path('app_profile') }}\" class=\"active\">Profile <img src=\"assets/images/profile-header.jpg\" alt=\"\"></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- *** Menu End *** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- *** Header Area End *** -->

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-content\">
            <div class=\"post\">


<a href=\"{{ path('listPost') }}\" class=\"btn btn-secondary\">List Posts</a>
    <h3>{{ post.titre }}</h3>
    <p>{{ post.contenuPub }}</p>
    <p>Date: {{ post.datePub ? post.datePub.format('Y-m-d H:i:s') : '' }}</p>
    <img src=\"{{ asset('uploads/' ~ post.file) }}\" alt=\"Image\" class=\"post-image\">

    <!-- Afficher les commentaires -->
    <h3>Commentaires:</h3>
    <ul class=\"comments-list\">
        {% for comment in post.comments %}
            <li>{{ comment.contenuComment }}</li>
        {% endfor %}
    </ul>

    <!-- Ajouter un commentaire -->
    <form method=\"post\" action=\"{{ path('add_comment') }}\" class=\"comment-form\">
        <label for=\"contenuComment\">Contenu du commentaire</label>
        <input type=\"text\" name=\"contenuComment\">
        <input type=\"hidden\" name=\"postId\" value=\"{{ post.id }}\">
        <button type=\"submit\" class=\"button button5\">Ajouter un commentaire</button>
    </form>

    <!-- Actions sur le post -->
    <div class=\"post-actions\">
        <button class=\"likeButton\" data-post-id=\"{{ post.id }}\">Like</button>
        <button class=\"dislikeButton\" data-post-id=\"{{ post.id }}\">Dislike</button>
        <a href=\"{{ path('deletePost', {'id': post.id}) }}\" class=\"button button5 deleteButton\">Delete</a>
        <a href=\"{{ path('editPost', {'id': post.id}) }}\" class=\"button button5 editButton\">Edit</a>
        <span>Likes: {{ post.likes }}</span>
        <span>Dislikes: {{ post.dislikes }}</span>
    </div>

</body>
</html>
{% endblock %}", "Post/details.html.twig", "C:\\Users\\lenovo\\Desktop\\PIdev-GAMI-main\\PIdev-GAMI-main\\templates\\Post\\details.html.twig");
    }
}
