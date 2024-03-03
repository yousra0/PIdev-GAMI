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

/* calendar/edit.html.twig */
class __TwigTemplate_c160a45a86d41e2387073dec8e57eecc extends Template
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
        return "base3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/edit.html.twig"));

        $this->parent = $this->loadTemplate("base3.html.twig", "calendar/edit.html.twig", 1);
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

        echo "Edit Calendar";
        
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
        echo "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;800&display=swap\" rel=\"stylesheet\">
    <style>
        body {
            display: flex;
            flex-flow: column;
            align-items: center;
            font-family: \"Poppins\", serif;
            background: rgb(238, 174, 202);
            background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);
        }

        h1 {
            font-weight: 800;
            margin: 1rem 0 0;
        }

        ul {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 0.25rem;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 10rem;
            height: 10rem;
            margin: 0.25rem;
            font-weight: 300;
            font-size: 0.8rem;
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            position: relative;
            overflow: hidden;
        }

        time {
            font-size: 2rem;
            margin: 0;
            font-weight: 500;
        }

        .today {
            background: #ffffff70;
        }

/* Table */
.calendar-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

/* Table header */
.calendar-table th {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    padding: 8px;
    text-align: left;
}

/* Table rows */
.calendar-table td {
    border: 1px solid #dee2e6;
    padding: 8px;
}

/* Alternate row colors */
.calendar-table tbody tr:nth-child(even) {
    background-color: #f8f9fa;
}

/* Actions links */
.calendar-table td a {
    margin-right: 5px;
}
/* Styles pour le formulaire */
        form {
            margin-top: 20px;
        }
        /* Styles pour les champs de texte */
        form input[type=\"text\"], form input[type=\"date\"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: white; /* Couleur de fond */
            color: black; /* Couleur du texte */
        }
        /* Styles pour les étiquettes des champs */
        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        button {
        display: inline-block;
        background-color: #7b38d8;
        border-radius: 10px;
        border: 4px double #cccccc;
        color: #eeeeee;
        text-align: center;
        font-size: 14px;
        padding: 10px;
        width: auto;
        transition: all 0.5s;
        cursor: pointer;
        margin: 2px;
      }
      button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }
      button span:after {
        content: \"\\00bb\";
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }
      button:hover {
        background-color: #f7c2f9;
      }
      button:hover span {
        padding-right: 25px;
      }
      button:hover span:after {
        opacity: 1;
        right: 0;
      }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 150
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 151
        echo "    <h1>Edit Calendar</h1>

    ";
        // line 153
        echo twig_include($this->env, $context, "calendar/_form.html.twig", ["button_label" => "Update"]);
        echo "

    <a href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_index");
        echo "\">back to list</a>

    ";
        // line 157
        echo twig_include($this->env, $context, "calendar/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "calendar/edit.html.twig";
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
        return array (  267 => 157,  262 => 155,  257 => 153,  253 => 151,  243 => 150,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base3.html.twig' %}

{% block title %}Edit Calendar{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;800&display=swap\" rel=\"stylesheet\">
    <style>
        body {
            display: flex;
            flex-flow: column;
            align-items: center;
            font-family: \"Poppins\", serif;
            background: rgb(238, 174, 202);
            background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);
        }

        h1 {
            font-weight: 800;
            margin: 1rem 0 0;
        }

        ul {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 0.25rem;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 10rem;
            height: 10rem;
            margin: 0.25rem;
            font-weight: 300;
            font-size: 0.8rem;
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            position: relative;
            overflow: hidden;
        }

        time {
            font-size: 2rem;
            margin: 0;
            font-weight: 500;
        }

        .today {
            background: #ffffff70;
        }

/* Table */
.calendar-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

/* Table header */
.calendar-table th {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    padding: 8px;
    text-align: left;
}

/* Table rows */
.calendar-table td {
    border: 1px solid #dee2e6;
    padding: 8px;
}

/* Alternate row colors */
.calendar-table tbody tr:nth-child(even) {
    background-color: #f8f9fa;
}

/* Actions links */
.calendar-table td a {
    margin-right: 5px;
}
/* Styles pour le formulaire */
        form {
            margin-top: 20px;
        }
        /* Styles pour les champs de texte */
        form input[type=\"text\"], form input[type=\"date\"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: white; /* Couleur de fond */
            color: black; /* Couleur du texte */
        }
        /* Styles pour les étiquettes des champs */
        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        button {
        display: inline-block;
        background-color: #7b38d8;
        border-radius: 10px;
        border: 4px double #cccccc;
        color: #eeeeee;
        text-align: center;
        font-size: 14px;
        padding: 10px;
        width: auto;
        transition: all 0.5s;
        cursor: pointer;
        margin: 2px;
      }
      button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }
      button span:after {
        content: \"\\00bb\";
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }
      button:hover {
        background-color: #f7c2f9;
      }
      button:hover span {
        padding-right: 25px;
      }
      button:hover span:after {
        opacity: 1;
        right: 0;
      }
    </style>
{% endblock %}
{% block body %}
    <h1>Edit Calendar</h1>

    {{ include('calendar/_form.html.twig', {'button_label': 'Update'}) }}

    <a href=\"{{ path('calendar_index') }}\">back to list</a>

    {{ include('calendar/_delete_form.html.twig') }}
{% endblock %}
", "calendar/edit.html.twig", "C:\\Users\\lenovo\\Desktop\\PIdev-GAMI-main\\PIdev-GAMI-main\\templates\\calendar\\edit.html.twig");
    }
}
