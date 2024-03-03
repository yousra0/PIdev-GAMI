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

/* post_back/listPostBack.html.twig */
class __TwigTemplate_a148e8a5d5eb5a8fdf378b13720913eb extends Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post_back/listPostBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post_back/listPostBack.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "post_back/listPostBack.html.twig", 1);
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

        echo "GAMI";
        
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
        echo "
        <style>
.pagination {
            display: flex;
            list-style: none;
            padding: 0;
            justify-content: center;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination a {
            color: black;
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        .pagination a:hover {
            background-color: #f2f2f2;
        }
        </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <div class=\"container\">
        <h1>List post</h1>
        <div id=\"result\"></div>
        <input type=\"search\" class=\"form-control\" placeholder=\"Chercher\" id=\"search\" aria-label=\"Search Dashboard\">
        <table class=\"table table-bordered\" id=\"tableac\">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Date</th>
                    <th>Image</th>
                    <th>Likes</th>
                    <th>Dislikes</th>
                    <th>Commentaires</th>
                    <th>Actions des posts</th>
                    <th>Actions des commentaires</th>
                    
                </tr>
            </thead>
            <tbody>
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 59
            echo "                    <tr>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "contenuPub", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                        <td>";
            // line 62
            ((twig_get_attribute($this->env, $this->source, $context["post"], "datePub", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "datePub", [], "any", false, false, false, 62), "format", ["Y-m-d H:i:s"], "method", false, false, false, 62), "html", null, true))) : (print ("")));
            echo "</td>
                        <td><img src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["post"], "file", [], "any", false, false, false, 63))), "html", null, true);
            echo "\" alt=\"Image\" style=\"max-width: 100px;\"></td>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "likes", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "dislikes", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                        <td>
                            <ul class=\"comments-list\">
                                <div id=\"comments-container-";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\"></div>
                                
                                ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 70));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 71
                echo "                                    <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "contenuComment", [], "any", false, false, false, 71), "html", null, true);
                echo "</li>
                                    
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                            </ul>
                        </td>
                        <td>
                            <div class=\"post-actions\">
                                <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletePostBack", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
                                <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editPostBack", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Edit</a>
                            </div>
                        </td>
                        <td>
                            ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 83));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 84
                echo "                                <div class=\"comment-actions\">
                                    <a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteComment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Delete</a>
                                    <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editComment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Edit</a>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                        </td> 
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "            </tbody>
        </table>
        <a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addpostback");
        echo "\" class=\"btn btn-success\">Add</a>
        ";
        // line 96
        echo "    ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 96, $this->source); })()));
        echo "
    </div>

<script>
        \$(document).ready(function(){
            \$('#search').keyup(function(){
                search_table(\$(this).val());
            });
            function search_table(value){
                \$('#tableac tbody tr').each(function(){
                    var found = false;
                    \$(this).find('td:nth-child(1),td:nth-child(2), td:nth-child(3), td:nth-child(5), td:nth-child(6)').each(function(){ 
                        if(\$(this).text().toLowerCase().includes(value.toLowerCase())){
                            found = true;
                            return false; 
                        }
                    });
                    if(found){
                        \$(this).show();
                    } else {
                        \$(this).hide();
                    }
                });
            }
        });
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
        return "post_back/listPostBack.html.twig";
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
        return array (  265 => 96,  261 => 94,  257 => 92,  249 => 89,  240 => 86,  236 => 85,  233 => 84,  229 => 83,  222 => 79,  218 => 78,  212 => 74,  202 => 71,  198 => 70,  193 => 68,  187 => 65,  183 => 64,  179 => 63,  175 => 62,  171 => 61,  167 => 60,  164 => 59,  160 => 58,  135 => 37,  125 => 36,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}GAMI{% endblock %}


    {% block stylesheets %}

        <style>
.pagination {
            display: flex;
            list-style: none;
            padding: 0;
            justify-content: center;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination a {
            color: black;
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        .pagination a:hover {
            background-color: #f2f2f2;
        }
        </style>
    {% endblock %}


{% block body %}
<script src=\"{{ asset( 'js/jquery.js') }}\"></script>
    <div class=\"container\">
        <h1>List post</h1>
        <div id=\"result\"></div>
        <input type=\"search\" class=\"form-control\" placeholder=\"Chercher\" id=\"search\" aria-label=\"Search Dashboard\">
        <table class=\"table table-bordered\" id=\"tableac\">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Date</th>
                    <th>Image</th>
                    <th>Likes</th>
                    <th>Dislikes</th>
                    <th>Commentaires</th>
                    <th>Actions des posts</th>
                    <th>Actions des commentaires</th>
                    
                </tr>
            </thead>
            <tbody>
                {% for post in pagination %}
                    <tr>
                        <td>{{ post.titre }}</td>
                        <td>{{ post.contenuPub }}</td>
                        <td>{{ post.datePub ? post.datePub.format('Y-m-d H:i:s') : '' }}</td>
                        <td><img src=\"{{ asset('uploads/' ~ post.file) }}\" alt=\"Image\" style=\"max-width: 100px;\"></td>
                        <td>{{ post.likes }}</td>
                        <td>{{ post.dislikes }}</td>
                        <td>
                            <ul class=\"comments-list\">
                                <div id=\"comments-container-{{ post.id }}\"></div>
                                
                                {% for comment in post.comments %}
                                    <li>{{ comment.contenuComment }}</li>
                                    
                                {% endfor %}
                            </ul>
                        </td>
                        <td>
                            <div class=\"post-actions\">
                                <a href=\"{{ path('deletePostBack', {'id': post.id}) }}\" class=\"btn btn-danger\">Delete</a>
                                <a href=\"{{ path('editPostBack', {'id': post.id}) }}\" class=\"btn btn-primary\">Edit</a>
                            </div>
                        </td>
                        <td>
                            {% for comment in post.comments %}
                                <div class=\"comment-actions\">
                                    <a href=\"{{ path('deleteComment', {'id': comment.id}) }}\" class=\"btn btn-danger\">Delete</a>
                                    <a href=\"{{ path('editComment', {'id': comment.id}) }}\" class=\"btn btn-primary\">Edit</a>
                                </div>
                            {% endfor %}
                        </td> 
                    </tr>
                {% endfor %}
            </tbody>
        </table>
        <a href=\"{{ path('addpostback') }}\" class=\"btn btn-success\">Add</a>
        {# Afficher les liens de pagination #}
    {{ knp_pagination_render(pagination) }}
    </div>

<script>
        \$(document).ready(function(){
            \$('#search').keyup(function(){
                search_table(\$(this).val());
            });
            function search_table(value){
                \$('#tableac tbody tr').each(function(){
                    var found = false;
                    \$(this).find('td:nth-child(1),td:nth-child(2), td:nth-child(3), td:nth-child(5), td:nth-child(6)').each(function(){ 
                        if(\$(this).text().toLowerCase().includes(value.toLowerCase())){
                            found = true;
                            return false; 
                        }
                    });
                    if(found){
                        \$(this).show();
                    } else {
                        \$(this).hide();
                    }
                });
            }
        });
    </script>

{% endblock %}
", "post_back/listPostBack.html.twig", "C:\\Users\\lenovo\\Desktop\\PIdev-GAMI-main\\PIdev-GAMI-main\\templates\\post_back\\listPostBack.html.twig");
    }
}
