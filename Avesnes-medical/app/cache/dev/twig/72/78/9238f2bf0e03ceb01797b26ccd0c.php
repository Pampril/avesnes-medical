<?php

/* AvesnesMedicalecommerceBundle:Categorie:afficher.html.twig */
class __TwigTemplate_72789238f2bf0e03ceb01797b26ccd0c extends Twig_Template
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
        echo " Categorie numéro :";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorie"), "id"), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <table class=\"table table-bordered table-striped table-condensed\">
        <caption>
            <h1>Categorie n°";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorie"), "id"), "html", null, true);
        echo " </h1>
        </caption>
        <thead>
        <tr>
            <th>  Nom  </th>
            <th> Description   </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorie"), "nom"), "html", null, true);
        echo " </td>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorie"), "description"), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>

    <p><a class=\"btn btn-primary btn-large\"
          href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ModifierCategorie", array("id" => $this->getAttribute($this->getContext($context, "categorie"), "id"))), "html", null, true);
        echo "\">
        Modifier »
    </a></p>

    <p><a class=\"btn btn-primary btn-large\"
          href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SupprimerCategorie", array("id" => $this->getAttribute($this->getContext($context, "categorie"), "id"))), "html", null, true);
        echo "\">
        Supprimer »
    </a></p>

";
    }

    public function getTemplateName()
    {
        return "AvesnesMedicalecommerceBundle:Categorie:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  71 => 24,  62 => 18,  58 => 17,  45 => 7,  41 => 5,  38 => 4,  29 => 3,);
    }
}
