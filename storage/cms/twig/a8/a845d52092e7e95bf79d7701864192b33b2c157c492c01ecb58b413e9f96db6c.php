<?php

/* /home/ayatmaulana/PROJECT/indosystem/swiftlangid.dev/themes/octaskin/partials/pages-about/mainpage.htm */
class __TwigTemplate_7eeba437b6113086b0db188cabe72dab8c114fc75920e204d8e6eb8b9d02a24c extends Twig_Template
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
        echo "<div class=\"center\">
  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <h2 class=\"lt-title\">What We Do</h2>
      
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Desc"] ?? null), "records", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 7
            echo "          <p class=\"flow-text\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "desc", array()), "html", null, true);
            echo "</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </div>
  </div>

  <div class=\"lt-vertical-spacer\"></div>

  <div class=\"lt-row row\">
      
   ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["WhatWeDo"] ?? null), "records", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 17
            echo "   
    <div class=\"lt-col col m4 s12\">
      <i class=\"large ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "icon", array()), "html", null, true);
            echo " primary-color-text\"></i>
      <h5>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "title", array()), "html", null, true);
            echo "</h5>
      <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "desc", array()), "html", null, true);
            echo "</p>
    </div>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "   
  </div>
</div>

<div class=\"lt-vertical-spacer\"></div>
<div class=\"lt-vertical-spacer\"></div>

<div class=\"center\">
  <!-- <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <h2 class=\"lt-title\">Our Office</h2>
      <p class=\"flow-text\">Develop a system of design that allows for a unified user experience across all their products on any platform.</p>
    </div>
  </div> -->

  <div class=\"lt-vertical-spacer\"></div>

    
    
  <div class=\"lt-row row\">
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Picture"] ?? null), "records", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 46
            echo "    
        <div class=\"lt-col col m6 s12\">
          <img class=\"responsive-img\" alt=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "picture", array()), "path", array()), "html", null, true);
            echo "\">
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "  </div>
  

  <div class=\"hide-on-small-only\" style=\"height: 20px;\"></div>

  <!-- <div class=\"lt-row row\">
    <div class=\"lt-col col m6 s12\">
      <img class=\"responsive-img\" alt=\"image\" src=\"";
        // line 59
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/about/mainpage/img-03.jpg");
        echo "\">
    </div>
    <div class=\"lt-col col m6 s12\">
      <img class=\"responsive-img\" alt=\"image\" src=\"";
        // line 62
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/about/mainpage/img-04.jpg");
        echo "\">
    </div>
  </div> -->
</div>";
    }

    public function getTemplateName()
    {
        return "/home/ayatmaulana/PROJECT/indosystem/swiftlangid.dev/themes/octaskin/partials/pages-about/mainpage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 62,  125 => 59,  116 => 52,  104 => 48,  100 => 46,  96 => 45,  74 => 25,  64 => 21,  60 => 20,  56 => 19,  52 => 17,  48 => 16,  39 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"center\">
  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <h2 class=\"lt-title\">What We Do</h2>
      
      {% for d in Desc.records %}
          <p class=\"flow-text\">{{ d.desc }}</p>
      {% endfor %}
    </div>
  </div>

  <div class=\"lt-vertical-spacer\"></div>

  <div class=\"lt-row row\">
      
   {% for w in WhatWeDo.records %}
   
    <div class=\"lt-col col m4 s12\">
      <i class=\"large {{ w.icon }} primary-color-text\"></i>
      <h5>{{ w.title }}</h5>
      <p>{{ w.desc }}</p>
    </div>
    
    {% endfor %}
   
  </div>
</div>

<div class=\"lt-vertical-spacer\"></div>
<div class=\"lt-vertical-spacer\"></div>

<div class=\"center\">
  <!-- <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <h2 class=\"lt-title\">Our Office</h2>
      <p class=\"flow-text\">Develop a system of design that allows for a unified user experience across all their products on any platform.</p>
    </div>
  </div> -->

  <div class=\"lt-vertical-spacer\"></div>

    
    
  <div class=\"lt-row row\">
    {% for p in Picture.records %}
    
        <div class=\"lt-col col m6 s12\">
          <img class=\"responsive-img\" alt=\"{{ p.name }}\" src=\"{{ p.picture.path }}\">
        </div>

    {% endfor %}
  </div>
  

  <div class=\"hide-on-small-only\" style=\"height: 20px;\"></div>

  <!-- <div class=\"lt-row row\">
    <div class=\"lt-col col m6 s12\">
      <img class=\"responsive-img\" alt=\"image\" src=\"{{ 'assets/img/pages/about/mainpage/img-03.jpg'|theme }}\">
    </div>
    <div class=\"lt-col col m6 s12\">
      <img class=\"responsive-img\" alt=\"image\" src=\"{{ 'assets/img/pages/about/mainpage/img-04.jpg'|theme }}\">
    </div>
  </div> -->
</div>", "/home/ayatmaulana/PROJECT/indosystem/swiftlangid.dev/themes/octaskin/partials/pages-about/mainpage.htm", "");
    }
}
