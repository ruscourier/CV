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

/* layouts/experience.html.twig */
class __TwigTemplate_bf7e71d11d975eae2650f9e653bfd35bb71953eaa509cf3e21f5fd18e7f97237 extends \Twig\Template
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

  <div class=\"row experience\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "experience", []));
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
            echo "    <div class=\"large-6 medium-6 small-12 columns ";
            if ($this->getAttribute($context["loop"], "last", [])) {
                echo "end";
            }
            echo " ";
            if ($this->getAttribute($context["item"], "animation", [])) {
                echo "animated ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "animation", []), "html", null, true);
            }
            echo "\">
      <div class=\"year\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "years", []), "html", null, true);
            echo "</div>
      <div class=\"exp_data\">
        <div class=\"date\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date", []), "html", null, true);
            echo "</div>
        <div class=\"role\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "role", []), "html", null, true);
            echo "</div>
        <div class=\"company\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "company", []), "html", null, true);
            echo "</div>
      </div>
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
        // line 17
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layouts/experience.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 17,  86 => 13,  82 => 12,  78 => 11,  73 => 9,  61 => 8,  44 => 7,  38 => 4,  33 => 2,  30 => 1,);
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

  <div class=\"row experience\">
    {% for item in module.header.experience %}
    <div class=\"large-6 medium-6 small-12 columns {% if loop.last %}end{% endif %} {% if item.animation %}animated {{ item.animation }}{% endif %}\">
      <div class=\"year\">{{ item.years }}</div>
      <div class=\"exp_data\">
        <div class=\"date\">{{ item.date }}</div>
        <div class=\"role\">{{ item.role }}</div>
        <div class=\"company\">{{ item.company }}</div>
      </div>
    </div>
    {% endfor %}
  </div>
</div>
", "layouts/experience.html.twig", "/Users/ruscourier/Documents/Projects/CV/personal/user/themes/resume/templates/layouts/experience.html.twig");
    }
}
