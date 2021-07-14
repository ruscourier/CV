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

/* layouts/education.html.twig */
class __TwigTemplate_3cc174f6f14170733065213de3d5f18bf61b23d6c0b7e3f82605b2106615d00c extends \Twig\Template
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
        echo "<div class=\"avoid_pagebreak\">
<h4>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "title", []), "html", null, true);
        echo "</h4>

";
        // line 4
        echo $this->getAttribute(($context["module"] ?? null), "content", []);
        echo "

";
        // line 6
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "education", [])) {
            // line 7
            echo "<div class=\"edu_surround\">
  <div class=\"edu animated\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "education", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "      <div class=\"edu_item\">
        <div class=\"date\">";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date", []), "html", null, true);
                echo "</div>
        <div class=\"topic\">";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "topic", []), "html", null, true);
                echo "</div>
        <div class=\"school\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "school", []), "html", null, true);
                echo "</div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  </div>
</div>
";
        }
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "layouts/education.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  73 => 16,  64 => 13,  60 => 12,  56 => 11,  53 => 10,  49 => 9,  45 => 7,  43 => 6,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"avoid_pagebreak\">
<h4>{{ module.header.title }}</h4>

{{ module.content|raw }}

{% if module.header.education %}
<div class=\"edu_surround\">
  <div class=\"edu animated\">
    {% for item in module.header.education %}
      <div class=\"edu_item\">
        <div class=\"date\">{{ item.date }}</div>
        <div class=\"topic\">{{ item.topic }}</div>
        <div class=\"school\">{{ item.school }}</div>
      </div>
    {% endfor %}
  </div>
</div>
{% endif %}
</div>
", "layouts/education.html.twig", "/Users/ruscourier/Documents/Projects/CV/personal/user/themes/resume/templates/layouts/education.html.twig");
    }
}
