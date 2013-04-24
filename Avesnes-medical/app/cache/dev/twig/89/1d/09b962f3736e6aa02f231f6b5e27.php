<?php

/* AvesnesMedicalecommerceBundle::layout.html.twig */
class __TwigTemplate_891d09b962f3736e6aa02f231f6b5e27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
<body>
<div class=\"container\">
    <div id=\"header\" class=\"hero-unit\">
        ";
        // line 15
        echo "        <h1>Avesnes-Medical</h1>
        <div id=\"menu1\">
            ";
        // line 17
        echo $this->env->getExtension('actions')->renderAction("AvesnesMedicalecommerceBundle:Index:menu", array(), array());
        // line 18
        echo "        </div>
    </div>

    ";
        // line 22
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 23
            echo "        Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            // line 24
            echo "\">Déconnexion</a>
    ";
        } else {
            // line 26
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Connexion</a> |
        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
            echo "\"><i class=\"icon-plus\"></i>Inscription</a>
    ";
        }
        // line 29
        echo "    ";
        // line 30
        echo "

    <div class=\"row\">
        ";
        // line 34
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_GERANT")) {
            // line 35
            echo "            <div id=\"menu2\" class=\"span3\">
                <h2>Menu Admin</h2>
                <ul class=\"nav nav-pills nav-stacked\">
                    <li><a href= \"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Accueil"), "html", null, true);
            echo "\"><i class=\"icon-home\"></i> Accueil</a></li>
                    <li><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Produits"), "html", null, true);
            echo "\"><i class=\"icon-list\"></i>Liste des produits</a></li>
                    <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AjouterProduit"), "html", null, true);
            echo "\"><i class=\"icon-plus\"></i>Ajouter un produit</a></li>
                    <li><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Categories"), "html", null, true);
            echo "\"><i class=\"icon-list\"></i>Liste des catégories</a></li>
                    <li><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AjouterCategorie"), "html", null, true);
            echo "\"><i class=\"icon-plus\"></i>Ajouter une catégorie</a></li>
                </ul>
            </div>
        ";
        }
        // line 46
        echo "
        <div id=\"content\" class=\"span9\">
            ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "        </div>
    </div>

    <hr>
    <footer>
        <p>Avesnes-Medical © 2013</p>
    </footer>
</div>
";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "</body>
</html>

";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Avesnes-Meddical";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"
              type=\"text/css\" />
    ";
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "            ";
    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        // line 61
        echo "    <script
            src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "AvesnesMedicalecommerceBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 63,  166 => 61,  164 => 59,  161 => 58,  157 => 49,  154 => 48,  146 => 7,  143 => 6,  137 => 5,  130 => 65,  128 => 58,  118 => 50,  116 => 48,  112 => 46,  105 => 42,  101 => 41,  97 => 40,  93 => 39,  89 => 38,  84 => 35,  81 => 34,  76 => 30,  74 => 29,  69 => 27,  64 => 26,  60 => 24,  55 => 23,  52 => 22,  47 => 18,  45 => 17,  41 => 15,  35 => 10,  33 => 6,  29 => 5,  23 => 1,);
    }
}
