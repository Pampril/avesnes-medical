<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_c8071ced84c34c6b844e7085b9b66324 extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute($this->getContext($context, "request"), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($this->getContext($context, "request"), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute($this->getContext($context, "router"), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "router"), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute($this->getContext($context, "router"), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "router"), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "traces"));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute($this->getContext($context, "trace"), "level"))) ? ("almost") : ((((2 == $this->getAttribute($this->getContext($context, "trace"), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "pattern"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  77 => 25,  40 => 11,  182 => 70,  177 => 68,  160 => 60,  148 => 54,  97 => 30,  53 => 17,  112 => 39,  99 => 33,  90 => 23,  82 => 20,  62 => 21,  87 => 33,  134 => 47,  110 => 41,  69 => 28,  65 => 22,  49 => 19,  23 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 44,  125 => 43,  107 => 6,  38 => 4,  144 => 53,  141 => 51,  135 => 47,  126 => 44,  109 => 36,  103 => 37,  67 => 21,  61 => 12,  47 => 15,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 74,  186 => 76,  180 => 72,  172 => 66,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 42,  118 => 34,  114 => 38,  104 => 37,  100 => 36,  78 => 19,  75 => 20,  71 => 18,  34 => 11,  105 => 24,  93 => 30,  76 => 26,  72 => 25,  68 => 24,  58 => 12,  27 => 4,  91 => 34,  84 => 28,  44 => 9,  25 => 5,  28 => 6,  24 => 3,  19 => 1,  94 => 50,  88 => 30,  79 => 29,  59 => 18,  31 => 4,  26 => 6,  21 => 2,  70 => 18,  63 => 14,  46 => 7,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 46,  123 => 41,  120 => 40,  115 => 42,  106 => 36,  101 => 5,  96 => 35,  83 => 36,  80 => 22,  74 => 23,  66 => 17,  55 => 15,  52 => 15,  50 => 16,  43 => 6,  41 => 5,  37 => 8,  35 => 10,  32 => 4,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 62,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 52,  138 => 50,  136 => 50,  133 => 43,  130 => 46,  122 => 43,  119 => 44,  116 => 35,  111 => 37,  108 => 37,  102 => 34,  98 => 31,  95 => 34,  92 => 28,  89 => 28,  85 => 25,  81 => 26,  73 => 23,  64 => 23,  60 => 20,  57 => 19,  54 => 10,  51 => 14,  48 => 8,  45 => 14,  42 => 5,  39 => 4,  36 => 9,  33 => 7,  30 => 7,);
    }
}
