<?php

/* widget.twig */
class __TwigTemplate_5dd773750481354d81ed8097491f321553b77d6cdc59276d9122a7dde91c0eb3 extends Twig_Template
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
        echo (isset($context["before_widget"]) ? $context["before_widget"] : null);
        echo "

";
        // line 3
        if ((!twig_test_empty((isset($context["title"]) ? $context["title"] : null)))) {
            // line 4
            echo "\t";
            echo (((isset($context["before_title"]) ? $context["before_title"] : null) . (isset($context["title"]) ? $context["title"] : null)) . (isset($context["after_title"]) ? $context["after_title"] : null));
            echo "
";
        }
        // line 6
        echo "
";
        // line 7
        echo (isset($context["widget_html"]) ? $context["widget_html"] : null);
        echo "

";
        // line 9
        echo (isset($context["after_widget"]) ? $context["after_widget"] : null);
    }

    public function getTemplateName()
    {
        return "widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  32 => 6,  26 => 4,  144 => 49,  138 => 47,  136 => 46,  133 => 45,  127 => 42,  123 => 41,  120 => 40,  118 => 39,  114 => 37,  108 => 35,  102 => 33,  100 => 32,  96 => 30,  90 => 27,  85 => 26,  79 => 23,  70 => 20,  66 => 18,  63 => 17,  58 => 15,  55 => 14,  49 => 12,  44 => 10,  40 => 9,  34 => 6,  29 => 4,  24 => 3,  319 => 95,  317 => 94,  313 => 93,  310 => 92,  307 => 84,  305 => 83,  302 => 82,  295 => 78,  291 => 77,  287 => 75,  285 => 74,  282 => 73,  280 => 72,  277 => 71,  275 => 70,  271 => 69,  269 => 68,  253 => 66,  238 => 65,  236 => 64,  220 => 62,  218 => 59,  213 => 56,  208 => 54,  205 => 53,  203 => 52,  199 => 51,  195 => 49,  189 => 46,  186 => 45,  180 => 42,  177 => 41,  175 => 40,  170 => 38,  163 => 36,  159 => 35,  155 => 34,  152 => 33,  134 => 32,  117 => 31,  111 => 29,  105 => 27,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 25,  77 => 20,  74 => 21,  56 => 18,  53 => 13,  50 => 16,  47 => 15,  45 => 14,  42 => 13,  36 => 10,  33 => 9,  31 => 5,  23 => 3,  19 => 1,);
    }
}
