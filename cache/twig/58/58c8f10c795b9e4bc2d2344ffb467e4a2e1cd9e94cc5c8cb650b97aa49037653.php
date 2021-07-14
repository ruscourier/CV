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

/* layouts/langskills.html.twig */
class __TwigTemplate_2df9cecdc429f1b18d404e057f57d4ddb2ee6959e7d1f72bd0d4bc1a898dcbd0 extends \Twig\Template
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

  <div class=\"row lang\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "languages", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "    <div class=\"large-4 medium-4 small-6 columns\">
      <ul data-pie-id=\"lang";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "\" class=\"pie_desc\" ";
            if (($this->getAttribute($context["item"], "level", []) == 100)) {
                echo "data-options='{\"donut_inner_ratio\":\"0.8\"}'";
            }
            echo ">
        <li data-value=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "level", []), "html", null, true);
            echo "\">
          <div class=\"lang_info\">
            <span class=\"lang_name\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
            echo "</span>
            <span class=\"lang_level\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "level_name", []), "html", null, true);
            echo "</span>
          </div>
        </li>
        ";
            // line 16
            if (($this->getAttribute($context["item"], "level", []) != 100)) {
                // line 17
                echo "        <li data-value=\"";
                echo twig_escape_filter($this->env, (100 - $this->getAttribute($context["item"], "level", [])), "html", null, true);
                echo "\"></li>
        ";
            }
            // line 19
            echo "      </ul>
      <div id=\"lang";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "\" class=\"pie ";
            if (($this->getAttribute($context["item"], "level", []) == 100)) {
                echo "nostroke";
            }
            echo " ";
            if ($this->getAttribute($context["item"], "animation", [])) {
                echo "animated ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "animation", []), "html", null, true);
            }
            echo "\"></div>
    </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layouts/langskills.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 23,  98 => 20,  95 => 19,  89 => 17,  87 => 16,  81 => 13,  77 => 12,  72 => 10,  64 => 9,  61 => 8,  44 => 7,  38 => 4,  33 => 2,  30 => 1,);
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

  <div class=\"row lang\">
    {% for item in module.header.languages %}
    <div class=\"large-4 medium-4 small-6 columns\">
      <ul data-pie-id=\"lang{{loop.index}}\" class=\"pie_desc\" {% if item.level == 100 %}data-options='{\"donut_inner_ratio\":\"0.8\"}'{% endif %}>
        <li data-value=\"{{ item.level }}\">
          <div class=\"lang_info\">
            <span class=\"lang_name\">{{ item.name }}</span>
            <span class=\"lang_level\">{{ item.level_name }}</span>
          </div>
        </li>
        {% if item.level != 100 %}
        <li data-value=\"{{ 100 - item.level }}\"></li>
        {% endif %}
      </ul>
      <div id=\"lang{{loop.index}}\" class=\"pie {% if item.level == 100 %}nostroke{% endif %} {% if item.animation %}animated {{ item.animation }}{% endif %}\"></div>
    </div>
    {% endfor %}
  </div>
</div>
", "layouts/langskills.html.twig", "/Users/ruscourier/Documents/Projects/CV/personal/user/themes/resume/templates/layouts/langskills.html.twig");
    }
}
