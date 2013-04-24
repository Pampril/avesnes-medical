<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_41b6fb790d0b4c94eafc26c962728dc9 extends Twig_Template
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
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo "\".

Please e-mail us at [email] and let us know what you were doing when this
error occurred. We will fix it as soon as possible. Sorry for any
inconvenience caused.
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  93 => 20,  76 => 16,  72 => 14,  68 => 12,  58 => 9,  27 => 4,  91 => 20,  84 => 19,  44 => 10,  25 => 5,  28 => 3,  24 => 4,  19 => 1,  94 => 39,  88 => 6,  79 => 17,  59 => 22,  31 => 5,  26 => 3,  21 => 2,  70 => 14,  63 => 9,  46 => 7,  22 => 2,  163 => 32,  155 => 50,  152 => 49,  149 => 48,  145 => 46,  139 => 45,  131 => 42,  123 => 41,  120 => 40,  115 => 39,  106 => 36,  101 => 33,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 13,  52 => 15,  50 => 8,  43 => 7,  41 => 7,  37 => 8,  35 => 7,  32 => 9,  29 => 4,  184 => 70,  178 => 66,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 53,  143 => 48,  138 => 45,  136 => 44,  133 => 43,  130 => 42,  122 => 37,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 22,  95 => 28,  92 => 29,  89 => 19,  85 => 24,  81 => 40,  73 => 19,  64 => 19,  60 => 8,  57 => 14,  54 => 6,  51 => 12,  48 => 14,  45 => 8,  42 => 12,  39 => 6,  36 => 7,  33 => 6,  30 => 3,);
    }
}
