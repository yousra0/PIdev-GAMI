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

/* calendar/show.html.twig */
class __TwigTemplate_43965e4b3bb48e1c0397c467bc436728 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/show.html.twig"));

        $this->parent = $this->loadTemplate("base3.html.twig", "calendar/show.html.twig", 1);
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

        echo "Calendar";
        
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
    /* Table */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

/* Table header */
.table th {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    padding: 8px;
    text-align: left;
}

/* Table rows */
.table td {
    border: 1px solid #dee2e6;
    padding: 8px;
}

/* Alternate row colors */
.table tbody tr:nth-child(even) {
    background-color: #f8f9fa;
}

/* Actions links */
.table td a {
    margin-right: 5px;
}
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

    // line 149
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 150
        echo "    <h1>Calendar</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 156, $this->source); })()), "id", [], "any", false, false, false, 156), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 160, $this->source); })()), "title", [], "any", false, false, false, 160), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Start</th>
                <td>";
        // line 164
        ((twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 164, $this->source); })()), "start", [], "any", false, false, false, 164)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 164, $this->source); })()), "start", [], "any", false, false, false, 164), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>End</th>
                <td>";
        // line 168
        ((twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 168, $this->source); })()), "end", [], "any", false, false, false, 168)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 168, $this->source); })()), "end", [], "any", false, false, false, 168), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 172, $this->source); })()), "description", [], "any", false, false, false, 172), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>All_day</th>
                <td>";
        // line 176
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 176, $this->source); })()), "allDay", [], "any", false, false, false, 176)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Background_color</th>
                <td>";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 180, $this->source); })()), "backgroundColor", [], "any", false, false, false, 180), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Border_color</th>
                <td>";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 184, $this->source); })()), "borderColor", [], "any", false, false, false, 184), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text_color</th>
                <td>";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 188, $this->source); })()), "textColor", [], "any", false, false, false, 188), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 195, $this->source); })()), "id", [], "any", false, false, false, 195)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 197
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
        return "calendar/show.html.twig";
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
        return array (  334 => 197,  329 => 195,  324 => 193,  316 => 188,  309 => 184,  302 => 180,  295 => 176,  288 => 172,  281 => 168,  274 => 164,  267 => 160,  260 => 156,  252 => 150,  242 => 149,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base3.html.twig' %}

{% block title %}Calendar{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;800&display=swap\" rel=\"stylesheet\">
    <style>
    /* Table */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

/* Table header */
.table th {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    padding: 8px;
    text-align: left;
}

/* Table rows */
.table td {
    border: 1px solid #dee2e6;
    padding: 8px;
}

/* Alternate row colors */
.table tbody tr:nth-child(even) {
    background-color: #f8f9fa;
}

/* Actions links */
.table td a {
    margin-right: 5px;
}
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
    <h1>Calendar</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ calendar.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ calendar.title }}</td>
            </tr>
            <tr>
                <th>Start</th>
                <td>{{ calendar.start ? calendar.start|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>End</th>
                <td>{{ calendar.end ? calendar.end|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ calendar.description }}</td>
            </tr>
            <tr>
                <th>All_day</th>
                <td>{{ calendar.allDay ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Background_color</th>
                <td>{{ calendar.backgroundColor }}</td>
            </tr>
            <tr>
                <th>Border_color</th>
                <td>{{ calendar.borderColor }}</td>
            </tr>
            <tr>
                <th>Text_color</th>
                <td>{{ calendar.textColor }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('calendar_index') }}\">back to list</a>

    <a href=\"{{ path('calendar_edit', {'id': calendar.id}) }}\">edit</a>

    {{ include('calendar/_delete_form.html.twig') }}
{% endblock %}
", "calendar/show.html.twig", "C:\\Users\\lenovo\\Desktop\\PIdev-GAMI-main\\PIdev-GAMI-main\\templates\\calendar\\show.html.twig");
    }
}
