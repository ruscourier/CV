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

/* partials/footer.html.twig */
class __TwigTemplate_da19a29b199f8d18c65d8b495e5c74253c5cb894be8f385b8521f6b6cdb659d8 extends \Twig\Template
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
        echo "<div class=\"row footer\">
   <div class=\"large-12 small-12 medium-12 text-center \">
    <div class=\"border text-center \"></div>
    <p class=\"copyright\">Design by Fernando Baez. Implementation by www.getgrav.org team.</p>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row footer\">
   <div class=\"large-12 small-12 medium-12 text-center \">
    <div class=\"border text-center \"></div>
    <p class=\"copyright\">Design by Fernando Baez. Implementation by www.getgrav.org team.</p>
   </div>
</div>
", "partials/footer.html.twig", "/Users/ruscourier/Documents/Projects/CV/personal/user/themes/resume/templates/partials/footer.html.twig");
    }
}
