<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_41f6aec0cc4becc7caf650d82233ee47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/routing.png"), "html", null, true);
        echo "\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Router:panel", array("token" => $this->getContext($context, "token")), array());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 71,  185 => 68,  167 => 64,  164 => 63,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 141,  330 => 140,  327 => 139,  325 => 138,  320 => 135,  314 => 131,  306 => 128,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  280 => 114,  275 => 111,  273 => 110,  268 => 107,  264 => 105,  258 => 103,  254 => 101,  252 => 100,  247 => 97,  245 => 96,  231 => 88,  226 => 86,  221 => 83,  215 => 79,  209 => 77,  202 => 73,  193 => 68,  190 => 67,  188 => 69,  183 => 63,  174 => 67,  169 => 56,  140 => 42,  20 => 1,  56 => 15,  276 => 248,  262 => 236,  260 => 235,  238 => 218,  113 => 40,  77 => 18,  40 => 8,  182 => 70,  177 => 59,  160 => 60,  148 => 46,  97 => 23,  53 => 38,  112 => 39,  99 => 33,  90 => 23,  82 => 19,  62 => 25,  87 => 34,  134 => 54,  110 => 42,  69 => 28,  65 => 22,  49 => 13,  23 => 3,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 150,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 130,  308 => 129,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 115,  277 => 86,  267 => 85,  263 => 84,  257 => 234,  251 => 80,  246 => 78,  240 => 93,  234 => 89,  228 => 87,  223 => 71,  219 => 70,  213 => 69,  207 => 76,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 44,  125 => 43,  107 => 27,  38 => 7,  144 => 53,  141 => 51,  135 => 47,  126 => 44,  109 => 36,  103 => 25,  67 => 23,  61 => 12,  47 => 8,  225 => 96,  216 => 90,  212 => 78,  205 => 84,  201 => 83,  196 => 69,  194 => 79,  191 => 70,  189 => 74,  186 => 76,  180 => 72,  172 => 66,  159 => 61,  154 => 48,  147 => 58,  132 => 48,  127 => 52,  121 => 42,  118 => 34,  114 => 38,  104 => 39,  100 => 24,  78 => 26,  75 => 24,  71 => 23,  34 => 8,  105 => 24,  93 => 30,  76 => 17,  72 => 25,  68 => 24,  58 => 16,  27 => 3,  91 => 35,  84 => 33,  44 => 11,  25 => 5,  28 => 3,  24 => 3,  19 => 1,  94 => 50,  88 => 20,  79 => 18,  59 => 21,  31 => 4,  26 => 3,  21 => 2,  70 => 24,  63 => 21,  46 => 12,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 46,  123 => 35,  120 => 50,  115 => 42,  106 => 36,  101 => 33,  96 => 35,  83 => 36,  80 => 32,  74 => 25,  66 => 17,  55 => 9,  52 => 14,  50 => 18,  43 => 6,  41 => 8,  37 => 7,  35 => 6,  32 => 5,  29 => 3,  184 => 70,  178 => 71,  171 => 66,  165 => 54,  162 => 53,  157 => 60,  153 => 62,  151 => 47,  143 => 43,  138 => 55,  136 => 50,  133 => 43,  130 => 53,  122 => 51,  119 => 44,  116 => 31,  111 => 37,  108 => 41,  102 => 34,  98 => 31,  95 => 36,  92 => 21,  89 => 30,  85 => 25,  81 => 26,  73 => 16,  64 => 11,  60 => 20,  57 => 20,  54 => 19,  51 => 16,  48 => 8,  45 => 13,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
