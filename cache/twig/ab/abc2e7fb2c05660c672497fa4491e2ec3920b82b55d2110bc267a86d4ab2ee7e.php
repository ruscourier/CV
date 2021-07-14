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

/* partials/header.html.twig */
class __TwigTemplate_9d3bc2af9d162f8a6dd06e8429de206e96bad79c18659f4a2fc3e04b304fea6a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"header\">
    <div class=\"row\">
        <div class=\"large-3 columns\">
            ";
        // line 4
        if ($this->getAttribute(($context["site"] ?? null), "title", [])) {
            // line 5
            echo "                <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
            echo "</h2>
            ";
        }
        // line 7
        echo "            ";
        if ($this->getAttribute(($context["site"] ?? null), "description", [])) {
            // line 8
            echo "                <h6 class=\"light\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "description", []), "html", null, true);
            echo "</h6>
            ";
        }
        // line 10
        echo "        </div>
        <div class=\"large-3 columns\">
            <div class=\"row\">
                <div class=\"small-4 columns light2 italic\">
                    Address:
                </div>
                <div class=\"small-8 columns border-left light2 \">
                    <ul class=\"no-bullet\">
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "address", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "line", []), "html", null, true);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                    </ul>
                </div>
            </div>
        </div>
        <div class=\"large-3 columns\">
            <div class=\"row\">
                <div class=\"small-4 columns light2 italic\">
                    Contact:
                </div>
                <div class=\"small-8 columns border-left light2\">
                    <ul class=\"no-bullet\">
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "contact", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "                            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "line", []), "html", null, true);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </ul>
                </div>
            </div>
        </div>
        <div class=\"large-2 columns text-right italic website\">
            <a href=\"http://";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "website", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "website", []), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>
<p></p>
<div class=\"border text-center\">“DevOps is not a goal, but a never-ending process of continual improvement” (Jez Humble)</div>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  92 => 33,  88 => 32,  75 => 21,  66 => 19,  62 => 18,  52 => 10,  46 => 8,  43 => 7,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"header\">
    <div class=\"row\">
        <div class=\"large-3 columns\">
            {% if site.title %}
                <h2>{{ site.title }}</h2>
            {% endif %}
            {% if site.description %}
                <h6 class=\"light\">{{ site.description }}</h6>
            {% endif %}
        </div>
        <div class=\"large-3 columns\">
            <div class=\"row\">
                <div class=\"small-4 columns light2 italic\">
                    Address:
                </div>
                <div class=\"small-8 columns border-left light2 \">
                    <ul class=\"no-bullet\">
                        {% for item in site.address %}
                            <li>{{ item.line }}</li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"large-3 columns\">
            <div class=\"row\">
                <div class=\"small-4 columns light2 italic\">
                    Contact:
                </div>
                <div class=\"small-8 columns border-left light2\">
                    <ul class=\"no-bullet\">
                        {% for item in site.contact %}
                            <li>{{ item.line }}</li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"large-2 columns text-right italic website\">
            <a href=\"http://{{ site.website }}\">{{ site.website }}</a>
        </div>
    </div>
</div>
<p></p>
<div class=\"border text-center\">“DevOps is not a goal, but a never-ending process of continual improvement” (Jez Humble)</div>
", "partials/header.html.twig", "/Users/ruscourier/Documents/Projects/CV/personal/user/themes/resume/templates/partials/header.html.twig");
    }
}
