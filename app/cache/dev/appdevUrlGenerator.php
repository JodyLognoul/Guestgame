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
       'gg_discussion_default_index' => true,
       'comment' => true,
       'comment_show' => true,
       'comment_new' => true,
       'comment_create' => true,
       'comment_edit' => true,
       'comment_update' => true,
       'comment_delete' => true,
       'discussion' => true,
       'discussion_show' => true,
       'discussion_new' => true,
       'discussion_create' => true,
       'discussion_edit' => true,
       'discussion_update' => true,
       'discussion_delete' => true,
       'crudsendmail' => true,
       'partysendemail' => true,
       'party' => true,
       'party_show' => true,
       'party_new' => true,
       'party_create' => true,
       'party_edit' => true,
       'party_update' => true,
       'party_delete' => true,
       'gg_party_default_index' => true,
       'homepage' => true,
       'site' => true,
       'site_show' => true,
       'site_new' => true,
       'site_create' => true,
       'site_edit' => true,
       'site_update' => true,
       'site_delete' => true,
       'sonata_cache_esi' => true,
       'sonata_cache_js_async' => true,
       'sonata_cache_js_sync' => true,
       'sonata_cache_apc' => true,
       'sonata_admin_dashboard' => true,
       'sonata_admin_retrieve_form_element' => true,
       'sonata_admin_append_form_element' => true,
       'sonata_admin_short_object_information' => true,
       'sonata_admin_set_object_field_value' => true,
       'admin_bundle_party_party_list' => true,
       'admin_bundle_party_party_create' => true,
       'admin_bundle_party_party_batch' => true,
       'admin_bundle_party_party_edit' => true,
       'admin_bundle_party_party_delete' => true,
       'admin_bundle_party_party_show' => true,
       'admin_bundle_party_party_export' => true,
       'admin_bundle_party_party_history' => true,
       'admin_bundle_party_party_history_view_revision' => true,
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

    private function getgg_discussion_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getcommentRouteInfo()
    {
        return array(array (), array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\CommentController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/comment/',  ),));
    }

    private function getcomment_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\CommentController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/comment',  ),));
    }

    private function getcomment_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\CommentController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/comment/new',  ),));
    }

    private function getcomment_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\CommentController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/comment/create',  ),));
    }

    private function getcomment_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\CommentController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/comment',  ),));
    }

    private function getcomment_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\CommentController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/comment',  ),));
    }

    private function getcomment_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\CommentController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/comment',  ),));
    }

    private function getdiscussionRouteInfo()
    {
        return array(array (), array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\DiscussionController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/discussion/',  ),));
    }

    private function getdiscussion_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\DiscussionController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/discussion',  ),));
    }

    private function getdiscussion_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\DiscussionController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/discussion/new',  ),));
    }

    private function getdiscussion_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\DiscussionController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/discussion/create',  ),));
    }

    private function getdiscussion_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\DiscussionController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/discussion',  ),));
    }

    private function getdiscussion_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\DiscussionController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/discussion',  ),));
    }

    private function getdiscussion_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\DiscussionController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/discussion',  ),));
    }

    private function getcrudsendmailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::crudSendMailAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/party/crudsendmail',  ),));
    }

    private function getpartysendemailRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::sendEmailAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/partysendemail',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/party',  ),));
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
        return array(array (  0 => 'urlid',  1 => 'id',), array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'urlid',  ),  3 =>   array (    0 => 'text',    1 => '/party',  ),));
    }

    private function getparty_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/party',  ),));
    }

    private function getparty_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/party',  ),));
    }

    private function getgg_party_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function gethomepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'gg\\Bundle\\SiteBundle\\Controller\\SiteController::homepageAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
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

    private function getsonata_cache_esiRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'sonata.cache.esi:cacheAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/sonata/cache/esi',  ),));
    }

    private function getsonata_cache_js_asyncRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.cache.js_async:cacheAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sonata/cache/js-async',  ),));
    }

    private function getsonata_cache_js_syncRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.cache.js_sync:cacheAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sonata/cache/js-sync',  ),));
    }

    private function getsonata_cache_apcRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'sonata.cache.apc:cacheAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/sonata/cache/apc',  ),));
    }

    private function getsonata_admin_dashboardRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/dashboard',  ),));
    }

    private function getsonata_admin_retrieve_form_elementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/get-form-field-element',  ),));
    }

    private function getsonata_admin_append_form_elementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/append-form-field-element',  ),));
    }

    private function getsonata_admin_short_object_informationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/get-short-object-description',  ),));
    }

    private function getsonata_admin_set_object_field_valueRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/set-object-field-value',  ),));
    }

    private function getadmin_bundle_party_party_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.course',  '_sonata_name' => 'admin_bundle_party_party_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/party/party/list',  ),));
    }

    private function getadmin_bundle_party_party_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.course',  '_sonata_name' => 'admin_bundle_party_party_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/party/party/create',  ),));
    }

    private function getadmin_bundle_party_party_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.course',  '_sonata_name' => 'admin_bundle_party_party_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/party/party/batch',  ),));
    }

    private function getadmin_bundle_party_party_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.course',  '_sonata_name' => 'admin_bundle_party_party_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/party/party',  ),));
    }

    private function getadmin_bundle_party_party_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.course',  '_sonata_name' => 'admin_bundle_party_party_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/party/party',  ),));
    }

    private function getadmin_bundle_party_party_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.course',  '_sonata_name' => 'admin_bundle_party_party_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/party/party',  ),));
    }

    private function getadmin_bundle_party_party_exportRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.course',  '_sonata_name' => 'admin_bundle_party_party_export',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/party/party/export',  ),));
    }

    private function getadmin_bundle_party_party_historyRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'sonata.admin.course',  '_sonata_name' => 'admin_bundle_party_party_history',), array (), array (  0 =>   array (    0 => 'text',    1 => '/history',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/party/party',  ),));
    }

    private function getadmin_bundle_party_party_history_view_revisionRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'revision',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.admin.course',  '_sonata_name' => 'admin_bundle_party_party_history_view_revision',), array (), array (  0 =>   array (    0 => 'text',    1 => '/view',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'revision',  ),  2 =>   array (    0 => 'text',    1 => '/history',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  4 =>   array (    0 => 'text',    1 => '/admin/bundle/party/party',  ),));
    }
}
