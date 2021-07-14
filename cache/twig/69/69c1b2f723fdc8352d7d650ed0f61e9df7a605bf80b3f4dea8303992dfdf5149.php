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

/* resume.html.twig */
class __TwigTemplate_5ab34617137e70a625b5ffafef2cf3ed13dcca8dd6e3b2278a612c1a31f98ccd extends \Twig\Template
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
        $this->loadTemplate("resume.html.twig", "resume.html.twig", 1, "1196279439")->display($context);
        // line 34
        echo "

";
    }

    public function getTemplateName()
    {
        return "resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 34,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

  {% set collection = page.collection() %}
  {% set base_url = page.url %}
  {% set feed_url = base_url %}

  {% if base_url == '/' %}
    {% set base_url = '' %}
  {% endif %}

  {% if base_url == base_url_relative %}
    {% set feed_url = base_url~'/'~page.slug %}
  {% endif  %}

  {% block content %}
    <div class=\"large-6 columns\">
      {% for module in page.collection({'items':{'@taxonomy.category': 'left'},'order': {'by': 'date', 'dir': 'desc'}}) %}
        {% if module.template %}
          {% include 'layouts/' ~ module.template ~ '.html.twig' %}
        {% endif %}
      {% endfor %}
    </div> 

    <div class=\"large-6 columns\">
      {% for module in page.collection({'items':{'@taxonomy.category': 'right'},'order': {'by': 'date', 'dir': 'desc'}}) %}
        {% if module.template %}
          {% include 'layouts/' ~ module.template ~ '.html.twig' %}
        {% endif %}
      {% endfor %}
     </div>
  {% endblock %}

{% endembed %}


", "resume.html.twig", "/Users/ruscourier/Documents/Projects/CV/personal/user/themes/resume/templates/resume.html.twig");
    }
}


/* resume.html.twig */
class __TwigTemplate_5ab34617137e70a625b5ffafef2cf3ed13dcca8dd6e3b2278a612c1a31f98ccd___1196279439 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 4
        $context["base_url"] = $this->getAttribute(($context["page"] ?? null), "url", []);
        // line 5
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 7
        if ((($context["base_url"] ?? null) == "/")) {
            // line 8
            $context["base_url"] = "";
        }
        // line 11
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 12
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", []));
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "resume.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        // line 16
        echo "    <div class=\"large-6 columns\">
      ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => ["@taxonomy.category" => "left"], "order" => ["by" => "date", "dir" => "desc"]]], "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 18
            echo "        ";
            if ($this->getAttribute($context["module"], "template", [])) {
                // line 19
                echo "          ";
                $this->loadTemplate((("layouts/" . $this->getAttribute($context["module"], "template", [])) . ".html.twig"), "resume.html.twig", 19)->display($context);
                // line 20
                echo "        ";
            }
            // line 21
            echo "      ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div> 

    <div class=\"large-6 columns\">
      ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => ["@taxonomy.category" => "right"], "order" => ["by" => "date", "dir" => "desc"]]], "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 26
            echo "        ";
            if ($this->getAttribute($context["module"], "template", [])) {
                // line 27
                echo "          ";
                $this->loadTemplate((("layouts/" . $this->getAttribute($context["module"], "template", [])) . ".html.twig"), "resume.html.twig", 27)->display($context);
                // line 28
                echo "        ";
            }
            // line 29
            echo "      ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "     </div>
  ";
    }

    public function getTemplateName()
    {
        return "resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 30,  221 => 29,  218 => 28,  215 => 27,  212 => 26,  195 => 25,  190 => 22,  176 => 21,  173 => 20,  170 => 19,  167 => 18,  150 => 17,  147 => 16,  144 => 15,  139 => 1,  136 => 12,  134 => 11,  131 => 8,  129 => 7,  127 => 5,  125 => 4,  123 => 3,  117 => 1,  32 => 34,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

  {% set collection = page.collection() %}
  {% set base_url = page.url %}
  {% set feed_url = base_url %}

  {% if base_url == '/' %}
    {% set base_url = '' %}
  {% endif %}

  {% if base_url == base_url_relative %}
    {% set feed_url = base_url~'/'~page.slug %}
  {% endif  %}

  {% block content %}
    <div class=\"large-6 columns\">
      {% for module in page.collection({'items':{'@taxonomy.category': 'left'},'order': {'by': 'date', 'dir': 'desc'}}) %}
        {% if module.template %}
          {% include 'layouts/' ~ module.template ~ '.html.twig' %}
        {% endif %}
      {% endfor %}
    </div> 

    <div class=\"large-6 columns\">
      {% for module in page.collection({'items':{'@taxonomy.category': 'right'},'order': {'by': 'date', 'dir': 'desc'}}) %}
        {% if module.template %}
          {% include 'layouts/' ~ module.template ~ '.html.twig' %}
        {% endif %}
      {% endfor %}
     </div>
  {% endblock %}

{% endembed %}


", "resume.html.twig", "/Users/ruscourier/Documents/Projects/CV/personal/user/themes/resume/templates/resume.html.twig");
    }
}
