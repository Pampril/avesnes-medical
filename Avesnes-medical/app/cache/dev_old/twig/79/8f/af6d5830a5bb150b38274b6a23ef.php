<?php

/* AvesnesMedicalecommerceBundle:Default:index.html.twig */
class __TwigTemplate_798faf6d5830a5bb150b38274b6a23ef extends Twig_Template
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
  Hello ";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!<br>
  
  ";
        // line 6
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "    Ceci est la ligne ";
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "<br>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "  
 </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "AvesnesMedicalecommerceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  33 => 7,  28 => 6,  23 => 3,  19 => 1,);
    }
}
