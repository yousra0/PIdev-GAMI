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

/* @EWZRecaptcha/Form/v3/ewz_recaptcha_widget.html.twig */
class __TwigTemplate_9b57f5cf36a0efa6713d23aefe44e2ed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'ewz_recaptcha_widget' => [$this, 'block_ewz_recaptcha_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EWZRecaptcha/Form/v3/ewz_recaptcha_widget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EWZRecaptcha/Form/v3/ewz_recaptcha_widget.html.twig"));

        // line 1
        $this->displayBlock('ewz_recaptcha_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_ewz_recaptcha_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ewz_recaptcha_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ewz_recaptcha_widget"));

        // line 2
        ob_start();
        // line 3
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "ewz_recaptcha_enabled", [], "any", false, false, false, 3)) {
            // line 4
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "ewz_recaptcha_api_uri", [], "any", false, false, false, 4), "html", null, true);
            echo "?render=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "public_key", [], "any", false, false, false, 4), "html", null, true);
            echo "\"></script>

    ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "ewz_recaptcha_hide_badge", [], "any", false, false, false, 6)) {
                // line 7
                echo "      <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/ewzrecaptcha/css/recaptcha.css"), "html", null, true);
                echo "\">
    ";
            }
            // line 9
            echo "
    ";
            // line 10
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'widget');
            echo "

    <script";
            // line 12
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 12), "script_nonce_csp", [], "any", true, true, false, 12) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "script_nonce_csp", [], "any", false, false, false, 12) === ""))) {
                echo " nonce=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "script_nonce_csp", [], "any", false, false, false, 12), "html", null, true);
                echo "\"";
            }
            echo ">
      var grecaptchaInput = document.getElementById('";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "');
      grecaptchaInput.value = ''; // Always reset the value to get a brand new challenge
      var grecaptchaForm = grecaptchaInput.form;
      grecaptchaForm.addEventListener('submit', function (e) {
        e.preventDefault();

        grecaptcha.ready(function () {
          grecaptcha.execute('";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "public_key", [], "any", false, false, false, 20), "html", null, true);
            echo "', { action: '";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 20), "action_name", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 20), "action_name", [], "any", false, false, false, 20), twig_constant("EWZ\\Bundle\\RecaptchaBundle\\Form\\Type\\EWZRecaptchaV3Type::DEFAULT_ACTION_NAME"))) : (twig_constant("EWZ\\Bundle\\RecaptchaBundle\\Form\\Type\\EWZRecaptchaV3Type::DEFAULT_ACTION_NAME"))), "html", null, true);
            echo "' }).then(function (token) {
            grecaptchaInput.value = token;
            HTMLFormElement.prototype.submit.call(grecaptchaForm);
          });
        });
      }, false);
    </script>
  ";
        }
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_spaceless($___internal_parse_3_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EWZRecaptcha/Form/v3/ewz_recaptcha_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  124 => 2,  110 => 20,  100 => 13,  92 => 12,  87 => 10,  84 => 9,  78 => 7,  76 => 6,  68 => 4,  65 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block ewz_recaptcha_widget %}
{% apply spaceless %}
  {% if form.vars.ewz_recaptcha_enabled %}
    <script src=\"{{ form.vars.ewz_recaptcha_api_uri }}?render={{ form.vars.public_key }}\"></script>

    {% if form.vars.ewz_recaptcha_hide_badge %}
      <link rel=\"stylesheet\" href=\"{{ asset('/bundles/ewzrecaptcha/css/recaptcha.css') }}\">
    {% endif %}

    {{ form_widget(form) }}

    <script{% if form.vars.script_nonce_csp is defined and form.vars.script_nonce_csp is not same as('') %} nonce=\"{{ form.vars.script_nonce_csp }}\"{% endif %}>
      var grecaptchaInput = document.getElementById('{{ id }}');
      grecaptchaInput.value = ''; // Always reset the value to get a brand new challenge
      var grecaptchaForm = grecaptchaInput.form;
      grecaptchaForm.addEventListener('submit', function (e) {
        e.preventDefault();

        grecaptcha.ready(function () {
          grecaptcha.execute('{{ form.vars.public_key }}', { action: '{{ form.vars.action_name|default(constant('EWZ\\\\Bundle\\\\RecaptchaBundle\\\\Form\\\\Type\\\\EWZRecaptchaV3Type::DEFAULT_ACTION_NAME')) }}' }).then(function (token) {
            grecaptchaInput.value = token;
            HTMLFormElement.prototype.submit.call(grecaptchaForm);
          });
        });
      }, false);
    </script>
  {% endif %}
{% endapply %}
{% endblock %}
", "@EWZRecaptcha/Form/v3/ewz_recaptcha_widget.html.twig", "C:\\Users\\lenovo\\Desktop\\PIdev-GAMI-main\\PIdev-GAMI-main\\vendor\\excelwebzone\\recaptcha-bundle\\src\\Resources\\views\\Form\\v3\\ewz_recaptcha_widget.html.twig");
    }
}
