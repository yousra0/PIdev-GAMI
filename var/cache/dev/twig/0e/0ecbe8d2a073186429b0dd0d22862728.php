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

/* comment/addComment.html.twig */
class __TwigTemplate_f970653e44297352e4e5c6e6db9308f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/addComment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/addComment.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 90
        echo "
";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "id" => "votre-formulaire-id"]]);
        echo "
<table>
    <tr>
        <td>";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "contenuComment", [], "any", false, false, false, 94), 'label', ["label" => " Contenu de commentaire"]);
        echo "</td>
        <td>
            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "contenuComment", [], "any", false, false, false, 96), 'widget');
        echo "
            ";
        // line 98
        echo "            ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "contenuPub", [], "any", false, false, false, 98), 'errors')) {
            // line 99
            echo "                <div class=\"error-message\">
                    ";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "contenuComment", [], "any", false, false, false, 100), 'errors');
            echo "
                </div>
            ";
        }
        // line 103
        echo "        </td>
    </tr>

    <tr>
        <td>";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "dateComment", [], "any", false, false, false, 107), 'widget', ["attr" => ["type" => "date"]]);
        echo "</td>
    </tr>
</table>

";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "save", [], "any", false, false, false, 111), 'widget');
        echo "
";
        // line 112
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-cyborg-gaming.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">

    <style>
        /* Your custom CSS styles go here */
        /* Set background to black with 90% opacity */
        body {
            background-color: rgba(0, 0, 0, 0.9);
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

        .error-message {
                color: red;
                font-size: 14px;
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
        return "comment/addComment.html.twig";
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
        return array (  130 => 6,  126 => 5,  122 => 4,  118 => 3,  113 => 2,  103 => 1,  93 => 112,  89 => 111,  82 => 107,  76 => 103,  70 => 100,  67 => 99,  64 => 98,  60 => 96,  55 => 94,  49 => 91,  46 => 90,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-cyborg-gaming.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">

    <style>
        /* Your custom CSS styles go here */
        /* Set background to black with 90% opacity */
        body {
            background-color: rgba(0, 0, 0, 0.9);
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

        .error-message {
                color: red;
                font-size: 14px;
            }
    </style>
{% endblock %}

{{ form_start(form, {'attr': {'enctype': 'multipart/form-data', 'id': 'votre-formulaire-id'}}) }}
<table>
    <tr>
        <td>{{ form_label(form.contenuComment,\" Contenu de commentaire\")}}</td>
        <td>
            {{ form_widget(form.contenuComment) }}
            {# Affiche les erreurs de validation du champ \"contenuComment\" #}
            {% if form_errors(form.contenuPub) %}
                <div class=\"error-message\">
                    {{ form_errors(form.contenuComment) }}
                </div>
            {% endif %}
        </td>
    </tr>

    <tr>
        <td>{{ form_widget(form.dateComment, {'attr': {'type': 'date'}}) }}</td>
    </tr>
</table>

{{ form_widget(form.save) }}
{{ form_end(form) }}", "comment/addComment.html.twig", "C:\\Users\\lenovo\\Desktop\\PIdev-GAMI-main\\PIdev-GAMI-main\\templates\\comment\\addComment.html.twig");
    }
}
