<?php

/* AvesnesMedicalecommerceBundle:Produit:supprimer.html.twig */
class __TwigTemplate_86d6c0233edb7003aa51e16e4db37b11 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Suppression ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    Article supprimé
";
    }

    public function getTemplateName()
    {
        return "AvesnesMedicalecommerceBundle:Produit:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  29 => 2,);
    }
}
