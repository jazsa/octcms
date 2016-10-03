<?php

/* /Users/msandhu/octcms/themes/laratify-octobercms-octaskin/partials/_addons/css.htm */
class __TwigTemplate_fca6b00848968da3abbdef043a13450ff5fd313b78075e2c828fc912b9b3999e extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "load_animate_css", array())) {
            // line 2
            echo "  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css\" rel=\"stylesheet\">
";
        }
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "load_owl_carousel", array())) {
            // line 6
            echo "  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css\" rel=\"stylesheet\">
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.theme.default.min.css\" rel=\"stylesheet\">
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/msandhu/octcms/themes/laratify-octobercms-octaskin/partials/_addons/css.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if this.theme.load_animate_css %}*/
/*   <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet">*/
/* {% endif %}*/
/* */
/* {% if this.theme.load_owl_carousel %}*/
/*   <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css" rel="stylesheet">*/
/*   <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.theme.default.min.css" rel="stylesheet">*/
/* {% endif %}*/
