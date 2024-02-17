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
class __TwigTemplate_70279087b340cfbd6eeacc430b054f74 extends Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "

";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 90
        echo "



<table>
    <tr>
        <td>";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "contenuComment", [], "any", false, false, false, 96), 'label', ["label" => "Contenu du commentaire"]);
        echo "</td>
        <td>";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "contenuComment", [], "any", false, false, false, 97), 'widget');
        echo "</td>
    </tr>

    <tr>
        <td>";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "dateComment", [], "any", false, false, false, 101), 'widget', ["attr" => ["type" => "date"]]);
        echo "</td>
    </tr>
</table>

";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "save", [], "any", false, false, false, 105), 'widget');
        echo "


";
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-cyborg-gaming.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
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
        return array (  120 => 8,  116 => 7,  112 => 6,  108 => 5,  103 => 4,  93 => 3,  83 => 108,  77 => 105,  70 => 101,  63 => 97,  59 => 96,  51 => 90,  49 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'enctype': 'multipart/form-data'}}) }}

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
        
        

    </style>
{% endblock %}




<table>
    <tr>
        <td>{{ form_label(form.contenuComment, \"Contenu du commentaire\") }}</td>
        <td>{{ form_widget(form.contenuComment) }}</td>
    </tr>

    <tr>
        <td>{{ form_widget(form.dateComment, {'attr': {'type': 'date'}}) }}</td>
    </tr>
</table>

{{ form_widget(form.save) }}


{{ form_end(form) }}", "comment/addComment.html.twig", "C:\\Users\\lenovo\\Desktop\\PIDEV\\GAMI\\web\\front\\templates\\comment\\addComment.html.twig");
    }
}
