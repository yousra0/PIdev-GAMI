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

/* Post/listPost.html.twig */
class __TwigTemplate_ac649f442e474b5579358dfa947cf23e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Post/listPost.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Post/listPost.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>List post</title>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addpost");
        echo "\" class=\"button button5\">Add</a>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 139
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
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse");
        echo "\">Browse</a></li>
                        <li><a href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_details");
        echo "\">Details</a></li>
                        <li><a href=\"";
        // line 165
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_streams");
        echo "\">Streams</a></li>
                        <li><a href=\"";
        // line 166
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
";
        // line 182
        $this->displayBlock('content', $context, $blocks);
        // line 233
        echo "
";
        // line 234
        $this->displayBlock('javascripts', $context, $blocks);
        // line 310
        echo "
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-cyborg-gaming.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">

        <style>
            /* Your custom CSS styles go here */
            /* Set background to black with 90% opacity */
            body {
                color: white; /* Text color */
                font-family: Arial, sans-serif;
            }

            /* Main container */
            .container {
                max-width: 600px;
                margin: 50px auto;
                padding: 10px; /* Reduced padding */
                border: 2px solid #ccc; /* Grey border */
                border-radius: 10px;
            }

            /* Header styles */
            header {
                text-align: center;
                padding: 20px 0;
            }

            /* Post styles */
            .post {
                background-color: #333;
                border-radius: 5px;
                margin-bottom: 10px;
                padding: 10px;
            }

            .post img {
                max-width: 100%;
                height: auto;
                border-radius: 5px;
                margin-bottom: 10px;
            }

            .post-actions {
                margin-top: 10px;
            }

            /* Button styles */
            .button {
                background-color: #04AA6D; /* Green */
                border: none;
                color: white;
                padding: 6px 12px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 4px;
            }

            .button5 {
                background-color: white;
                color: black;
                border: 2px solid #555555;
                border-radius: 12px;
            }

            .button5:hover {
                background-color: #555555;
                color: white;
            }

            .error-message {
                color: red;
                font-size: 14px;
            }

            /* Styles for comment edit and delete buttons */
            .comment-actions a {
                margin-right: 5px; /* Espacement entre les boutons */
                padding: 5px 10px; /* Espacement interne */
                border-radius: 4px; /* Coins arrondis */
                text-decoration: none; /* Pas de soulignement */
            }

            .comment-actions a.edit-button {
                background-color: #007bff; /* Couleur de fond pour le bouton Edit */
                color: white; /* Couleur du texte */
            }

            .comment-actions a.delete-button {
                background-color: #dc3545; /* Couleur de fond pour le bouton Delete */
                color: white; /* Couleur du texte */
            }

            .comment-actions a.edit-button:hover,
            .comment-actions a.delete-button:hover {
                opacity: 0.8; /* Légère transparence au survol */
            }

            .pagination {
            display: flex;
            list-style: none;
            padding: 0;
            justify-content: center;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination a {
            color: black;
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        .pagination a:hover {
            background-color: #f2f2f2;
        }
        </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 182
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 183
        echo "<div class=\"container\">
    <h1>List post</h1>

    ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 186, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 187
            echo "        <div class=\"post\">
            <h3>";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 188), "html", null, true);
            echo "</h3>
            <p>";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "contenuPub", [], "any", false, false, false, 189), "html", null, true);
            echo "</p>
            <p>Date: ";
            // line 190
            ((twig_get_attribute($this->env, $this->source, $context["post"], "datePub", [], "any", false, false, false, 190)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "datePub", [], "any", false, false, false, 190), "format", ["Y-m-d H:i:s"], "method", false, false, false, 190), "html", null, true))) : (print ("")));
            echo "</p>
            <img src=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["post"], "file", [], "any", false, false, false, 191))), "html", null, true);
            echo "\" alt=\"Image\">

            <!-- Ajouter un commentaire -->
            <form method=\"post\" action=\"";
            // line 194
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_comment");
            echo "\" class=\"comment-form\">
                <label for=\"contenuComment\">Contenu du commentaire</label>
                <input type=\"text\" name=\"contenuComment\" value=\"";
            // line 196
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "contenuComment", [], "any", true, true, false, 196)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "contenuComment", [], "any", false, false, false, 196), "")) : ("")), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"postId\" value=\"";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 197), "html", null, true);
            echo "\">
                <button type=\"submit\">Ajouter un commentaire</button>
                ";
            // line 199
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 199, $this->source); })()), "session", [], "any", false, false, false, 199), "flashBag", [], "any", false, false, false, 199), "has", ["error"], "method", false, false, false, 199)) {
                // line 200
                echo "                    <div class=\"error-message\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 200, $this->source); })()), "session", [], "any", false, false, false, 200), "flashBag", [], "any", false, false, false, 200), "get", ["error"], "method", false, false, false, 200), 0, [], "array", false, false, false, 200), "html", null, true);
                echo "</div>
                ";
            }
            // line 202
            echo "            </form>

            <h3>Commentaires:</h3>
            <ul class=\"comments-list\">
                <div id=\"comments-container-";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 206), "html", null, true);
            echo "\"></div>
                
                ";
            // line 208
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 208));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 209
                echo "                     <li>";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["comment"], "contenuComment", [], "any", true, true, false, 209)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["comment"], "contenuComment", [], "any", false, false, false, 209), "")) : ("")), "html", null, true);
                echo "</li>
                    <div class=\"comment-actions\">
                        <a href=\"";
                // line 211
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteComment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 211)]), "html", null, true);
                echo "\" class=\"delete-button\">Delete</a>
                        <a href=\"";
                // line 212
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editComment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 212)]), "html", null, true);
                echo "\" class=\"edit-button\">Edit</a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "            </ul>

            <div class=\"post-actions\">
                <button class=\"likeButton\" data-post-id=\"";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 218), "html", null, true);
            echo "\">Like</button>
                <button class=\"dislikeButton\" data-post-id=\"";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 219), "html", null, true);
            echo "\">Dislike</button>
                <a href=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletePost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 220)]), "html", null, true);
            echo "\" class=\"button button5\">Delete</a>
                <a href=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editPost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 221)]), "html", null, true);
            echo "\" class=\"button button5\">Edit</a>
                <span>Likes: <span class=\"likesCount\">";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "likes", [], "any", false, false, false, 222), "html", null, true);
            echo "</span></span>
                <span>Dislikes: <span class=\"dislikesCount\">";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "dislikes", [], "any", false, false, false, 223), "html", null, true);
            echo "</span></span>
                <a href=\"";
            // line 224
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_details_2", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 224)]), "html", null, true);
            echo "\" class=\"button button5\">Details</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 229, $this->source); })()));
        echo "

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 234
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 235
        echo "    <script>
    document.addEventListener('DOMContentLoaded', function () {
            const likeButtons = document.querySelectorAll('.likeButton');
            const dislikeButtons = document.querySelectorAll('.dislikeButton');

            likeButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const postId = button.getAttribute('data-post-id');
                    fetch(`/post/like/\${postId}`)
                        .then(response => response.json())
                        .then(data => {
                            // Mettre à jour le nombre de likes sur la page
                            const likesSpan = button.parentElement.querySelector('.likesCount');
                            likesSpan.textContent = data.likes;
                        });
                });
            });

            dislikeButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const postId = button.getAttribute('data-post-id');
                    fetch(`/post/dislike/\${postId}`)
                        .then(response => response.json())
                        .then(data => {
                            // Mettre à jour le nombre de dislikes sur la page
                            const dislikesSpan = button.parentElement.querySelector('.dislikesCount');
                            dislikesSpan.textContent = data.dislikes;
                        });
                });
            });
        });

        //commentaires
        document.getElementById('load-comments-btn').addEventListener('click', function() {
        const postId = this.getAttribute('data-post-id');
        fetch(`/post/\${postId}/comments`)
            .then(response => response.json())
            .then(data => {
                const commentsContainer = document.getElementById('comments-container');
                commentsContainer.innerHTML = '';
                data.forEach(comment => {
                    const commentElement = document.createElement('div');
                    commentElement.textContent = comment.content;
                    commentsContainer.appendChild(commentElement);
                });
            });
    });

    document.addEventListener('DOMContentLoaded', function () {
    const loadButtons = document.querySelectorAll('[id^=\"load-comments-btn-\"]');

    loadButtons.forEach(button => {
        button.addEventListener('click', () => {
            const postId = button.getAttribute('data-post-id');
            fetch(`/post/\${postId}/comments`)
                .then(response => response.json())
                .then(data => {
                    const commentsContainer = document.getElementById(`comments-container-\${postId}`);
                    commentsContainer.innerHTML = '';
                    data.forEach(comment => {
                        const commentElement = document.createElement('div');
                        commentElement.textContent = comment.content;
                        commentsContainer.appendChild(commentElement);
                    });
                });
        });
    });
});

        function openImageDetails() 
        {
            window.open('details.html.twig', '_blank');
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
        return "Post/listPost.html.twig";
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
        return array (  462 => 235,  452 => 234,  438 => 229,  428 => 224,  424 => 223,  420 => 222,  416 => 221,  412 => 220,  408 => 219,  404 => 218,  399 => 215,  390 => 212,  386 => 211,  380 => 209,  376 => 208,  371 => 206,  365 => 202,  359 => 200,  357 => 199,  352 => 197,  348 => 196,  343 => 194,  337 => 191,  333 => 190,  329 => 189,  325 => 188,  322 => 187,  318 => 186,  313 => 183,  303 => 182,  169 => 15,  165 => 14,  161 => 13,  157 => 12,  152 => 11,  142 => 10,  129 => 310,  127 => 234,  124 => 233,  122 => 182,  103 => 166,  99 => 165,  95 => 164,  91 => 163,  73 => 148,  62 => 139,  60 => 10,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>List post</title>
    <a href=\"{{ path('addpost') }}\" class=\"button button5\">Add</a>

    {% block stylesheets %}
        <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-cyborg-gaming.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">

        <style>
            /* Your custom CSS styles go here */
            /* Set background to black with 90% opacity */
            body {
                color: white; /* Text color */
                font-family: Arial, sans-serif;
            }

            /* Main container */
            .container {
                max-width: 600px;
                margin: 50px auto;
                padding: 10px; /* Reduced padding */
                border: 2px solid #ccc; /* Grey border */
                border-radius: 10px;
            }

            /* Header styles */
            header {
                text-align: center;
                padding: 20px 0;
            }

            /* Post styles */
            .post {
                background-color: #333;
                border-radius: 5px;
                margin-bottom: 10px;
                padding: 10px;
            }

            .post img {
                max-width: 100%;
                height: auto;
                border-radius: 5px;
                margin-bottom: 10px;
            }

            .post-actions {
                margin-top: 10px;
            }

            /* Button styles */
            .button {
                background-color: #04AA6D; /* Green */
                border: none;
                color: white;
                padding: 6px 12px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 4px;
            }

            .button5 {
                background-color: white;
                color: black;
                border: 2px solid #555555;
                border-radius: 12px;
            }

            .button5:hover {
                background-color: #555555;
                color: white;
            }

            .error-message {
                color: red;
                font-size: 14px;
            }

            /* Styles for comment edit and delete buttons */
            .comment-actions a {
                margin-right: 5px; /* Espacement entre les boutons */
                padding: 5px 10px; /* Espacement interne */
                border-radius: 4px; /* Coins arrondis */
                text-decoration: none; /* Pas de soulignement */
            }

            .comment-actions a.edit-button {
                background-color: #007bff; /* Couleur de fond pour le bouton Edit */
                color: white; /* Couleur du texte */
            }

            .comment-actions a.delete-button {
                background-color: #dc3545; /* Couleur de fond pour le bouton Delete */
                color: white; /* Couleur du texte */
            }

            .comment-actions a.edit-button:hover,
            .comment-actions a.delete-button:hover {
                opacity: 0.8; /* Légère transparence au survol */
            }

            .pagination {
            display: flex;
            list-style: none;
            padding: 0;
            justify-content: center;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination a {
            color: black;
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        .pagination a:hover {
            background-color: #f2f2f2;
        }
        </style>
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
{% block content %}
<div class=\"container\">
    <h1>List post</h1>

    {% for post in pagination %}
        <div class=\"post\">
            <h3>{{ post.titre }}</h3>
            <p>{{ post.contenuPub }}</p>
            <p>Date: {{ post.datePub ? post.datePub.format('Y-m-d H:i:s') : '' }}</p>
            <img src=\"{{ asset('uploads/' ~ post.file) }}\" alt=\"Image\">

            <!-- Ajouter un commentaire -->
            <form method=\"post\" action=\"{{ path('add_comment') }}\" class=\"comment-form\">
                <label for=\"contenuComment\">Contenu du commentaire</label>
                <input type=\"text\" name=\"contenuComment\" value=\"{{ comment.contenuComment|default('') }}\">
                <input type=\"hidden\" name=\"postId\" value=\"{{ post.id }}\">
                <button type=\"submit\">Ajouter un commentaire</button>
                {% if app.session.flashBag.has('error') %}
                    <div class=\"error-message\">{{ app.session.flashBag.get('error')[0] }}</div>
                {% endif %}
            </form>

            <h3>Commentaires:</h3>
            <ul class=\"comments-list\">
                <div id=\"comments-container-{{ post.id }}\"></div>
                
                {% for comment in post.comments %}
                     <li>{{ comment.contenuComment|default('') }}</li>
                    <div class=\"comment-actions\">
                        <a href=\"{{ path('deleteComment', {'id': comment.id}) }}\" class=\"delete-button\">Delete</a>
                        <a href=\"{{ path('editComment', {'id': comment.id}) }}\" class=\"edit-button\">Edit</a>
                    </div>
                {% endfor %}
            </ul>

            <div class=\"post-actions\">
                <button class=\"likeButton\" data-post-id=\"{{ post.id }}\">Like</button>
                <button class=\"dislikeButton\" data-post-id=\"{{ post.id }}\">Dislike</button>
                <a href=\"{{ path('deletePost', {'id': post.id}) }}\" class=\"button button5\">Delete</a>
                <a href=\"{{ path('editPost', {'id': post.id}) }}\" class=\"button button5\">Edit</a>
                <span>Likes: <span class=\"likesCount\">{{ post.likes }}</span></span>
                <span>Dislikes: <span class=\"dislikesCount\">{{ post.dislikes }}</span></span>
                <a href=\"{{ path('app_details_2', {'id': post.id}) }}\" class=\"button button5\">Details</a>
            </div>
        </div>
    {% endfor %}
{# Afficher les liens de pagination #}
{{ knp_pagination_render(pagination) }}

</div>
{% endblock %}

{% block javascripts %}
    <script>
    document.addEventListener('DOMContentLoaded', function () {
            const likeButtons = document.querySelectorAll('.likeButton');
            const dislikeButtons = document.querySelectorAll('.dislikeButton');

            likeButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const postId = button.getAttribute('data-post-id');
                    fetch(`/post/like/\${postId}`)
                        .then(response => response.json())
                        .then(data => {
                            // Mettre à jour le nombre de likes sur la page
                            const likesSpan = button.parentElement.querySelector('.likesCount');
                            likesSpan.textContent = data.likes;
                        });
                });
            });

            dislikeButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const postId = button.getAttribute('data-post-id');
                    fetch(`/post/dislike/\${postId}`)
                        .then(response => response.json())
                        .then(data => {
                            // Mettre à jour le nombre de dislikes sur la page
                            const dislikesSpan = button.parentElement.querySelector('.dislikesCount');
                            dislikesSpan.textContent = data.dislikes;
                        });
                });
            });
        });

        //commentaires
        document.getElementById('load-comments-btn').addEventListener('click', function() {
        const postId = this.getAttribute('data-post-id');
        fetch(`/post/\${postId}/comments`)
            .then(response => response.json())
            .then(data => {
                const commentsContainer = document.getElementById('comments-container');
                commentsContainer.innerHTML = '';
                data.forEach(comment => {
                    const commentElement = document.createElement('div');
                    commentElement.textContent = comment.content;
                    commentsContainer.appendChild(commentElement);
                });
            });
    });

    document.addEventListener('DOMContentLoaded', function () {
    const loadButtons = document.querySelectorAll('[id^=\"load-comments-btn-\"]');

    loadButtons.forEach(button => {
        button.addEventListener('click', () => {
            const postId = button.getAttribute('data-post-id');
            fetch(`/post/\${postId}/comments`)
                .then(response => response.json())
                .then(data => {
                    const commentsContainer = document.getElementById(`comments-container-\${postId}`);
                    commentsContainer.innerHTML = '';
                    data.forEach(comment => {
                        const commentElement = document.createElement('div');
                        commentElement.textContent = comment.content;
                        commentsContainer.appendChild(commentElement);
                    });
                });
        });
    });
});

        function openImageDetails() 
        {
            window.open('details.html.twig', '_blank');
        }
    </script>
{% endblock %}

</body>
</html>
", "Post/listPost.html.twig", "C:\\Users\\lenovo\\Desktop\\PIdev-GAMI-main\\PIdev-GAMI-main\\templates\\Post\\listPost.html.twig");
    }
}
