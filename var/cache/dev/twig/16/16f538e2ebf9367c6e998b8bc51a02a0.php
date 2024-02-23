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
class __TwigTemplate_a8197980bb5227969f5ebc64b95bc429 extends Template
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
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 37
                echo "                                    <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "contenuComment", [], "any", false, false, false, 37), "html", null, true);
                echo "</li>
                                    
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                            </ul>
                        </td>
                        <td>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletePostBack", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editPostBack", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Edit</a>
                        </td>
                        <td>
                            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 48
                echo "
                    <div class=\"comment-actions\">
                    <td>
                        <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteComment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Delete</a>

                        <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editComment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Edit</a>
                    </td>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                        </td>
                        
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </tbody>
        </table>
        <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addpostback");
        echo "\" class=\"btn btn-success\">Add</a>
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
        return array (  212 => 63,  208 => 61,  199 => 57,  189 => 53,  184 => 51,  179 => 48,  175 => 47,  169 => 44,  165 => 43,  160 => 40,  150 => 37,  146 => 36,  141 => 34,  135 => 31,  131 => 30,  127 => 29,  123 => 28,  119 => 27,  115 => 26,  112 => 25,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}GAMI{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>List post</h1>
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
                            <a href=\"{{ path('deletePostBack', {'id': post.id}) }}\" class=\"btn btn-danger\">Delete</a>
                            <a href=\"{{ path('editPostBack', {'id': post.id}) }}\" class=\"btn btn-primary\">Edit</a>
                        </td>
                        <td>
                            {% for comment in post.comments %}

                    <div class=\"comment-actions\">
                    <td>
                        <a href=\"{{ path('deleteComment', {'id': comment.id}) }}\" class=\"btn btn-danger\">Delete</a>

                        <a href=\"{{ path('editComment', {'id': comment.id}) }}\" class=\"btn btn-primary\">Edit</a>
                    </td>
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
", "post_back/listPostBack.html.twig", "C:\\Users\\lenovo\\Desktop\\PIDEV\\GAMI\\web\\front\\templates\\post_back\\listPostBack.html.twig");
    }
}
