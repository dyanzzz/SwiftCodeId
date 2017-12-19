<?php

/* /Users/ibrahimindosystem/Sites/SwiftCodeId/themes/haha/partials/pages-home/slideshow.htm */
class __TwigTemplate_3e6432c9782dae2b2d949bb07991c2d9f5c825c755ece0f4377bcfe753bf71d2 extends Twig_Template
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
    <div class=\"lt-slider slider fullscreen\">
      <ul class=\"slides\">
      
      ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blogs"] ?? null), "records", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 9
            echo "      
        <li>
          <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["blog"], "picture", array()), "path", array()), "html", null, true);
            echo "\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "slider_title", array()), "html", null, true);
            echo "</h2>
            <h5 class=\"lt-slider-subtitle\">";
            // line 14
            echo $this->getAttribute($context["blog"], "slider_desc", array());
            echo "</h5>
            ";
            // line 15
            if ($this->getAttribute($context["blog"], "slider_url", array())) {
                // line 16
                echo "                <div class=\"lt-slider-button\">
                  <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "slider_url", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "slider_button", array()), "html", null, true);
                echo "</a>
                </div>
            ";
            }
            // line 20
            echo "            </div>
          </div>
        </li>
       
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "       
      </ul>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/ibrahimindosystem/Sites/SwiftCodeId/themes/haha/partials/pages-home/slideshow.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  62 => 20,  54 => 17,  51 => 16,  49 => 15,  45 => 14,  41 => 13,  36 => 11,  32 => 9,  28 => 8,  19 => 1,);
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
    <div class=\"lt-slider slider fullscreen\">
      <ul class=\"slides\">
      
      {% for blog in blogs.records %}
      
        <li>
          <img src=\"{{ blog.picture.path }}\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">{{ blog.slider_title }}</h2>
            <h5 class=\"lt-slider-subtitle\">{{ blog.slider_desc | raw }}</h5>
            {% if blog.slider_url %}
                <div class=\"lt-slider-button\">
                  <a href=\"{{blog.slider_url}}\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">{{blog.slider_button}}</a>
                </div>
            {%endif%}
            </div>
          </div>
        </li>
       
       {% endfor %}
       
      </ul>
    </div>
  </div>
</div>", "/Users/ibrahimindosystem/Sites/SwiftCodeId/themes/haha/partials/pages-home/slideshow.htm", "");
    }
}
