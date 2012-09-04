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

        // gg_discussion_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'gg_discussion_default_index'));
        }

        // comment
        if (rtrim($pathinfo, '/') === '/comment') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'comment');
            }
            return array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\CommentController::indexAction',  '_route' => 'comment',);
        }

        // comment_show
        if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\CommentController::showAction',)), array('_route' => 'comment_show'));
        }

        // comment_new
        if ($pathinfo === '/comment/new') {
            return array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\CommentController::newAction',  '_route' => 'comment_new',);
        }

        // comment_create
        if ($pathinfo === '/comment/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_comment_create;
            }
            return array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\CommentController::createAction',  '_route' => 'comment_create',);
        }
        not_comment_create:

        // comment_edit
        if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\CommentController::editAction',)), array('_route' => 'comment_edit'));
        }

        // comment_update
        if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_comment_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\CommentController::updateAction',)), array('_route' => 'comment_update'));
        }
        not_comment_update:

        // comment_delete
        if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_comment_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\CommentController::deleteAction',)), array('_route' => 'comment_delete'));
        }
        not_comment_delete:

        // discussion
        if (rtrim($pathinfo, '/') === '/discussion') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'discussion');
            }
            return array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\DiscussionController::indexAction',  '_route' => 'discussion',);
        }

        // discussion_show
        if (0 === strpos($pathinfo, '/discussion') && preg_match('#^/discussion/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\DiscussionController::showAction',)), array('_route' => 'discussion_show'));
        }

        // discussion_new
        if ($pathinfo === '/discussion/new') {
            return array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\DiscussionController::newAction',  '_route' => 'discussion_new',);
        }

        // discussion_create
        if ($pathinfo === '/discussion/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_discussion_create;
            }
            return array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\DiscussionController::createAction',  '_route' => 'discussion_create',);
        }
        not_discussion_create:

        // discussion_edit
        if (0 === strpos($pathinfo, '/discussion') && preg_match('#^/discussion/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\DiscussionController::editAction',)), array('_route' => 'discussion_edit'));
        }

        // discussion_update
        if (0 === strpos($pathinfo, '/discussion') && preg_match('#^/discussion/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_discussion_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\DiscussionController::updateAction',)), array('_route' => 'discussion_update'));
        }
        not_discussion_update:

        // discussion_delete
        if (0 === strpos($pathinfo, '/discussion') && preg_match('#^/discussion/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_discussion_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\DiscussionBundle\\Controller\\DiscussionController::deleteAction',)), array('_route' => 'discussion_delete'));
        }
        not_discussion_delete:

        // crudsendmail
        if ($pathinfo === '/party/crudsendmail') {
            return array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::crudSendMailAction',  '_route' => 'crudsendmail',);
        }

        // partysendemail
        if (0 === strpos($pathinfo, '/party') && preg_match('#^/party/(?P<id>[^/]+?)/partysendemail$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\PartyController::sendEmailAction',)), array('_route' => 'partysendemail'));
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
        if (0 === strpos($pathinfo, '/party') && preg_match('#^/party/(?P<urlid>[^/]+?)/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
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

        // gg_party_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'gg\\Bundle\\PartyBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'gg_party_default_index'));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_homepage;
            }
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }
            return array (  '_controller' => 'gg\\Bundle\\SiteBundle\\Controller\\SiteController::homepageAction',  '_route' => 'homepage',);
        }
        not_homepage:

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

        // sonata_cache_esi
        if (0 === strpos($pathinfo, '/sonata/cache/esi') && preg_match('#^/sonata/cache/esi/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'sonata.cache.esi:cacheAction',)), array('_route' => 'sonata_cache_esi'));
        }

        // sonata_cache_js_async
        if ($pathinfo === '/sonata/cache/js-async') {
            return array (  '_controller' => 'sonata.cache.js_async:cacheAction',  '_route' => 'sonata_cache_js_async',);
        }

        // sonata_cache_js_sync
        if ($pathinfo === '/sonata/cache/js-sync') {
            return array (  '_controller' => 'sonata.cache.js_sync:cacheAction',  '_route' => 'sonata_cache_js_sync',);
        }

        // sonata_cache_apc
        if (0 === strpos($pathinfo, '/sonata/cache/apc') && preg_match('#^/sonata/cache/apc/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'sonata.cache.apc:cacheAction',)), array('_route' => 'sonata_cache_apc'));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            // sonata_admin_retrieve_form_element
            if ($pathinfo === '/admin/core/get-form-field-element') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
            }

            // sonata_admin_append_form_element
            if ($pathinfo === '/admin/core/append-form-field-element') {
                return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
            }

            // sonata_admin_short_object_information
            if ($pathinfo === '/admin/core/get-short-object-description') {
                return array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_route' => 'sonata_admin_short_object_information',);
            }

            // sonata_admin_set_object_field_value
            if ($pathinfo === '/admin/core/set-object-field-value') {
                return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
            }

            // admin_bundle_party_party_list
            if ($pathinfo === '/admin/bundle/party/party/list') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.course',  '_sonata_name' => 'admin_bundle_party_party_list',  '_route' => 'admin_bundle_party_party_list',);
            }

            // admin_bundle_party_party_create
            if ($pathinfo === '/admin/bundle/party/party/create') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.course',  '_sonata_name' => 'admin_bundle_party_party_create',  '_route' => 'admin_bundle_party_party_create',);
            }

            // admin_bundle_party_party_batch
            if ($pathinfo === '/admin/bundle/party/party/batch') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.course',  '_sonata_name' => 'admin_bundle_party_party_batch',  '_route' => 'admin_bundle_party_party_batch',);
            }

            // admin_bundle_party_party_edit
            if (0 === strpos($pathinfo, '/admin/bundle/party/party') && preg_match('#^/admin/bundle/party/party/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.course',  '_sonata_name' => 'admin_bundle_party_party_edit',)), array('_route' => 'admin_bundle_party_party_edit'));
            }

            // admin_bundle_party_party_delete
            if (0 === strpos($pathinfo, '/admin/bundle/party/party') && preg_match('#^/admin/bundle/party/party/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.course',  '_sonata_name' => 'admin_bundle_party_party_delete',)), array('_route' => 'admin_bundle_party_party_delete'));
            }

            // admin_bundle_party_party_show
            if (0 === strpos($pathinfo, '/admin/bundle/party/party') && preg_match('#^/admin/bundle/party/party/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.course',  '_sonata_name' => 'admin_bundle_party_party_show',)), array('_route' => 'admin_bundle_party_party_show'));
            }

            // admin_bundle_party_party_export
            if ($pathinfo === '/admin/bundle/party/party/export') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.course',  '_sonata_name' => 'admin_bundle_party_party_export',  '_route' => 'admin_bundle_party_party_export',);
            }

            // admin_bundle_party_party_history
            if (0 === strpos($pathinfo, '/admin/bundle/party/party') && preg_match('#^/admin/bundle/party/party/(?P<id>[^/]+?)/history$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'sonata.admin.course',  '_sonata_name' => 'admin_bundle_party_party_history',)), array('_route' => 'admin_bundle_party_party_history'));
            }

            // admin_bundle_party_party_history_view_revision
            if (0 === strpos($pathinfo, '/admin/bundle/party/party') && preg_match('#^/admin/bundle/party/party/(?P<id>[^/]+?)/history/(?P<revision>[^/]+?)/view$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.admin.course',  '_sonata_name' => 'admin_bundle_party_party_history_view_revision',)), array('_route' => 'admin_bundle_party_party_history_view_revision'));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
