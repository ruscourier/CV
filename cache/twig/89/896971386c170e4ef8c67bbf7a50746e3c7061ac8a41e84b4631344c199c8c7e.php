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

/* layouts/special.html.twig */
class __TwigTemplate_3a025b63e2fa336e0739d9547e4eebb0318dc62707e60486671563741ac8c314 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "specialities", []), 3));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 7
            echo "  <ul class=\"inline-list special ";
            if ($this->getAttribute($context["loop"], "first", [])) {
                echo "first";
            }
            echo " ";
            if ($this->getAttribute($context["loop"], "last", [])) {
                echo "last";
            }
            echo "\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
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
                // line 9
                echo "    <li ";
                if ($this->getAttribute($context["item"], "animation", [])) {
                    echo "class=\"animated ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "animation", []), "html", null, true);
                }
                echo "\">
      <i class=\"fi-";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
                echo "\"></i>
      <div class=\"pointer hide-for-small-only ";
                // line 11
                if (($this->getAttribute($context["loop"], "index", []) == 2)) {
                    echo "second";
                }
                echo "\"></div>
      <div class=\"desc\">";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []), "html", null, true);
                echo "</div>
    </li>
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
            // line 15
            echo "  </ul>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "layouts/special.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 17,  123 => 15,  106 => 12,  100 => 11,  96 => 10,  88 => 9,  71 => 8,  60 => 7,  43 => 6,  38 => 4,  33 => 2,  30 => 1,);
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

  {% for row in module.header.specialities|batch(3) %}
  <ul class=\"inline-list special {% if loop.first %}first{% endif %} {% if loop.last %}last{% endif %}\">
    {% for item in row %}
    <li {% if item.animation %}class=\"animated {{ item.animation }}{% endif %}\">
      <i class=\"fi-{{ item.icon }}\"></i>
      <div class=\"pointer hide-for-small-only {% if loop.index == 2 %}second{% endif %}\"></div>
      <div class=\"desc\">{{ item.text }}</div>
    </li>
    {% endfor %}
  </ul>
{% endfor %}
</div>
", "layouts/special.html.twig", "/Users/ruscourier/Documents/Projects/CV/personal/user/themes/resume/templates/layouts/special.html.twig");
    }
}
