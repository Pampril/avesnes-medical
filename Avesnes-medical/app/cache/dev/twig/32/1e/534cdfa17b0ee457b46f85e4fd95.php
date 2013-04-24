<?php

/* AvesnesMedicalecommerceBundle:Produit:produit.html.twig */
class __TwigTemplate_321e534cdfa17b0ee457b46f85e4fd95 extends Twig_Template
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
        echo "    <h1>Produit n°";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "produit"), "id"), "html", null, true);
        echo " !</h1>
    Designation : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "produit"), "nom"), "html", null, true);
        echo " <br>
    ACL : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "produit"), "acl"), "html", null, true);
        echo " <br>
    EAN : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "produit"), "ean"), "html", null, true);
        echo " <br>
    Qté : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "produit"), "quantite"), "html", null, true);
        echo " <br>
    Prix : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "produit"), "prix"), "html", null, true);
        echo " € <br>
    Description : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "produit"), "description"), "html", null, true);
        echo " <br>
    Statut : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "produit"), "statut"), "html", null, true);
        echo " <br>
";
    }

    public function getTemplateName()
    {
        return "AvesnesMedicalecommerceBundle:Produit:produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  46 => 6,  41 => 5,  38 => 4,  29 => 3,);
    }
}
