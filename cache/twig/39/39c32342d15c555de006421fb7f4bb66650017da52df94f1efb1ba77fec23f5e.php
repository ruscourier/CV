<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_98394e61881eca82b80c953b8b101f714882f9182c6a6987db63b58891412067 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $context["html_lang"] = (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        // line 3
        echo "<!--[if IE 9]><html class=\"lt-ie10\" lang=\"";
        echo twig_escape_filter($this->env, ($context["html_lang"] ?? null), "html", null, true);
        echo "\"> <![endif]-->
<html class=\"no-js\" lang=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["html_lang"] ?? null), "html", null, true);
        echo "\">
<head>
    ";
        // line 6
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 7
        echo "        ";
        $this->displayBlock('head', $context, $blocks);
        // line 33
        echo "    </head>
    <body>
        ";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "
         ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 48
        echo "
        ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        // line 57
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo " 

        <script type=\"text/javascript\">
        Pizza.init(document.body, {
            donut: true,
            donut_inner_ratio: 0.7,
        });
        </script>
    </body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        // line 8
        echo "            <meta charset=\"utf-8\" />
            <title>";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html", null, true);
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>
            ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/favicon.png"), "html", null, true);
        echo "\" />

            <script type='text/javascript' src='";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://js/vendor/modernizr.js"), "html", null, true);
        echo "'></script>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

            ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
            <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://css/print.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"print\" />

            ";
        // line 28
        $this->displayBlock('assets', $context, $blocks);
        // line 31
        echo "
        ";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 18
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/normalize.css"], "method");
        // line 19
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/foundation.css"], "method");
        // line 20
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://icons/foundation-icons.css"], "method");
        // line 21
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/animate.css"], "method");
        // line 22
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/pizza.css"], "method");
        // line 23
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/app.css"], "method");
        // line 24
        echo "            ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 28
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 29
        echo "                ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
            ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 35
    public function block_header($context, array $blocks = [])
    {
        // line 36
        echo "            ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 36)->display($context);
        // line 37
        echo "        ";
    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        // line 39
        echo "            <div class=\"row main\">
                ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "            </div>
        ";
    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        // line 41
        echo "                ";
    }

    // line 45
    public function block_footer($context, array $blocks = [])
    {
        // line 46
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "        ";
    }

    // line 49
    public function block_javascripts($context, array $blocks = [])
    {
        // line 50
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 51
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/foundation.min.js"], "method");
        // line 52
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/vendor/snap.svg.js"], "method");
        // line 53
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/pizza.js"], "method");
        // line 54
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 54,  240 => 53,  237 => 52,  234 => 51,  231 => 50,  228 => 49,  224 => 47,  221 => 46,  218 => 45,  214 => 41,  211 => 40,  206 => 42,  204 => 40,  201 => 39,  198 => 38,  194 => 37,  191 => 36,  188 => 35,  180 => 29,  177 => 28,  168 => 24,  165 => 23,  162 => 22,  159 => 21,  156 => 20,  153 => 19,  150 => 18,  147 => 17,  142 => 31,  140 => 28,  135 => 26,  132 => 25,  130 => 17,  124 => 14,  119 => 12,  116 => 11,  114 => 10,  106 => 9,  103 => 8,  100 => 7,  84 => 57,  80 => 56,  77 => 55,  75 => 49,  72 => 48,  70 => 45,  67 => 44,  64 => 38,  62 => 35,  58 => 33,  55 => 7,  53 => 6,  48 => 4,  43 => 3,  41 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
{% set html_lang = grav.language.getActive ?: grav.config.site.default_lang %}
<!--[if IE 9]><html class=\"lt-ie10\" lang=\"{{ html_lang }}\"> <![endif]-->
<html class=\"no-js\" lang=\"{{ html_lang }}\">
<head>
    {% set theme_config = attribute(config.themes, config.system.pages.theme) %}
        {% block head %}
            <meta charset=\"utf-8\" />
            <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
            {% include 'partials/metadata.html.twig' %}
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon.png') }}\" />

            <script type='text/javascript' src='{{ url('theme://js/vendor/modernizr.js') }}'></script>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

            {% block stylesheets %}
                {% do assets.addCss('theme://css/normalize.css') %}
                {% do assets.addCss('theme://css/foundation.css') %}
                {% do assets.addCss('theme://icons/foundation-icons.css') %}
                {% do assets.addCss('theme://css/animate.css') %}
                {% do assets.addCss('theme://css/pizza.css') %}
                {% do assets.addCss('theme://css/app.css') %}
            {% endblock %}

            <link href=\"{{ url('theme://css/print.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"print\" />

            {% block assets deferred %}
                {{ assets.css()|raw }}
            {% endblock %}

        {% endblock %}
    </head>
    <body>
        {% block header %}
            {% include 'partials/header.html.twig' %}
        {% endblock %}
        {% block body %}
            <div class=\"row main\">
                {% block content %}
                {% endblock %}
            </div>
        {% endblock %}

         {% block footer %}
            {% include 'partials/footer.html.twig' %}
        {% endblock %}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://js/foundation.min.js') %}
            {% do assets.addJs('theme://js/vendor/snap.svg.js') %}
            {% do assets.addJs('theme://js/pizza.js') %}
        {% endblock %}

        {{ assets.js()|raw }}
        {{ assets.js('bottom')|raw }} 

        <script type=\"text/javascript\">
        Pizza.init(document.body, {
            donut: true,
            donut_inner_ratio: 0.7,
        });
        </script>
    </body>
</html>
", "partials/base.html.twig", "/Users/ruscourier/Documents/Projects/CV/personal/user/themes/resume/templates/partials/base.html.twig");
    }
}
