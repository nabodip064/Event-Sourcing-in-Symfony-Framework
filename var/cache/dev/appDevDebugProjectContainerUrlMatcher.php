<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // eventRef
        if ($pathinfo === '/events') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::eventsAction',  '_route' => 'eventRef',);
        }

        // createRef
        if ($pathinfo === '/create') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createAction',  '_route' => 'createRef',);
        }

        // readRef
        if ($pathinfo === '/read') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::readAction',  '_route' => 'readRef',);
        }

        // deleteRef
        if ($pathinfo === '/delete') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::deleteAction',  '_route' => 'deleteRef',);
        }

        // addUser
        if ($pathinfo === '/addUser') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::addUserAction',  '_route' => 'addUser',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // changePassword
            if ($pathinfo === '/changePassword') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::changePasswordAction',  '_route' => 'changePassword',);
            }

            // commandDetails
            if (0 === strpos($pathinfo, '/commandDetails') && preg_match('#^/commandDetails/(?P<command>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commandDetails')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::eventDetailsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/events')) {
            // addUserEvent
            if ($pathinfo === '/events/addUser') {
                return array (  '_controller' => 'AppBundle\\Controller\\EventsController::addUserAction',  '_route' => 'addUserEvent',);
            }

            // changePasswordEvent
            if ($pathinfo === '/events/changePassword') {
                return array (  '_controller' => 'AppBundle\\Controller\\EventsController::changePasswordAction',  '_route' => 'changePasswordEvent',);
            }

            // readEvent
            if ($pathinfo === '/events/read') {
                return array (  '_controller' => 'AppBundle\\Controller\\EventsController::readAction',  '_route' => 'readEvent',);
            }

            // deleteEvent
            if ($pathinfo === '/events/delete') {
                return array (  '_controller' => 'AppBundle\\Controller\\EventsController::deleteAction',  '_route' => 'deleteEvent',);
            }

        }

        // adminn
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'AppBundle\\Controller\\commandHandle::DataInsertionAction',  '_route' => 'adminn',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
