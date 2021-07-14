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

/* layouts/recognitions.html.twig */
class __TwigTemplate_ed679f1ea7c788706d37dd31a538c31e6c88f29c3146839215daed292261c73f extends \Twig\Template
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

  <div class=\"row recognitions\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "recognitions", []));
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
            echo "    <div class=\"large-12 small-12 columns ";
            if ($this->getAttribute($context["loop"], "last", [])) {
                echo "end";
            }
            echo " ";
            if ($this->getAttribute($context["item"], "animation", [])) {
                echo "animated ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "animation", []), "html", null, true);
            }
            echo "\">
      <div class=\"row\">
        <div class=\"large-3 medium-3 small-4 columns\">
          <div class=\"position\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "position", []), "html", null, true);
            echo "</div>
          <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/ribbon.svg"), "html", null, true);
            echo "\" width=\"100\" height=\"131\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
            echo "\" class=\"ribbon\">
        </div>
        <div class=\"large-9 medium-9 small-8 columns\">
          <div class=\"recog_data\">
            <div class=\"title\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
            echo "</div>
            <div class=\"desc\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "desc", []), "html", null, true);
            echo "</div>
            <div class=\"place\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "place", []), "html", null, true);
            echo "</div>
          </div>
        </div>
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
        // line 24
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layouts/recognitions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 24,  96 => 18,  92 => 17,  88 => 16,  79 => 12,  75 => 11,  61 => 8,  44 => 7,  38 => 4,  33 => 2,  30 => 1,);
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

  <div class=\"row recognitions\">
    {% for item in module.header.recognitions %}
    <div class=\"large-12 small-12 columns {% if loop.last %}end{% endif %} {% if item.animation %}animated {{ item.animation }}{% endif %}\">
      <div class=\"row\">
        <div class=\"large-3 medium-3 small-4 columns\">
          <div class=\"position\">{{ item.position }}</div>
          <img src=\"{{ url('theme://img/ribbon.svg') }}\" width=\"100\" height=\"131\" alt=\"{{ item.title }}\" class=\"ribbon\">
        </div>
        <div class=\"large-9 medium-9 small-8 columns\">
          <div class=\"recog_data\">
            <div class=\"title\">{{ item.title }}</div>
            <div class=\"desc\">{{ item.desc }}</div>
            <div class=\"place\">{{ item.place }}</div>
          </div>
        </div>
      </div>
    </div>
    {% endfor %}
  </div>
</div>
", "layouts/recognitions.html.twig", "/Users/ruscourier/Documents/Projects/CV/personal/user/themes/resume/templates/layouts/recognitions.html.twig");
    }
}
