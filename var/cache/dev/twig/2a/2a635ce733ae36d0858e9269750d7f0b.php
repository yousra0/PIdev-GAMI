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

/* comment/listComment.html.twig */
class __TwigTemplate_0263dfcf96ab28dd1f6137a742cec9d8 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/listComment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/listComment.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<h1>List comments</h1>


";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 113
        echo "




<table border=\"1\">
    <tr>
        <th>id</th>
        <th>contenu du comment</th>
        <th>date de Comment</th>


    </tr>
     <tbody>
            ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 127, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 128
            echo "                <tr>
                    <td>";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 129), "html", null, true);
            echo "</td>
                    <td>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "contenuComment", [], "any", false, false, false, 130), "html", null, true);
            echo "</td>
                    <td>";
            // line 131
            ((twig_get_attribute($this->env, $this->source, $context["comment"], "dateComment", [], "any", false, false, false, 131)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "dateComment", [], "any", false, false, false, 131), "format", ["Y-m-d H:i:s"], "method", false, false, false, 131), "html", null, true))) : (print ("")));
            echo "</td>
                    <td><a href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteComment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 132)]), "html", null, true);
            echo "\">Delete</a></td>
                    <td><a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editComment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 133)]), "html", null, true);
            echo "\">Edit</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "        </tbody>


        
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-cyborg-gaming.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">

    <style>

    table, td, th 
    {
        border: 1px solid;
    }

    table 
    {
        width: 100%;
        border-collapse: collapse;
    }


        /* Your custom CSS styles go here */
        /* Set background to black with 90% opacity */
        body {
background: rgb(144,87,175);
background: radial-gradient(circle, rgba(144,87,175,1) 0%, rgba(200,64,153,1) 49%, rgba(40,17,41,1) 75%, rgba(0,0,0,1) 100%);
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

        /* Form styles */
        form {
            margin-top: 20px;
            background-color: #ccc; /* Grey background */
            padding: 10px; /* Reduced padding */
            border-radius: 10px;
            text-align: center; /* Center the form horizontally */
        }

        /* Form field styles */
        label {
            display: block;
            margin-bottom: 10px;
            color: black; /* Text color */
        }

        input[type=\"text\"],
        input[type=\"date\"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Submit button styles */
        .button {
            background-color: #04AA6D; /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "comment/listComment.html.twig";
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
        return array (  152 => 19,  148 => 18,  144 => 17,  140 => 16,  135 => 15,  125 => 14,  109 => 136,  100 => 133,  96 => 132,  92 => 131,  88 => 130,  84 => 129,  81 => 128,  77 => 127,  61 => 113,  59 => 14,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<h1>List comments</h1>


{% block stylesheets %}
    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-cyborg-gaming.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">

    <style>

    table, td, th 
    {
        border: 1px solid;
    }

    table 
    {
        width: 100%;
        border-collapse: collapse;
    }


        /* Your custom CSS styles go here */
        /* Set background to black with 90% opacity */
        body {
background: rgb(144,87,175);
background: radial-gradient(circle, rgba(144,87,175,1) 0%, rgba(200,64,153,1) 49%, rgba(40,17,41,1) 75%, rgba(0,0,0,1) 100%);
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

        /* Form styles */
        form {
            margin-top: 20px;
            background-color: #ccc; /* Grey background */
            padding: 10px; /* Reduced padding */
            border-radius: 10px;
            text-align: center; /* Center the form horizontally */
        }

        /* Form field styles */
        label {
            display: block;
            margin-bottom: 10px;
            color: black; /* Text color */
        }

        input[type=\"text\"],
        input[type=\"date\"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Submit button styles */
        .button {
            background-color: #04AA6D; /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
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





<table border=\"1\">
    <tr>
        <th>id</th>
        <th>contenu du comment</th>
        <th>date de Comment</th>


    </tr>
     <tbody>
            {% for comment in comments %}
                <tr>
                    <td>{{comment.id}}</td>
                    <td>{{comment.contenuComment}}</td>
                    <td>{{ comment.dateComment ? comment.dateComment.format('Y-m-d H:i:s') : '' }}</td>
                    <td><a href=\"{{ path('deleteComment', {'id': comment.id}) }}\">Delete</a></td>
                    <td><a href=\"{{ path('editComment', {'id': comment.id}) }}\">Edit</a></td>
                </tr>
            {% endfor %}
        </tbody>


        
</body>

</html>", "comment/listComment.html.twig", "C:\\Users\\lenovo\\Desktop\\PIDEV\\GAMI\\web\\front\\templates\\comment\\listComment.html.twig");
    }
}
