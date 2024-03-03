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

/* post/addPost.html.twig */
class __TwigTemplate_622107f940f35136dd9f517cb06a1f7f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/addPost.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/addPost.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

    ";
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 89
        echo "

    ";
        // line 91
        $this->displayBlock('javascripts', $context, $blocks);
        // line 107
        echo "</head>
<body>

<!-- *** Header Area Start *** -->
  <header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- *** Logo Start *** -->
                    <a href=\"";
        // line 117
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
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse");
        echo "\">Browse</a></li>
                        <li><a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_details");
        echo "\">Details</a></li>
                        <li><a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_streams");
        echo "\">Streams</a></li>
                        <li><a href=\"";
        // line 135
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

<div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-content\">

          


";
        // line 156
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "id" => "votre-formulaire-id"]]);
        echo "

<table>
<h2>AJOUTER UN POST </h2>
<br><br>
    <tr>
        <td>";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "titre", [], "any", false, false, false, 162), 'label', ["label" => "Titre de post"]);
        echo "</td>
        <td>
            ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "titre", [], "any", false, false, false, 164), 'widget');
        echo "
            ";
        // line 166
        echo "            ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "titre", [], "any", false, false, false, 166), 'errors')) {
            // line 167
            echo "                <div class=\"error-message\">
                    ";
            // line 168
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "titre", [], "any", false, false, false, 168), 'errors');
            echo "
                </div>
            ";
        }
        // line 171
        echo "        </td>
    </tr>

    <tr>
        <td>";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "contenuPub", [], "any", false, false, false, 175), 'label', ["label" => "Contenu de post"]);
        echo "</td>
        <td>
            ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "contenuPub", [], "any", false, false, false, 177), 'widget');
        echo "
            ";
        // line 179
        echo "            ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "contenuPub", [], "any", false, false, false, 179), 'errors')) {
            // line 180
            echo "                <div class=\"error-message\">
                    ";
            // line 181
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "contenuPub", [], "any", false, false, false, 181), 'errors');
            echo "
                </div>
            ";
        }
        // line 184
        echo "        </td>
    </tr>

    <tr>
        <td>";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "datePub", [], "any", false, false, false, 188), 'widget', ["attr" => ["type" => "date"]]);
        echo "</td>
    </tr>

    <tr>
        <td>";
        // line 192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "file", [], "any", false, false, false, 192), 'label', ["label" => "Fichier"]);
        echo "</td>
        <td>";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "file", [], "any", false, false, false, 193), 'widget');
        echo "</td>
    </tr>
</table>
";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "save", [], "any", false, false, false, 200), 'widget', ["attr" => ["class" => "button button5"]]);
        echo "
<!-- Bouton de réinitialisation -->
<button type=\"reset\" class=\"button button5\">Reset</button>
<a href=\"";
        // line 203
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listPost");
        echo "\" class=\"btn btn-secondary\">List Posts</a>

";
        // line 205
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), 'form_end');
        echo "
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "GAMI";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
    </style>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 98
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
        return "post/addPost.html.twig";
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
        return array (  405 => 98,  401 => 97,  397 => 96,  393 => 95,  389 => 94,  385 => 93,  380 => 92,  370 => 91,  286 => 15,  282 => 14,  278 => 13,  274 => 12,  269 => 11,  259 => 10,  240 => 5,  226 => 205,  221 => 203,  215 => 200,  209 => 193,  205 => 192,  198 => 188,  192 => 184,  186 => 181,  183 => 180,  180 => 179,  176 => 177,  171 => 175,  165 => 171,  159 => 168,  156 => 167,  153 => 166,  149 => 164,  144 => 162,  135 => 156,  111 => 135,  107 => 134,  103 => 133,  99 => 132,  81 => 117,  69 => 107,  67 => 91,  63 => 89,  61 => 10,  58 => 9,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}GAMI{% endblock %}</title>
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
    <div class=\"container\">
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

<div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-content\">

          


{{ form_start(form, {'attr': {'enctype': 'multipart/form-data', 'id': 'votre-formulaire-id'}}) }}

<table>
<h2>AJOUTER UN POST </h2>
<br><br>
    <tr>
        <td>{{ form_label(form.titre, \"Titre de post\") }}</td>
        <td>
            {{ form_widget(form.titre) }}
            {# Affiche les erreurs de validation du champ \"titre\" #}
            {% if form_errors(form.titre) %}
                <div class=\"error-message\">
                    {{ form_errors(form.titre) }}
                </div>
            {% endif %}
        </td>
    </tr>

    <tr>
        <td>{{ form_label(form.contenuPub, \"Contenu de post\") }}</td>
        <td>
            {{ form_widget(form.contenuPub) }}
            {# Affiche les erreurs de validation du champ \"contenuPub\" #}
            {% if form_errors(form.contenuPub) %}
                <div class=\"error-message\">
                    {{ form_errors(form.contenuPub) }}
                </div>
            {% endif %}
        </td>
    </tr>

    <tr>
        <td>{{ form_widget(form.datePub, {'attr': {'type': 'date'}}) }}</td>
    </tr>

    <tr>
        <td>{{ form_label(form.file, \"Fichier\") }}</td>
        <td>{{ form_widget(form.file) }}</td>
    </tr>
</table>
{#}
{{ form_label(form.captchaCode) }}
{{ form_widget(form.captchaCode) }}
#}
{{ form_widget(form.save, {'attr': {'class': 'button button5'}}) }}
<!-- Bouton de réinitialisation -->
<button type=\"reset\" class=\"button button5\">Reset</button>
<a href=\"{{ path('listPost') }}\" class=\"btn btn-secondary\">List Posts</a>

{{ form_end(form) }}
</body>
</html>
", "post/addPost.html.twig", "C:\\Users\\lenovo\\Desktop\\PIdev-GAMI-main\\PIdev-GAMI-main\\templates\\Post\\addPost.html.twig");
    }
}
