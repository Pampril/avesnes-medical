<?php

/* AvesnesMedicalecommerceBundle:Produit:afficher.html.twig */
class __TwigTemplate_a2553487adc63c3ceb755b671ead05bc extends Twig_Template
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
        echo " Produit numéro :";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "produit"), "id"), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <table class=\"table table-bordered table-striped table-condensed\">
        <caption>
            <h1>Produit n°";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "produit"), "id"), "html", null, true);
        echo " </h1>
        </caption>
        <thead>
        <tr>
            <th> Designation </th>
            <th> ACL </th>
            <th> EAN </th>
            <th> Qté </th>
            <th> Prix </th>
            <th> Description </th>
            <th> Photo du produit </th>
            <th>  Statut </th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td> ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "produit"), "nom"), "html", null, true);
        echo "</td>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "produit"), "acl"), "html", null, true);
        echo "</td>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "produit"), "ean"), "html", null, true);
        echo "</td>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "produit"), "quantite"), "html", null, true);
        echo "</td>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "produit"), "prix"), "html", null, true);
        echo " €</td>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "produit"), "description"), "html", null, true);
        echo "</td>
                <td>";
        // line 30
        echo "                    ";
        if ((!(null === $this->getAttribute($this->getContext($context, "produit"), "photo")))) {
            // line 31
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("img/photosuploads/documents/" . $this->getAttribute($this->getAttribute($this->getContext($context, "produit"), "photo"), "path"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "produit"), "photo"), "nom"), "html", null, true);
            echo "\" width=\"128\" height=\"128\" />
                    ";
        }
        // line 33
        echo "                </td>
                ";
        // line 34
        if (($this->getAttribute($this->getContext($context, "produit"), "statut") == 1)) {
            // line 35
            echo "                    <td>En stock</td>
                ";
        } else {
            // line 37
            echo "                    <td> En rupture de stock</td>
                ";
        }
        // line 39
        echo "            </tr>
        </tbody>
    </table>

    ";
        // line 43
        if ($this->env->getExtension('security')->isGranted("ROLE_GERANT")) {
            // line 44
            echo "        <p><a class=\"btn btn-primary btn-large\"
              href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ModifierProduit", array("id" => $this->getAttribute($this->getContext($context, "produit"), "id"))), "html", null, true);
            echo "\">
            Modifier »
        </a></p>

        <p><a class=\"btn btn-primary btn-large\"
              href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SupprimerProduit", array("id" => $this->getAttribute($this->getContext($context, "produit"), "id"))), "html", null, true);
            echo "\">
            Supprimer »
        </a></p>
        ";
        } else {
            // line 54
            echo "            <h1>Faire ajout panier</h1>
    ";
        }
        // line 56
        echo "
";
    }

    public function getTemplateName()
    {
        return "AvesnesMedicalecommerceBundle:Produit:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 56,  138 => 54,  131 => 50,  123 => 45,  120 => 44,  118 => 43,  112 => 39,  108 => 37,  104 => 35,  102 => 34,  99 => 33,  91 => 31,  88 => 30,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  64 => 23,  45 => 7,  41 => 5,  38 => 4,  29 => 3,);
    }
}
