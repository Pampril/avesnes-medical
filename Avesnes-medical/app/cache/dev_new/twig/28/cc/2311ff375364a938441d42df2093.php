<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_28cc2311ff375364a938441d42df2093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
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
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ($this->getContext($context, "tokens")) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tokens"));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 19
                echo "                    <tr>
                        <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getContext($context, "elements"), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  56 => 15,  276 => 248,  262 => 236,  260 => 235,  238 => 218,  113 => 40,  77 => 18,  40 => 8,  182 => 70,  177 => 68,  160 => 60,  148 => 54,  97 => 30,  53 => 38,  112 => 39,  99 => 33,  90 => 23,  82 => 20,  62 => 25,  87 => 33,  134 => 47,  110 => 41,  69 => 28,  65 => 22,  49 => 17,  23 => 3,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 234,  251 => 80,  246 => 78,  240 => 219,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 44,  125 => 43,  107 => 6,  38 => 6,  144 => 53,  141 => 51,  135 => 47,  126 => 44,  109 => 36,  103 => 37,  67 => 22,  61 => 18,  47 => 15,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 74,  186 => 76,  180 => 72,  172 => 66,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 42,  118 => 34,  114 => 38,  104 => 37,  100 => 36,  78 => 26,  75 => 24,  71 => 23,  34 => 8,  105 => 24,  93 => 30,  76 => 26,  72 => 25,  68 => 24,  58 => 12,  27 => 4,  91 => 28,  84 => 27,  44 => 11,  25 => 5,  28 => 3,  24 => 3,  19 => 1,  94 => 50,  88 => 30,  79 => 29,  59 => 21,  31 => 4,  26 => 3,  21 => 2,  70 => 13,  63 => 21,  46 => 12,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 46,  123 => 41,  120 => 40,  115 => 42,  106 => 36,  101 => 33,  96 => 35,  83 => 36,  80 => 22,  74 => 25,  66 => 17,  55 => 15,  52 => 18,  50 => 18,  43 => 6,  41 => 12,  37 => 7,  35 => 6,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 62,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 52,  138 => 50,  136 => 50,  133 => 43,  130 => 46,  122 => 43,  119 => 44,  116 => 35,  111 => 37,  108 => 37,  102 => 34,  98 => 31,  95 => 34,  92 => 28,  89 => 30,  85 => 25,  81 => 26,  73 => 23,  64 => 11,  60 => 20,  57 => 20,  54 => 19,  51 => 16,  48 => 8,  45 => 13,  42 => 11,  39 => 10,  36 => 7,  33 => 6,  30 => 7,);
    }
}
