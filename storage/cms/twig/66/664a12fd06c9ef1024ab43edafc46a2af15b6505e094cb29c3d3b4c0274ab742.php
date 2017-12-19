<?php

/* /Users/ibrahimindosystem/Sites/SwiftCodeId/themes/haha/partials/pages-home/utility.htm */
class __TwigTemplate_5bc948e4731d462556f4efb2d1d5a35adf67ba867b0a5fb9fca1d3d14b0ce5e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"lt-row row\">
  <div class=\"center\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["FindUs"] ?? null), "records", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["us"]) {
            // line 4
            echo "    
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "url", array()), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["us"], "picture", array()), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "name", array()), "html", null, true);
            echo "\"></a>
    </div>
   
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['us'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/ibrahimindosystem/Sites/SwiftCodeId/themes/haha/partials/pages-home/utility.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"lt-row row\">
  <div class=\"center\">
    {% for us in FindUs.records %}
    
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"{{ us.url }}\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"{{ us.picture.path }}\" alt=\"{{ us.name }}\"></a>
    </div>
   
   {% endfor %}
  </div>
</div>", "/Users/ibrahimindosystem/Sites/SwiftCodeId/themes/haha/partials/pages-home/utility.htm", "");
    }
}
