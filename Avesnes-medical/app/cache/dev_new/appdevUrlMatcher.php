<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // Accueil
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'AvesnesMedical\\ecommerceBundle\\Controller\\IndexController::indexAction',  '_route' => 'Accueil',);
        }

        // Produits
        if (0 === strpos($pathinfo, '/produits') && preg_match('#^/produits(?:/(?P<page>[^/]+))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'AvesnesMedical\\ecommerceBundle\\Controller\\ProduitController::indexAction',  'page' => '1',)), array('_route' => 'Produits'));
        }

        // AfficherProduit
        if (0 === strpos($pathinfo, '/afficherproduit') && preg_match('#^/afficherproduit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'AvesnesMedical\\ecommerceBundle\\Controller\\ProduitController::afficherAction',)), array('_route' => 'AfficherProduit'));
        }

        // AjouterProduit
        if ($pathinfo === '/ajouterproduit') {
            return array (  '_controller' => 'AvesnesMedical\\ecommerceBundle\\Controller\\ProduitController::ajouterAction',  '_route' => 'AjouterProduit',);
        }

        // ModifierProduit
        if (0 === strpos($pathinfo, '/modifierproduit') && preg_match('#^/modifierproduit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'AvesnesMedical\\ecommerceBundle\\Controller\\ProduitController::modifierAction',)), array('_route' => 'ModifierProduit'));
        }

        // SupprimerProduit
        if (0 === strpos($pathinfo, '/supprimerproduit') && preg_match('#^/supprimerproduit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'AvesnesMedical\\ecommerceBundle\\Controller\\ProduitController::supprimerAction',)), array('_route' => 'SupprimerProduit'));
        }

        // Categories
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie(?:s(?P<page>[^s]+))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'AvesnesMedical\\ecommerceBundle\\Controller\\CategorieController::indexAction',  'page' => '1',)), array('_route' => 'Categories'));
        }

        // AfficherCategorie
        if (0 === strpos($pathinfo, '/affichercategorie') && preg_match('#^/affichercategorie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'AvesnesMedical\\ecommerceBundle\\Controller\\CategorieController::afficherAction',)), array('_route' => 'AfficherCategorie'));
        }

        // AjouterCategorie
        if ($pathinfo === '/ajoutercategorie') {
            return array (  '_controller' => 'AvesnesMedical\\ecommerceBundle\\Controller\\CategorieController::ajouterAction',  '_route' => 'AjouterCategorie',);
        }

        // ModifierCategorie
        if (0 === strpos($pathinfo, '/modifiercategorie') && preg_match('#^/modifiercategorie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'AvesnesMedical\\ecommerceBundle\\Controller\\CategorieController::modifierAction',)), array('_route' => 'ModifierCategorie'));
        }

        // SupprimerCategorie
        if (0 === strpos($pathinfo, '/supprimercategori') && preg_match('#^/supprimercategorie(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'AvesnesMedical\\ecommerceBundle\\Controller\\CategorieController::supprimerAction',)), array('_route' => 'SupprimerCategorie'));
        }

        // produitsCategorie
        if (0 === strpos($pathinfo, '/produitscategorie') && preg_match('#^/produitscategorie/(?P<id>\\d+)(?:/(?P<page>[^/]+))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'AvesnesMedical\\ecommerceBundle\\Controller\\CategorieController::produitscategorieAction',  'page' => '1',)), array('_route' => 'produitsCategorie'));
        }

        // Commande
        if ($pathinfo === '/commande') {
            return array (  '_controller' => 'AvesnesMedical\\ecommerceBundle\\Controller\\CommandeController::indexAction',  '_route' => 'Commande',);
        }

        // Client
        if ($pathinfo === '/client') {
            return array (  '_controller' => 'AvesnesMedical\\ecommerceBundle\\Controller\\ClientController::indexAction',  '_route' => 'Client',);
        }

        // Inscription
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'AvesnesMedical\\ecommerceBundle\\Controller\\ClientController::inscriptionAction',  '_route' => 'Inscription',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
