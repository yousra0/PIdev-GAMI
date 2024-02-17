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
class __TwigTemplate_26a2a7b112cb3938dd8e6913b25e4088 extends Template
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
        // line 49
        echo "

    ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
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
        // line 77
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
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse");
        echo "\">Browse</a></li>
                        <li><a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_details");
        echo "\">Details</a></li>
                        <li><a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_streams");
        echo "\">Streams</a></li>
                        <li><a href=\"";
        // line 95
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
        // line 116
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "id" => "votre-formulaire-id"]]);
        echo "

<table>
    <tr>
        <td>";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "titre", [], "any", false, false, false, 120), 'label', ["label" => "Titre de post"]);
        echo "</td>
        <td>
            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "titre", [], "any", false, false, false, 122), 'widget');
        echo "
            ";
        // line 124
        echo "            ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "titre", [], "any", false, false, false, 124), 'errors')) {
            // line 125
            echo "                <div class=\"error-message\">
                    ";
            // line 126
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "titre", [], "any", false, false, false, 126), 'errors');
            echo "
                </div>
            ";
        }
        // line 129
        echo "        </td>
    </tr>

    <tr>
        <td>";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "contenuPub", [], "any", false, false, false, 133), 'label', ["label" => "Contenu de post"]);
        echo "</td>
        <td>
            ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "contenuPub", [], "any", false, false, false, 135), 'widget');
        echo "
            ";
        // line 137
        echo "            ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "contenuPub", [], "any", false, false, false, 137), 'errors')) {
            // line 138
            echo "                <div class=\"error-message\">
                    ";
            // line 139
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "contenuPub", [], "any", false, false, false, 139), 'errors');
            echo "
                </div>
            ";
        }
        // line 142
        echo "        </td>
    </tr>

    <tr>
        <td>";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "datePub", [], "any", false, false, false, 146), 'label', ["label" => "Date du post"]);
        echo "</td>
        <td>
            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "datePub", [], "any", false, false, false, 148), 'widget');
        echo "
            ";
        // line 150
        echo "            ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "datePub", [], "any", false, false, false, 150), 'errors')) {
            // line 151
            echo "                <div class=\"error-message\">
                    ";
            // line 152
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "datePub", [], "any", false, false, false, 152), 'errors');
            echo "
                </div>
            ";
        }
        // line 155
        echo "        </td>
    </tr>

    <tr>
        <td>";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "file", [], "any", false, false, false, 159), 'label', ["label" => "Fichier"]);
        echo "</td>
        <td>";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "file", [], "any", false, false, false, 160), 'widget');
        echo "</td>
    </tr>
</table>

";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "save", [], "any", false, false, false, 164), 'widget', ["attr" => ["class" => "button button5"]]);
        echo "
<!-- Bouton de réinitialisation -->
<button type=\"reset\" class=\"button button5\">Reset</button>

";
        // line 168
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), 'form_end');
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
            .error-message {
                color: red;
                font-size: 14px;
            }

            /* CSS pour les boutons Save et Reset */
            .button.button5 {
                border-radius: 20px; /* Arrondi les bords */
                transition: background-color 0.3s ease; /* Animation de transition pour le changement de couleur */
                padding: 10px 20px; /* Ajuste la taille du bouton en ajustant le padding */
                font-size: 16px; /* Ajuste la taille de la police */
                font-weight: bold; /* Rend la police en gras */
            }

            /* Au survol du bouton */
            .button.button5:hover {
                background-color: rgba(255, 0, 127, 0.4); /* Rose avec une opacité de 40% */
            }

            .button.button5 {
            border-radius: 20px; /* Arrondi les bords */
            transition: background-color 0.3s ease; /* Animation de transition pour le changement de couleur */
        }

        /* Au survol du bouton */
        .button.button5:hover {
            background-color: rgba(255, 0, 127, 0.4); /* Rose avec une opacité de 40% */
        }
        </style>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 58
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
        return array (  380 => 58,  376 => 57,  372 => 56,  368 => 55,  364 => 54,  360 => 53,  355 => 52,  345 => 51,  301 => 15,  297 => 14,  293 => 13,  289 => 12,  284 => 11,  274 => 10,  255 => 5,  241 => 168,  234 => 164,  227 => 160,  223 => 159,  217 => 155,  211 => 152,  208 => 151,  205 => 150,  201 => 148,  196 => 146,  190 => 142,  184 => 139,  181 => 138,  178 => 137,  174 => 135,  169 => 133,  163 => 129,  157 => 126,  154 => 125,  151 => 124,  147 => 122,  142 => 120,  135 => 116,  111 => 95,  107 => 94,  103 => 93,  99 => 92,  81 => 77,  69 => 67,  67 => 51,  63 => 49,  61 => 10,  58 => 9,  52 => 5,  46 => 1,);
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
            .error-message {
                color: red;
                font-size: 14px;
            }

            /* CSS pour les boutons Save et Reset */
            .button.button5 {
                border-radius: 20px; /* Arrondi les bords */
                transition: background-color 0.3s ease; /* Animation de transition pour le changement de couleur */
                padding: 10px 20px; /* Ajuste la taille du bouton en ajustant le padding */
                font-size: 16px; /* Ajuste la taille de la police */
                font-weight: bold; /* Rend la police en gras */
            }

            /* Au survol du bouton */
            .button.button5:hover {
                background-color: rgba(255, 0, 127, 0.4); /* Rose avec une opacité de 40% */
            }

            .button.button5 {
            border-radius: 20px; /* Arrondi les bords */
            transition: background-color 0.3s ease; /* Animation de transition pour le changement de couleur */
        }

        /* Au survol du bouton */
        .button.button5:hover {
            background-color: rgba(255, 0, 127, 0.4); /* Rose avec une opacité de 40% */
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
        <td>{{ form_label(form.datePub, \"Date du post\") }}</td>
        <td>
            {{ form_widget(form.datePub) }}
            {# Affiche les erreurs de validation du champ \"datePub\" #}
            {% if form_errors(form.datePub) %}
                <div class=\"error-message\">
                    {{ form_errors(form.datePub) }}
                </div>
            {% endif %}
        </td>
    </tr>

    <tr>
        <td>{{ form_label(form.file, \"Fichier\") }}</td>
        <td>{{ form_widget(form.file) }}</td>
    </tr>
</table>

{{ form_widget(form.save, {'attr': {'class': 'button button5'}}) }}
<!-- Bouton de réinitialisation -->
<button type=\"reset\" class=\"button button5\">Reset</button>

{{ form_end(form) }}
</body>
</html>
", "post/addPost.html.twig", "C:\\Users\\lenovo\\Desktop\\PIDEV\\GAMI\\web\\front\\templates\\Post\\addPost.html.twig");
    }
}
