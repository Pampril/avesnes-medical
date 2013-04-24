<?php

/* AvesnesMedicalecommerceBundle:Index:menu.html.twig */
class __TwigTemplate_eaf00a1961e84786fe0c8afcfed39f58 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-static-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <ul class=\"nav\">
                <li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Accueil"), "html", null, true);
        echo "\"><i class=\"icon-home\"></i> Accueil</a></li>
                ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categorie"));
        foreach ($context['_seq'] as $context["_key"] => $context["uneCategorie"]) {
            // line 7
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produitsCategorie", array("id" => $this->getAttribute($this->getContext($context, "uneCategorie"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "uneCategorie"), "nom"), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneCategorie'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "            </ul>
        </div>
    </div>
</nav>

";
    }

    public function getTemplateName()
    {
        return "AvesnesMedicalecommerceBundle:Index:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  25 => 5,  19 => 1,  150 => 52,  146 => 50,  144 => 48,  141 => 47,  137 => 39,  134 => 38,  126 => 7,  123 => 6,  117 => 5,  110 => 54,  108 => 47,  99 => 40,  97 => 38,  89 => 33,  85 => 32,  81 => 31,  77 => 30,  73 => 29,  67 => 25,  61 => 23,  57 => 21,  52 => 20,  50 => 19,  47 => 18,  45 => 17,  41 => 15,  35 => 10,  33 => 7,  29 => 6,  23 => 1,);
    }
}
