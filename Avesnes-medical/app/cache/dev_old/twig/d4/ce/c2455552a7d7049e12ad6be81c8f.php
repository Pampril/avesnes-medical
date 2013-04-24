<?php

/* AvesnesMedicalecommerceBundle:Produit:index.html.twig */
class __TwigTemplate_d4cec2455552a7d7049e12ad6be81c8f extends Twig_Template
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
        echo "<html>
    <body>
        Bonjour ";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "nom"), "html", null, true);
        echo "<br>
        ";
        // line 5
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 6
            echo "            ";
            // line 7
            echo "            ";
            if (($this->getContext($context, "i") >= 1)) {
                // line 8
                echo "                Ceci est le produit : ";
                echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                echo "<br>
            ";
            }
            // line 10
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 11
        echo "    </body>
</html>";
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
        return array (  49 => 11,  43 => 10,  37 => 8,  34 => 7,  32 => 6,  27 => 5,  23 => 3,  19 => 1,);
    }
}
