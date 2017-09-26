<?php

/* /var/www/SwiftCodeId/themes/haha/partials/pages-home/extension.htm */
class __TwigTemplate_8d7a89133c992bdbfced706a9381cc518fb4bf2a28a745b7a393fbd8648af938 extends Twig_Template
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
  <div class=\"lt-col col s12\">
    <h2 class=\"lt-title center\">Users Voice</h2>
  </div>
</div>

<div class=\"lt-row row\">
  <div class=\"col s12\">
    <div class=\"lt-owl-carousel owl-carousel owl-theme\">
    
        
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["testimonials"] ?? null), "records", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 13
            echo "        
        <div class=\"item\">
          <div class=\"lt-owl-carousel-item item\">
            <div class=\"lt-testimonial-container\">
              <div class=\"lt-testimonial-content flow-text\">
                <span>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["testimonial"], "testimoni", array()), "html", null, true);
            echo "</span>
              </div>
              <div class=\"lt-testimonial-author\">
                <div class=\"lt-testimonial-author-img\"><img class=\"circle responsive-img\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["testimonial"], "picture", array()), "path", array()), "html", null, true);
            echo "\" alt=\"user\"></div>
                <div class=\"lt-testimonial-author-name\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["testimonial"], "name", array()), "html", null, true);
            echo "</div>
                <div class=\"lt-testimonial-author-position\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["testimonial"], "position", array()), "html", null, true);
            echo "</div>
              </div>
            </div>
          </div>
        </div>
       
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "       
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/SwiftCodeId/themes/haha/partials/pages-home/extension.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 30,  57 => 23,  53 => 22,  49 => 21,  43 => 18,  36 => 13,  32 => 12,  19 => 1,);
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
  <div class=\"lt-col col s12\">
    <h2 class=\"lt-title center\">Users Voice</h2>
  </div>
</div>

<div class=\"lt-row row\">
  <div class=\"col s12\">
    <div class=\"lt-owl-carousel owl-carousel owl-theme\">
    
        
        {% for testimonial in testimonials.records %}
        
        <div class=\"item\">
          <div class=\"lt-owl-carousel-item item\">
            <div class=\"lt-testimonial-container\">
              <div class=\"lt-testimonial-content flow-text\">
                <span>{{ testimonial.testimoni }}</span>
              </div>
              <div class=\"lt-testimonial-author\">
                <div class=\"lt-testimonial-author-img\"><img class=\"circle responsive-img\" src=\"{{ testimonial.picture.path }}\" alt=\"user\"></div>
                <div class=\"lt-testimonial-author-name\">{{ testimonial.name }}</div>
                <div class=\"lt-testimonial-author-position\">{{ testimonial.position }}</div>
              </div>
            </div>
          </div>
        </div>
       
       {% endfor %}
       
    </div>
  </div>
</div>", "/var/www/SwiftCodeId/themes/haha/partials/pages-home/extension.htm", "");
    }
}
