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

/* layouts/skills.html.twig */
class __TwigTemplate_15ed46ecca456b51e87b274e83b73e5772e52f466efacd530d2e3711f4b54861 extends \Twig\Template
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

  <div class=\"row design\">
    <div class=\"large-7 columns ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "column1_animation", [])) {
            echo "animated ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "column1_animation", []), "html", null, true);
        }
        echo "\">
      <h6>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "column1_name", []), "html", null, true);
        echo "</h6>
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "column1", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "      <ul class=\"small-block-grid-2\">
        <li class=\"name\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
            echo "</li>
        <li>
          <ul class=\"small-block-grid-8 ellipses\">
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 15
                echo "            <li><span ";
                if (($context["i"] > $this->getAttribute($context["item"], "level", []))) {
                    echo "class=\"grey\"";
                }
                echo "></span></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "          </ul>
        </li>
      </ul>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
    <div class=\"large-5 columns ";
        // line 22
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "column2_animation", [])) {
            echo "animated ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "column2_animation", []), "html", null, true);
        }
        echo "\">
      <h6>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "column2_name", []), "html", null, true);
        echo "</h6>
      ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "column2", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "      <div class=\"name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layouts/skills.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 27,  110 => 25,  106 => 24,  102 => 23,  95 => 22,  92 => 21,  83 => 17,  72 => 15,  68 => 14,  62 => 11,  59 => 10,  55 => 9,  51 => 8,  44 => 7,  38 => 4,  33 => 2,  30 => 1,);
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

  <div class=\"row design\">
    <div class=\"large-7 columns {% if module.header.column1_animation %}animated {{ module.header.column1_animation }}{% endif %}\">
      <h6>{{ module.header.column1_name }}</h6>
      {% for item in module.header.column1 %}
      <ul class=\"small-block-grid-2\">
        <li class=\"name\">{{ item.name }}</li>
        <li>
          <ul class=\"small-block-grid-8 ellipses\">
            {% for i in 1..8 %}
            <li><span {% if i > item.level %}class=\"grey\"{% endif %}></span></li>
            {% endfor %}
          </ul>
        </li>
      </ul>
      {% endfor %}
    </div>
    <div class=\"large-5 columns {% if module.header.column2_animation %}animated {{ module.header.column2_animation }}{% endif %}\">
      <h6>{{ module.header.column2_name }}</h6>
      {% for item in module.header.column2 %}
      <div class=\"name\">{{ item.name }}</div>
      {% endfor %}
    </div>
  </div>
</div>
", "layouts/skills.html.twig", "/Users/ruscourier/Documents/Projects/CV/personal/user/themes/resume/templates/layouts/skills.html.twig");
    }
}
