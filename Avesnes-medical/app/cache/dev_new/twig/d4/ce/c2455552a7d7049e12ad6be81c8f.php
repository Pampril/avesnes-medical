<?php

/* AvesnesMedicalecommerceBundle:Produit:index.html.twig */
class __TwigTemplate_d4cec2455552a7d7049e12ad6be81c8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AvesnesMedicalecommerceBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvesnesMedicalecommerceBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Page des produits";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>Liste des produits :</h1>
    ";
        // line 7
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "produit"));
        foreach ($context['_seq'] as $context["_key"] => $context["unProduit"]) {
            // line 8
            echo "
            <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AfficherProduit", array("id" => $this->getAttribute($this->getContext($context, "unProduit"), "id"))), "html", null, true);
            echo "\">Produit n°: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unProduit"), "id"), "html", null, true);
            echo "</a><br>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unProduit'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "
    <div class=\"pagination\">
        <ul>
            ";
        // line 17
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "nombrePage")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 18
            echo "                <li";
            if (($this->getContext($context, "p") == $this->getContext($context, "page"))) {
                echo " class=\"active\"";
            }
            echo ">
                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Produits", array("page" => $this->getContext($context, "p"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
            // line 20
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "        </ul>
    </div>


";
    }

    public function getTemplateName()
    {
        return "AvesnesMedicalecommerceBundle:Produit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  82 => 20,  62 => 18,  87 => 20,  134 => 47,  110 => 41,  69 => 28,  65 => 27,  49 => 19,  23 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 44,  125 => 43,  107 => 6,  38 => 4,  144 => 53,  141 => 51,  135 => 47,  126 => 44,  109 => 41,  103 => 37,  67 => 21,  61 => 12,  47 => 8,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 35,  118 => 34,  114 => 42,  104 => 36,  100 => 34,  78 => 19,  75 => 16,  71 => 18,  34 => 11,  105 => 24,  93 => 30,  76 => 16,  72 => 14,  68 => 15,  58 => 17,  27 => 4,  91 => 20,  84 => 28,  44 => 12,  25 => 3,  28 => 3,  24 => 3,  19 => 1,  94 => 50,  88 => 6,  79 => 29,  59 => 18,  31 => 4,  26 => 6,  21 => 2,  70 => 20,  63 => 14,  46 => 7,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 40,  115 => 42,  106 => 36,  101 => 5,  96 => 21,  83 => 36,  80 => 24,  74 => 23,  66 => 17,  55 => 15,  52 => 15,  50 => 9,  43 => 6,  41 => 5,  37 => 8,  35 => 10,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 46,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 33,  98 => 31,  95 => 34,  92 => 43,  89 => 28,  85 => 25,  81 => 26,  73 => 29,  64 => 14,  60 => 23,  57 => 25,  54 => 10,  51 => 14,  48 => 8,  45 => 7,  42 => 7,  39 => 5,  36 => 4,  33 => 6,  30 => 7,);
    }
}
