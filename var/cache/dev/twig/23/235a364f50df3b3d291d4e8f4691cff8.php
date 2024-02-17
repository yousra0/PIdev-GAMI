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
class __TwigTemplate_2305e591d8327a0f547b30385cba6716 extends Template
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
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>List post</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 82
        echo "</head>
<body>

<h1>List post</h1>

<table border=\"1\">
    <tr>
        <th>id</th>
        <th>titre</th>
        <th>contenuPub</th>
        <th>datePub</th>
        <th>Files</th>
        <th>Likes</th>
        <th>Dislikes</th>
        <th>Actions</th>
    </tr>
    <tbody>
    ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 99, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 100
            echo "        <tr>
            <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 101), "html", null, true);
            echo "</td>
            <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
            <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "contenuPub", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
            <td>";
            // line 104
            ((twig_get_attribute($this->env, $this->source, $context["post"], "datePub", [], "any", false, false, false, 104)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "datePub", [], "any", false, false, false, 104), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
            <td><img src=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["post"], "file", [], "any", false, false, false, 105))), "html", null, true);
            echo "\" alt=\"Image\" width=\"100\" height=\"100\"></td>
            <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "likes", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
            <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "dislikes", [], "any", false, false, false, 107), "html", null, true);
            echo "</td>
            <td>
                <button class=\"likeButton\" data-post-id=\"";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 109), "html", null, true);
            echo "\">Like</button>
                <button class=\"dislikeButton\" data-post-id=\"";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 110), "html", null, true);
            echo "\">Dislike</button>
            </td>
            <td><a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletePost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 112)]), "html", null, true);
            echo "\">Delete</a></td>
            <td><a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editPost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 113)]), "html", null, true);
            echo "\">Edit</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "    </tbody>
</table>

<a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addpost");
        echo "\" class=\"button button5\">Add</a>

";
        // line 121
        $this->displayBlock('javascripts', $context, $blocks);
        // line 151
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

            /* Table styles */
            table, th, td {
                border: 1px solid white;
                border-collapse: collapse;
                color: white;
            }

            th, td {
                padding: 10px;
                text-align: left;
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
                            button.parentNode.previousElementSibling.textContent = data.likes;
                        });
                });
            });

            dislikeButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const postId = button.getAttribute('data-post-id');
                    fetch(`/post/dislike/\${postId}`)
                        .then(response => response.json())
                        .then(data => {
                            button.parentNode.previousElementSibling.textContent = data.dislikes;
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
        return array (  274 => 122,  264 => 121,  187 => 15,  183 => 14,  179 => 13,  175 => 12,  170 => 11,  160 => 10,  147 => 151,  145 => 121,  140 => 119,  135 => 116,  126 => 113,  122 => 112,  117 => 110,  113 => 109,  108 => 107,  104 => 106,  100 => 105,  96 => 104,  92 => 103,  88 => 102,  84 => 101,  81 => 100,  77 => 99,  58 => 82,  56 => 10,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>List post</title>

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

            /* Table styles */
            table, th, td {
                border: 1px solid white;
                border-collapse: collapse;
                color: white;
            }

            th, td {
                padding: 10px;
                text-align: left;
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
        </style>
    {% endblock %}
</head>
<body>

<h1>List post</h1>

<table border=\"1\">
    <tr>
        <th>id</th>
        <th>titre</th>
        <th>contenuPub</th>
        <th>datePub</th>
        <th>Files</th>
        <th>Likes</th>
        <th>Dislikes</th>
        <th>Actions</th>
    </tr>
    <tbody>
    {% for post in posts %}
        <tr>
            <td>{{ post.id }}</td>
            <td>{{ post.titre }}</td>
            <td>{{ post.contenuPub }}</td>
            <td>{{ post.datePub ? post.datePub|date('Y-m-d H:i:s') : '' }}</td>
            <td><img src=\"{{ asset('uploads/' ~ post.file) }}\" alt=\"Image\" width=\"100\" height=\"100\"></td>
            <td>{{ post.likes }}</td>
            <td>{{ post.dislikes }}</td>
            <td>
                <button class=\"likeButton\" data-post-id=\"{{ post.id }}\">Like</button>
                <button class=\"dislikeButton\" data-post-id=\"{{ post.id }}\">Dislike</button>
            </td>
            <td><a href=\"{{ path('deletePost', {'id': post.id}) }}\">Delete</a></td>
            <td><a href=\"{{ path('editPost', {'id': post.id}) }}\">Edit</a></td>
        </tr>
    {% endfor %}
    </tbody>
</table>

<a href=\"{{ path('addpost') }}\" class=\"button button5\">Add</a>

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
                            button.parentNode.previousElementSibling.textContent = data.likes;
                        });
                });
            });

            dislikeButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const postId = button.getAttribute('data-post-id');
                    fetch(`/post/dislike/\${postId}`)
                        .then(response => response.json())
                        .then(data => {
                            button.parentNode.previousElementSibling.textContent = data.dislikes;
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
