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

/* post_back/search.html.twig */
class __TwigTemplate_9b636df06b8d217ff1984e4c101f0441 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post_back/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post_back/search.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "post_back/search.html.twig", 1);
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <h1>List post</h1>
        <div id=\"result\"></div>
        <table class=\"table table-bordered\">
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
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 25
            echo "                    <tr>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "contenuPub", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            ((twig_get_attribute($this->env, $this->source, $context["post"], "datePub", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "datePub", [], "any", false, false, false, 28), "format", ["Y-m-d H:i:s"], "method", false, false, false, 28), "html", null, true))) : (print ("")));
            echo "</td>
                        <td><img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["post"], "file", [], "any", false, false, false, 29))), "html", null, true);
            echo "\" alt=\"Image\" style=\"max-width: 100px;\"></td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "likes", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "dislikes", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td>
                            <ul class=\"comments-list\">
                                <div id=\"comments-container-";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\"></div>
                                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 36
                echo "                                    <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "contenuComment", [], "any", false, false, false, 36), "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                            </ul>
                        </td>
                        <td>
                            <div class=\"post-actions\">
                                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletePostBack", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
                                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editPostBack", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Edit</a>
                            </div>
                        </td>
                        <td>
                            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 48
                echo "                                <div class=\"comment-actions\">
                                    <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteComment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Delete</a>
                                    <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editComment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Edit</a>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </tbody>
        </table>
        <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addpostback");
        echo "\" class=\"btn btn-success\">Add</a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "<script>
    \$(document).ready(function() {
        var searchRequest = null;
        \$(\"#search\").keyup(function() {
            var minlength = 3;
            var that = this;
            var value = \$(this).val();
            var resultContainer = \$(\"#result\");
            if (value.length >= minlength ) {
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_post");
        echo "\",
                    data: {
                        'q' : value
                    },
                    dataType: \"html\",
                    success: function(html){
                        //we need to check if the value is the same
                        if (value==\$(that).val()) {
                            resultContainer.html(html);
                        }
                     }
                });
            }
        });
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
        return "post_back/search.html.twig";
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
        return array (  246 => 76,  231 => 63,  221 => 62,  208 => 58,  204 => 56,  196 => 53,  187 => 50,  183 => 49,  180 => 48,  176 => 47,  169 => 43,  165 => 42,  159 => 38,  150 => 36,  146 => 35,  142 => 34,  136 => 31,  132 => 30,  128 => 29,  124 => 28,  120 => 27,  116 => 26,  113 => 25,  109 => 24,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}GAMI{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>List post</h1>
        <div id=\"result\"></div>
        <table class=\"table table-bordered\">
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
                {% for post in posts %}
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
    </div>
{% endblock %}

{% block javascripts %}
<script>
    \$(document).ready(function() {
        var searchRequest = null;
        \$(\"#search\").keyup(function() {
            var minlength = 3;
            var that = this;
            var value = \$(this).val();
            var resultContainer = \$(\"#result\");
            if (value.length >= minlength ) {
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"GET\",
                    url: \"{{ path('search_post') }}\",
                    data: {
                        'q' : value
                    },
                    dataType: \"html\",
                    success: function(html){
                        //we need to check if the value is the same
                        if (value==\$(that).val()) {
                            resultContainer.html(html);
                        }
                     }
                });
            }
        });
    });
</script>
{% endblock %}
", "post_back/search.html.twig", "C:\\Users\\lenovo\\Desktop\\PIdev-GAMI-main\\PIdev-GAMI-main\\templates\\post_back\\search.html.twig");
    }
}
