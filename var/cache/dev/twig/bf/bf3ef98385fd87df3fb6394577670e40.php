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

/* comment/editComment.html.twig */
class __TwigTemplate_f54306820a6aa697d496b5a28b5e9653 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/editComment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/editComment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "comment/editComment.html.twig", 1);
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

        echo "Edit Comment";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "
    ";
        // line 6
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
                color: red;
                font-size: 14px;
            }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 71
        echo "    <!-- Contenu de la page -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"page-content\">
                    <h1>Edit Comment</h1>

                    ";
        // line 78
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "session", [], "any", false, false, false, 78), "flashBag", [], "any", false, false, false, 78), "has", ["error"], "method", false, false, false, 78)) {
            // line 79
            echo "                        <div class=\"error-message\">
                            ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "session", [], "any", false, false, false, 80), "flashBag", [], "any", false, false, false, 80), "get", ["error"], "method", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 81
                echo "                                ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                        </div>
                    ";
        }
        // line 85
        echo "
                    ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'widget');
        echo "
                    ";
        // line 88
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "vars", [], "any", false, false, false, 88), "errors", [], "any", false, false, false, 88)) > 0)) {
            // line 89
            echo "                        <div class=\"error-message\">
                            ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "vars", [], "any", false, false, false, 90), "errors", [], "any", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 91
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 91), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                        </div>
                    ";
        }
        // line 95
        echo "                    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_end');
        echo "

                    <a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listPost");
        echo "\">Back to List</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "comment/editComment.html.twig";
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
        return array (  246 => 97,  240 => 95,  236 => 93,  227 => 91,  223 => 90,  220 => 89,  218 => 88,  214 => 87,  210 => 86,  207 => 85,  203 => 83,  194 => 81,  190 => 80,  187 => 79,  185 => 78,  176 => 71,  166 => 70,  92 => 6,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Comment{% endblock %}
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
                color: red;
                font-size: 14px;
            }
    </style>
{% endblock %}
{% block body %}
    <!-- Contenu de la page -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"page-content\">
                    <h1>Edit Comment</h1>

                    {% if app.session.flashBag.has('error') %}
                        <div class=\"error-message\">
                            {% for message in app.session.flashBag.get('error') %}
                                {{ message }}
                            {% endfor %}
                        </div>
                    {% endif %}

                    {{ form_start(form) }}
                    {{ form_widget(form) }}
                    {% if form.vars.errors|length > 0 %}
                        <div class=\"error-message\">
                            {% for error in form.vars.errors %}
                                {{ error.message }}
                            {% endfor %}
                        </div>
                    {% endif %}
                    {{ form_end(form) }}

                    <a href=\"{{ path('listPost') }}\">Back to List</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "comment/editComment.html.twig", "C:\\Users\\lenovo\\Desktop\\PIdev-GAMI-main\\PIdev-GAMI-main\\templates\\comment\\editComment.html.twig");
    }
}
