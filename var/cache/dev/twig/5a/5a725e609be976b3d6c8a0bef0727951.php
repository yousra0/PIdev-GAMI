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

/* calendar/index.html.twig */
class __TwigTemplate_fcd529ed9ade4e7e48c5c6402a2d9703 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/index.html.twig"));

        $this->parent = $this->loadTemplate("base3.html.twig", "calendar/index.html.twig", 1);
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

        echo "Calendar index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    <style>
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

    // line 131
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 132
        echo "    <h1>Calendar index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Start</th>
                <th>End</th>
                <th>Description</th>
                <th>All_day</th>
                <th>Background_color</th>
                <th>Border_color</th>
                <th>Text_color</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calendars"]) || array_key_exists("calendars", $context) ? $context["calendars"] : (function () { throw new RuntimeError('Variable "calendars" does not exist.', 150, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["calendar"]) {
            // line 151
            echo "            <tr>
                <td>";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "id", [], "any", false, false, false, 152), "html", null, true);
            echo "</td>
                <td>";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "title", [], "any", false, false, false, 153), "html", null, true);
            echo "</td>
                <td>";
            // line 154
            ((twig_get_attribute($this->env, $this->source, $context["calendar"], "start", [], "any", false, false, false, 154)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "start", [], "any", false, false, false, 154), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 155
            ((twig_get_attribute($this->env, $this->source, $context["calendar"], "end", [], "any", false, false, false, 155)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "end", [], "any", false, false, false, 155), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "description", [], "any", false, false, false, 156), "html", null, true);
            echo "</td>
                <td>";
            // line 157
            echo ((twig_get_attribute($this->env, $this->source, $context["calendar"], "allDay", [], "any", false, false, false, 157)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "backgroundColor", [], "any", false, false, false, 158), "html", null, true);
            echo "</td>
                <td>";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "borderColor", [], "any", false, false, false, 159), "html", null, true);
            echo "</td>
                <td>";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "textColor", [], "any", false, false, false, 160), "html", null, true);
            echo "</td>
                <td>
                <button>
                <span>
                    <a href=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_show", ["id" => twig_get_attribute($this->env, $this->source, $context["calendar"], "id", [], "any", false, false, false, 164)]), "html", null, true);
            echo "\">show</a>
                </span> 
                </button>
                <button>   
                <span>
                <a href=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["calendar"], "id", [], "any", false, false, false, 169)]), "html", null, true);
            echo "\">edit</a>
                </span>
                </button>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 175
            echo "            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "        </tbody>
    </table>
<button>   
<span>
    <a href=\"";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_new");
        echo "\">Create new</a>
    </span>
</button>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "calendar/index.html.twig";
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
        return array (  333 => 183,  327 => 179,  318 => 175,  307 => 169,  299 => 164,  292 => 160,  288 => 159,  284 => 158,  280 => 157,  276 => 156,  272 => 155,  268 => 154,  264 => 153,  260 => 152,  257 => 151,  252 => 150,  232 => 132,  222 => 131,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base3.html.twig' %}

{% block title %}Calendar index{% endblock %}


    {% block stylesheets %}
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
    <h1>Calendar index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Start</th>
                <th>End</th>
                <th>Description</th>
                <th>All_day</th>
                <th>Background_color</th>
                <th>Border_color</th>
                <th>Text_color</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for calendar in calendars %}
            <tr>
                <td>{{ calendar.id }}</td>
                <td>{{ calendar.title }}</td>
                <td>{{ calendar.start ? calendar.start|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ calendar.end ? calendar.end|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ calendar.description }}</td>
                <td>{{ calendar.allDay ? 'Yes' : 'No' }}</td>
                <td>{{ calendar.backgroundColor }}</td>
                <td>{{ calendar.borderColor }}</td>
                <td>{{ calendar.textColor }}</td>
                <td>
                <button>
                <span>
                    <a href=\"{{ path('calendar_show', {'id': calendar.id}) }}\">show</a>
                </span> 
                </button>
                <button>   
                <span>
                <a href=\"{{ path('calendar_edit', {'id': calendar.id}) }}\">edit</a>
                </span>
                </button>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
<button>   
<span>
    <a href=\"{{ path('calendar_new') }}\">Create new</a>
    </span>
</button>
{% endblock %}
", "calendar/index.html.twig", "C:\\Users\\lenovo\\Desktop\\PIdev-GAMI-main\\PIdev-GAMI-main\\templates\\calendar\\index.html.twig");
    }
}
