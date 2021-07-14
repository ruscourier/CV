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

/* layouts/interests.html.twig */
class __TwigTemplate_1ba189824e5d5dd53cfb8ad27b25b1da5ee88ecf48049c54f629c0a7b3437ac8 extends \Twig\Template
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

  <div class=\"row interests\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "interests", []));
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
            echo "    <div class=\"large-3 small-6 medium-3 columns ";
            if ($this->getAttribute($context["loop"], "last", [])) {
                echo "end";
            }
            echo " ";
            if ($this->getAttribute($context["item"], "animation", [])) {
                echo "animated ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "animation", []), "html", null, true);
            }
            echo "\">
      <div class=\"int_icon\">
        <i class=\"fi-";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
            echo "\"></i>
        <div class=\"activity\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "activity", []), "html", null, true);
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
        // line 15
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layouts/interests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 15,  78 => 11,  74 => 10,  61 => 8,  44 => 7,  38 => 4,  33 => 2,  30 => 1,);
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

  <div class=\"row interests\">
    {% for item in module.header.interests %}
    <div class=\"large-3 small-6 medium-3 columns {% if loop.last %}end{% endif %} {% if item.animation %}animated {{ item.animation }}{% endif %}\">
      <div class=\"int_icon\">
        <i class=\"fi-{{ item.icon }}\"></i>
        <div class=\"activity\">{{ item.activity }}</div>
      </div>
    </div>
    {% endfor %}
  </div>
</div>
", "layouts/interests.html.twig", "/Users/ruscourier/Documents/Projects/CV/personal/user/themes/resume/templates/layouts/interests.html.twig");
    }
}
