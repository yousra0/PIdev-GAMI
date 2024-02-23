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

/* post/listPost.html.twig */
class __TwigTemplate_01b700810baf418e796623e7b65c6c3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/listPost.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/listPost.html.twig"));

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
        // line 117
        echo "</head>
<body>

";
        // line 120
        $this->displayBlock('content', $context, $blocks);
        // line 167
        echo "

";
        // line 169
        $this->displayBlock('javascripts', $context, $blocks);
        // line 244
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
                background: rgb(144, 87, 175);
                background: radial-gradient(circle, rgba(144, 87, 175, 1) 0%, rgba(200, 64, 153, 1) 49%, rgba(40, 17, 41, 1) 75%, rgba(0, 0, 0, 1) 100%);
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
        </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 120
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 121
        echo "<div class=\"container\">
    <h1>List post</h1>

    ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 124, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 125
            echo "        <div class=\"post\">
            <h3>";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 126), "html", null, true);
            echo "</h3>
            <p>";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "contenuPub", [], "any", false, false, false, 127), "html", null, true);
            echo "</p>
            <p>Date: ";
            // line 128
            ((twig_get_attribute($this->env, $this->source, $context["post"], "datePub", [], "any", false, false, false, 128)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "datePub", [], "any", false, false, false, 128), "format", ["Y-m-d H:i:s"], "method", false, false, false, 128), "html", null, true))) : (print ("")));
            echo "</p>
            <img src=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["post"], "file", [], "any", false, false, false, 129))), "html", null, true);
            echo "\" alt=\"Image\">

            <!-- Ajouter un commentaire -->
            <form method=\"post\" action=\"";
            // line 132
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_comment");
            echo "\" class=\"comment-form\">
                <label for=\"contenuComment\">Contenu du commentaire</label>
                <input type=\"text\" name=\"contenuComment\">
                ";
            // line 135
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "contenuComment", [], "any", false, false, false, 135), 'errors');
            echo " <!-- Afficher les erreurs de validation -->
                <input type=\"hidden\" name=\"postId\" value=\"";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 136), "html", null, true);
            echo "\">
                <button type=\"submit\">Ajouter un commentaire</button>
            </form>

            <h3>Commentaires:</h3>
            <ul class=\"comments-list\">
                <div id=\"comments-container-";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 142), "html", null, true);
            echo "\"></div>
                
                ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 144));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 145
                echo "                    <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "contenuComment", [], "any", false, false, false, 145), "html", null, true);
                echo "</li>
                    <div class=\"comment-actions\">
                        <a href=\"";
                // line 147
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteComment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 147)]), "html", null, true);
                echo "\" class=\"delete-button\">Delete</a>
                        <a href=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editComment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 148)]), "html", null, true);
                echo "\" class=\"edit-button\">Edit</a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "            </ul>

            <div class=\"post-actions\">
                <button class=\"likeButton\" data-post-id=\"";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 154), "html", null, true);
            echo "\">Like</button>
                <button class=\"dislikeButton\" data-post-id=\"";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 155), "html", null, true);
            echo "\">Dislike</button>
                <a href=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletePost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 156)]), "html", null, true);
            echo "\" class=\"button button5\">Delete</a>
                <a href=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editPost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 157)]), "html", null, true);
            echo "\" class=\"button button5\">Edit</a>
                <span>Likes: ";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "likes", [], "any", false, false, false, 158), "html", null, true);
            echo "</span>
                <span>Dislikes: ";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "dislikes", [], "any", false, false, false, 159), "html", null, true);
            echo "</span>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 169
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 170
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
                            // Update the like count
                        });
                });
            });

            dislikeButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const postId = button.getAttribute('data-post-id');
                    fetch(`/post/dislike/\${postId}`)
                        .then(response => response.json())
                        .then(data => {
                            // Update the dislike count
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
        return "post/listPost.html.twig";
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
        return array (  372 => 170,  362 => 169,  349 => 163,  339 => 159,  335 => 158,  331 => 157,  327 => 156,  323 => 155,  319 => 154,  314 => 151,  305 => 148,  301 => 147,  295 => 145,  291 => 144,  286 => 142,  277 => 136,  273 => 135,  267 => 132,  261 => 129,  257 => 128,  253 => 127,  249 => 126,  246 => 125,  242 => 124,  237 => 121,  227 => 120,  115 => 15,  111 => 14,  107 => 13,  103 => 12,  98 => 11,  88 => 10,  75 => 244,  73 => 169,  69 => 167,  67 => 120,  62 => 117,  60 => 10,  55 => 8,  46 => 1,);
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
                background: rgb(144, 87, 175);
                background: radial-gradient(circle, rgba(144, 87, 175, 1) 0%, rgba(200, 64, 153, 1) 49%, rgba(40, 17, 41, 1) 75%, rgba(0, 0, 0, 1) 100%);
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
        </style>
    {% endblock %}
</head>
<body>

{% block content %}
<div class=\"container\">
    <h1>List post</h1>

    {% for post in posts %}
        <div class=\"post\">
            <h3>{{ post.titre }}</h3>
            <p>{{ post.contenuPub }}</p>
            <p>Date: {{ post.datePub ? post.datePub.format('Y-m-d H:i:s') : '' }}</p>
            <img src=\"{{ asset('uploads/' ~ post.file) }}\" alt=\"Image\">

            <!-- Ajouter un commentaire -->
            <form method=\"post\" action=\"{{ path('add_comment') }}\" class=\"comment-form\">
                <label for=\"contenuComment\">Contenu du commentaire</label>
                <input type=\"text\" name=\"contenuComment\">
                {{ form_errors(form.contenuComment) }} <!-- Afficher les erreurs de validation -->
                <input type=\"hidden\" name=\"postId\" value=\"{{ post.id }}\">
                <button type=\"submit\">Ajouter un commentaire</button>
            </form>

            <h3>Commentaires:</h3>
            <ul class=\"comments-list\">
                <div id=\"comments-container-{{ post.id }}\"></div>
                
                {% for comment in post.comments %}
                    <li>{{ comment.contenuComment }}</li>
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
                <span>Likes: {{ post.likes }}</span>
                <span>Dislikes: {{ post.dislikes }}</span>
            </div>
        </div>
    {% endfor %}


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
                            // Update the like count
                        });
                });
            });

            dislikeButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const postId = button.getAttribute('data-post-id');
                    fetch(`/post/dislike/\${postId}`)
                        .then(response => response.json())
                        .then(data => {
                            // Update the dislike count
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



    </script>
{% endblock %}

</body>
</html>
", "post/listPost.html.twig", "C:\\Users\\lenovo\\Desktop\\PIDEV\\GAMI\\web\\front\\templates\\Post\\listPost.html.twig");
    }
}
