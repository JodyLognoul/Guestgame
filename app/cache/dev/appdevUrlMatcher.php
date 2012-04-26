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
        $pathinfo = urldecode($pathinfo);

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
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

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // gg_party_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'gg_party_default_index'));
        }

        // party
        if (rtrim($pathinfo, '/') === '/party') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'party');
            }
            return array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::indexAction',  '_route' => 'party',);
        }

        // party_show
        if (0 === strpos($pathinfo, '/party') && preg_match('#^/party/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::showAction',)), array('_route' => 'party_show'));
        }

        // party_new
        if ($pathinfo === '/party/new') {
            return array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::newAction',  '_route' => 'party_new',);
        }

        // party_create
        if ($pathinfo === '/party/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_party_create;
            }
            return array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::createAction',  '_route' => 'party_create',);
        }
        not_party_create:

        // party_edit
        if (0 === strpos($pathinfo, '/party') && preg_match('#^/party/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::editAction',)), array('_route' => 'party_edit'));
        }

        // party_update
        if (0 === strpos($pathinfo, '/party') && preg_match('#^/party/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_party_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::updateAction',)), array('_route' => 'party_update'));
        }
        not_party_update:

        // party_delete
        if (0 === strpos($pathinfo, '/party') && preg_match('#^/party/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_party_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::deleteAction',)), array('_route' => 'party_delete'));
        }
        not_party_delete:

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_homepage;
            }
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }
            return array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::indexAction',  '_route' => 'homepage',);
        }
        not_homepage:

        // gg_site_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\SiteBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'gg_site_default_index'));
        }

        // site
        if (rtrim($pathinfo, '/') === '/site') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'site');
            }
            return array (  '_controller' => 'gg\\Bundle\\SiteBundle\\Controller\\SiteController::indexAction',  '_route' => 'site',);
        }

        // site_show
        if (0 === strpos($pathinfo, '/site') && preg_match('#^/site/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\SiteBundle\\Controller\\SiteController::showAction',)), array('_route' => 'site_show'));
        }

        // site_new
        if ($pathinfo === '/site/new') {
            return array (  '_controller' => 'gg\\Bundle\\SiteBundle\\Controller\\SiteController::newAction',  '_route' => 'site_new',);
        }

        // site_create
        if ($pathinfo === '/site/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_site_create;
            }
            return array (  '_controller' => 'gg\\Bundle\\SiteBundle\\Controller\\SiteController::createAction',  '_route' => 'site_create',);
        }
        not_site_create:

        // site_edit
        if (0 === strpos($pathinfo, '/site') && preg_match('#^/site/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\SiteBundle\\Controller\\SiteController::editAction',)), array('_route' => 'site_edit'));
        }

        // site_update
        if (0 === strpos($pathinfo, '/site') && preg_match('#^/site/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_site_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\SiteBundle\\Controller\\SiteController::updateAction',)), array('_route' => 'site_update'));
        }
        not_site_update:

        // site_delete
        if (0 === strpos($pathinfo, '/site') && preg_match('#^/site/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_site_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\SiteBundle\\Controller\\SiteController::deleteAction',)), array('_route' => 'site_delete'));
        }
        not_site_delete:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
