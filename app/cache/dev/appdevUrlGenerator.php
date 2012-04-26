<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'gg_party_default_index' => true,
       'party' => true,
       'party_show' => true,
       'party_new' => true,
       'party_create' => true,
       'party_edit' => true,
       'party_update' => true,
       'party_delete' => true,
       'homepage' => true,
       'gg_site_default_index' => true,
       'site' => true,
       'site_show' => true,
       'site_new' => true,
       'site_create' => true,
       'site_edit' => true,
       'site_update' => true,
       'site_delete' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getgg_party_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getpartyRouteInfo()
    {
        return array(array (), array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/party/',  ),));
    }

    private function getparty_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/party',  ),));
    }

    private function getparty_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/party/new',  ),));
    }

    private function getparty_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/party/create',  ),));
    }

    private function getparty_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/party',  ),));
    }

    private function getparty_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/party',  ),));
    }

    private function getparty_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/party',  ),));
    }

    private function gethomepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::indexAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getgg_site_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'gg\\Bundle\\SiteBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getsiteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'gg\\Bundle\\SiteBundle\\Controller\\SiteController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/site/',  ),));
    }

    private function getsite_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\SiteBundle\\Controller\\SiteController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/site',  ),));
    }

    private function getsite_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'gg\\Bundle\\SiteBundle\\Controller\\SiteController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/site/new',  ),));
    }

    private function getsite_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'gg\\Bundle\\SiteBundle\\Controller\\SiteController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/site/create',  ),));
    }

    private function getsite_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\SiteBundle\\Controller\\SiteController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/site',  ),));
    }

    private function getsite_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\SiteBundle\\Controller\\SiteController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/site',  ),));
    }

    private function getsite_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\SiteBundle\\Controller\\SiteController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/site',  ),));
    }
}
