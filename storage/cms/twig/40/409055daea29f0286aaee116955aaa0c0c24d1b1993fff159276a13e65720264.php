<?php

/* /Users/msandhu/octcms/themes/laratify-octobercms-octaskin/partials/_addons/js.htm */
class __TwigTemplate_e387d6324b7cfa666887c8c201ca84ba4411f43c6e9cac991cdd396490e4eda7 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "load_wow_js", array())) {
            // line 2
            echo "  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/graingert-wow/1.2.0/wow.min.js\"></script>
";
        }
        // line 4
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "load_owl_carousel", array())) {
            // line 5
            echo "  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.min.js\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/msandhu/octcms/themes/laratify-octobercms-octaskin/partials/_addons/js.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if this.theme.load_wow_js %}*/
/*   <script src="https://cdnjs.cloudflare.com/ajax/libs/graingert-wow/1.2.0/wow.min.js"></script>*/
/* {% endif %}*/
/* {% if this.theme.load_owl_carousel %}*/
/*   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.min.js"></script>*/
/* {% endif %}*/
