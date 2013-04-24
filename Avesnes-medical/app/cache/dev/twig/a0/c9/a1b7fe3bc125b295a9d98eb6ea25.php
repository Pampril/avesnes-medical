<?php

/* AvesnesMedicalecommerceBundle:Categorie:produitscategorie.html.twig */
class __TwigTemplate_a0c9a1b7fe3bc125b295a9d98eb6ea25 extends Twig_Template
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
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorie"), "nom"), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <table class=\"table table-bordered table-striped table-condensed\">
        <caption>
            <h1>Produits pour la catégorie ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorie"), "nom"), "html", null, true);
        echo "  </h1>
        </caption>
        <thead>
            <tr>
                <th> Designation</th>
                <th> Prix </th>
                <th> Photo du produit</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "produit"));
        foreach ($context['_seq'] as $context["_key"] => $context["unProduit"]) {
            // line 19
            echo "                 <tr>
                   <td>
                       <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AfficherProduit", array("id" => $this->getAttribute($this->getContext($context, "unProduit"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unProduit"), "nom"), "html", null, true);
            echo "</a>
                   </td>
                   <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unProduit"), "prix"), "html", null, true);
            echo " €</td>
                   <td>";
            // line 25
            echo "                       ";
            if ((!(null === $this->getAttribute($this->getContext($context, "unProduit"), "photo")))) {
                // line 26
                echo "                           <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("img/photosuploads/documents/" . $this->getAttribute($this->getAttribute($this->getContext($context, "unProduit"), "photo"), "path"))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "unProduit"), "photo"), "nom"), "html", null, true);
                echo "\" width=\"130\" height=\"130\" />
                       ";
            }
            // line 28
            echo "                   </td>
                   <td>
                       ";
            // line 31
            echo "                   </td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unProduit'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "            </tr>
        </tbody>
    </table>

    <div class=\"pagination\">
        <ul>
            ";
        // line 41
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "nombrePage")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 42
            echo "                <li";
            if (($this->getContext($context, "p") == $this->getContext($context, "page"))) {
                echo " class=\"active\"";
            }
            echo ">
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produitsCategorie", array("id" => $this->getAttribute($this->getContext($context, "categorie"), "id")), array("page" => $this->getContext($context, "p"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
            // line 44
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AvesnesMedicalecommerceBundle:Categorie:produitscategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 47,  124 => 44,  120 => 43,  113 => 42,  108 => 41,  100 => 33,  93 => 31,  89 => 28,  81 => 26,  78 => 25,  74 => 23,  67 => 21,  63 => 19,  59 => 18,  45 => 7,  41 => 5,  38 => 4,  29 => 3,);
    }
}
