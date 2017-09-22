<?php

/* /home/ayatmaulana/PROJECT/indosystem/swiftlangid.dev/themes/octaskin/partials/pages-home/slideshow.htm */
class __TwigTemplate_12b41d664f67f2807dcc5ee6dc0ea74e5bca4665127d40427bcbce68535a9594 extends Twig_Template
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
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/home/slideshow/img-01.jpg");
            echo "\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "slider_title", array()), "html", null, true);
            echo "</h2>
            <h5 class=\"lt-slider-subtitle\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "slider_desc", array()), "html", null, true);
            echo "</h5>
            <div class=\"lt-slider-button\">
              <a href=\"https://octobercms.com/theme/laratify-octobercms-octaskin\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">Download<i class=\"material-icons right\">input</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"https://m.do.co/c/396efaba7c20\" target=\"_blank\">View Server</a> or <a href=\"https://www.laratify.com/\" target=\"_blank\">Contact Us</a>
            </div>
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
        return "/home/ayatmaulana/PROJECT/indosystem/swiftlangid.dev/themes/octaskin/partials/pages-home/slideshow.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 25,  45 => 14,  41 => 13,  36 => 11,  32 => 9,  28 => 8,  19 => 1,);
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
          <img src=\"{{ 'assets/img/pages/home/slideshow/img-01.jpg'|theme }}\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">{{ blog.slider_title }}</h2>
            <h5 class=\"lt-slider-subtitle\">{{ blog.slider_desc }}</h5>
            <div class=\"lt-slider-button\">
              <a href=\"https://octobercms.com/theme/laratify-octobercms-octaskin\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">Download<i class=\"material-icons right\">input</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"https://m.do.co/c/396efaba7c20\" target=\"_blank\">View Server</a> or <a href=\"https://www.laratify.com/\" target=\"_blank\">Contact Us</a>
            </div>
          </div>
        </li>
       
       {% endfor %}
       
      </ul>
    </div>
  </div>
</div>", "/home/ayatmaulana/PROJECT/indosystem/swiftlangid.dev/themes/octaskin/partials/pages-home/slideshow.htm", "");
    }
}
