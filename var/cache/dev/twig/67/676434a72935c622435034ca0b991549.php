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

/* post/editPost.html.twig */
class __TwigTemplate_3cdb6afe296a0bcb906d289b390d2e4f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/editPost.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/editPost.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/editPost.html.twig", 1);
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

        echo "Edit Post";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
    ";
        // line 7
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        /* Styles spécifiques à cette page */
        h1 {
            color: white; /* Couleur du titre */
            font-size: 24px; /* Taille du titre */
        }

        /* Styles pour l'image */
        img {
            max-width: 100%; /* Image s'adapte à la largeur du conteneur */
            height: auto; /* Hauteur proportionnelle à la largeur */
            margin-top: 20px; /* Marge en haut de l'image */
        }

        /* Styles pour le formulaire */
        form {
            margin-top: 20px; /* Marge en haut du formulaire */
            color: white;
        }

        /* Styles pour les étiquettes des champs */
        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Styles pour les champs de texte */
        form input[type=\"text\"], form input[type=\"date\"], form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #333333; /* Couleur de fond */
            color: #ffffff; /* Couleur du texte */
        }

        /* Styles pour les boutons */
        form button {
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

        /* Au survol des boutons */
        form button:hover {
            background-color: rgba(255, 0, 127, 0.8); /* Rose avec une opacité de 80% */
        }

        /* Styles pour les messages d'erreur */
        .error-message {
            color: #ff0000; /* Rouge */
            font-size: 14px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 72
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 73
        echo "<!-- *** Header Area Start *** -->
  <header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- *** Logo Start *** -->
                    <a href=\"";
        // line 80
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
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse");
        echo "\">Browse</a></li>
                        <li><a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_details");
        echo "\">Details</a></li>
                        <li><a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_streams");
        echo "\">Streams</a></li>
                        <li><a href=\"";
        // line 98
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


        
    <h1>Edit Post</h1>

    ";
        // line 119
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'form_start');
        echo "
    ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), 'widget');
        echo "

    ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 122, $this->source); })()), "file", [], "any", false, false, false, 122)) {
            // line 123
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 123, $this->source); })()), "file", [], "any", false, false, false, 123))), "html", null, true);
            echo "\" alt=\"Image\">
    ";
        }
        // line 125
        echo "
    ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), 'form_end');
        echo "

    <a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listPost");
        echo "\">Back to List</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "post/editPost.html.twig";
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
        return array (  264 => 128,  259 => 126,  256 => 125,  250 => 123,  248 => 122,  243 => 120,  239 => 119,  215 => 98,  211 => 97,  207 => 96,  203 => 95,  185 => 80,  176 => 73,  166 => 72,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Post{% endblock %}

{% block stylesheets %}

    {{ parent() }}
    <style>
        /* Styles spécifiques à cette page */
        h1 {
            color: white; /* Couleur du titre */
            font-size: 24px; /* Taille du titre */
        }

        /* Styles pour l'image */
        img {
            max-width: 100%; /* Image s'adapte à la largeur du conteneur */
            height: auto; /* Hauteur proportionnelle à la largeur */
            margin-top: 20px; /* Marge en haut de l'image */
        }

        /* Styles pour le formulaire */
        form {
            margin-top: 20px; /* Marge en haut du formulaire */
            color: white;
        }

        /* Styles pour les étiquettes des champs */
        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Styles pour les champs de texte */
        form input[type=\"text\"], form input[type=\"date\"], form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #333333; /* Couleur de fond */
            color: #ffffff; /* Couleur du texte */
        }

        /* Styles pour les boutons */
        form button {
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

        /* Au survol des boutons */
        form button:hover {
            background-color: rgba(255, 0, 127, 0.8); /* Rose avec une opacité de 80% */
        }

        /* Styles pour les messages d'erreur */
        .error-message {
            color: #ff0000; /* Rouge */
            font-size: 14px;
        }
    </style>
{% endblock %}

{% block body %}
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


        
    <h1>Edit Post</h1>

    {{ form_start(form) }}
    {{ form_widget(form) }}

    {% if post.file %}
        <img src=\"{{ asset('uploads/' ~ post.file) }}\" alt=\"Image\">
    {% endif %}

    {{ form_end(form) }}

    <a href=\"{{ path('listPost') }}\">Back to List</a>
{% endblock %}
", "post/editPost.html.twig", "C:\\Users\\lenovo\\Desktop\\PIDEV\\GAMI\\web\\front\\templates\\Post\\editPost.html.twig");
    }
}
