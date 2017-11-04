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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        elseif (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/admin')) {
                if (0 === strpos($pathinfo, '/admin/adminDozent')) {
                    // adminDozent_index
                    if ('/admin/adminDozent' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_adminDozent_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'adminDozent_index');
                        }

                        return array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\DozentController::indexAction',  '_route' => 'adminDozent_index',);
                    }
                    not_adminDozent_index:

                    // adminDozent_show
                    if (preg_match('#^/admin/adminDozent/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_adminDozent_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminDozent_show')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\DozentController::showAction',));
                    }
                    not_adminDozent_show:

                    // adminDozent_new
                    if ('/admin/adminDozent/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_adminDozent_new;
                        }

                        return array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\DozentController::newAction',  '_route' => 'adminDozent_new',);
                    }
                    not_adminDozent_new:

                    // adminDozent_edit
                    if (preg_match('#^/admin/adminDozent/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_adminDozent_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminDozent_edit')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\DozentController::editAction',));
                    }
                    not_adminDozent_edit:

                    // adminDozent_delete
                    if (preg_match('#^/admin/adminDozent/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_adminDozent_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminDozent_delete')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\DozentController::deleteAction',));
                    }
                    not_adminDozent_delete:

                }

                elseif (0 === strpos($pathinfo, '/admin/adminStudent')) {
                    // adminStudent_index
                    if ('/admin/adminStudent' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_adminStudent_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'adminStudent_index');
                        }

                        return array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\StudentController::indexAction',  '_route' => 'adminStudent_index',);
                    }
                    not_adminStudent_index:

                    // adminStudent_show
                    if (preg_match('#^/admin/adminStudent/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_adminStudent_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminStudent_show')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\StudentController::showAction',));
                    }
                    not_adminStudent_show:

                    // adminStudent_new
                    if ('/admin/adminStudent/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_adminStudent_new;
                        }

                        return array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\StudentController::newAction',  '_route' => 'adminStudent_new',);
                    }
                    not_adminStudent_new:

                    // adminStudent_edit
                    if (preg_match('#^/admin/adminStudent/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_adminStudent_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminStudent_edit')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\StudentController::editAction',));
                    }
                    not_adminStudent_edit:

                    // adminStudent_delete
                    if (preg_match('#^/admin/adminStudent/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_adminStudent_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminStudent_delete')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\StudentController::deleteAction',));
                    }
                    not_adminStudent_delete:

                }

                elseif (0 === strpos($pathinfo, '/admin/adminRaum')) {
                    // adminRaum_index
                    if ('/admin/adminRaum' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_adminRaum_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'adminRaum_index');
                        }

                        return array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\RaumController::indexAction',  '_route' => 'adminRaum_index',);
                    }
                    not_adminRaum_index:

                    // adminRaum_show
                    if (preg_match('#^/admin/adminRaum/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_adminRaum_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminRaum_show')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\RaumController::showAction',));
                    }
                    not_adminRaum_show:

                    // adminRaum_new
                    if ('/admin/adminRaum/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_adminRaum_new;
                        }

                        return array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\RaumController::newAction',  '_route' => 'adminRaum_new',);
                    }
                    not_adminRaum_new:

                    // adminRaum_edit
                    if (preg_match('#^/admin/adminRaum/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_adminRaum_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminRaum_edit')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\RaumController::editAction',));
                    }
                    not_adminRaum_edit:

                    // adminRaum_delete
                    if (preg_match('#^/admin/adminRaum/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_adminRaum_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminRaum_delete')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\RaumController::deleteAction',));
                    }
                    not_adminRaum_delete:

                }

                elseif (0 === strpos($pathinfo, '/admin/adminGebaeude')) {
                    // adminGebaeude_index
                    if ('/admin/adminGebaeude' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_adminGebaeude_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'adminGebaeude_index');
                        }

                        return array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\GebaeudeController::indexAction',  '_route' => 'adminGebaeude_index',);
                    }
                    not_adminGebaeude_index:

                    // adminGebaeude_show
                    if (preg_match('#^/admin/adminGebaeude/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_adminGebaeude_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminGebaeude_show')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\GebaeudeController::showAction',));
                    }
                    not_adminGebaeude_show:

                    // adminGebaeude_new
                    if ('/admin/adminGebaeude/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_adminGebaeude_new;
                        }

                        return array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\GebaeudeController::newAction',  '_route' => 'adminGebaeude_new',);
                    }
                    not_adminGebaeude_new:

                    // adminGebaeude_edit
                    if (preg_match('#^/admin/adminGebaeude/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_adminGebaeude_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminGebaeude_edit')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\GebaeudeController::editAction',));
                    }
                    not_adminGebaeude_edit:

                    // adminGebaeude_delete
                    if (preg_match('#^/admin/adminGebaeude/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_adminGebaeude_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminGebaeude_delete')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\GebaeudeController::deleteAction',));
                    }
                    not_adminGebaeude_delete:

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/dashboard')) {
                // adminReservierung_index
                if ('/admin/dashboard' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_adminReservierung_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'adminReservierung_index');
                    }

                    return array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\ReservierungController::indexAction',  '_route' => 'adminReservierung_index',);
                }
                not_adminReservierung_index:

                // adminReservierung_show
                if (preg_match('#^/admin/dashboard/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_adminReservierung_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminReservierung_show')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\ReservierungController::showAction',));
                }
                not_adminReservierung_show:

                // adminReservierung_new
                if ('/admin/dashboard/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_adminReservierung_new;
                    }

                    return array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\ReservierungController::newAction',  '_route' => 'adminReservierung_new',);
                }
                not_adminReservierung_new:

                // adminReservierung_edit
                if (preg_match('#^/admin/dashboard/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_adminReservierung_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminReservierung_edit')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\ReservierungController::editAction',));
                }
                not_adminReservierung_edit:

                // adminReservierung_delete
                if (preg_match('#^/admin/dashboard/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_adminReservierung_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminReservierung_delete')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\ReservierungController::deleteAction',));
                }
                not_adminReservierung_delete:

            }

            elseif (0 === strpos($pathinfo, '/admin/reservierungadmin')) {
                // admin_reservierungadmin_index
                if ('/admin/reservierungadmin' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_reservierungadmin_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_reservierungadmin_index');
                    }

                    return array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\ReservierungAdminController::indexAction',  '_route' => 'admin_reservierungadmin_index',);
                }
                not_admin_reservierungadmin_index:

                // admin_reservierungadmin_show
                if (preg_match('#^/admin/reservierungadmin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_reservierungadmin_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_reservierungadmin_show')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\ReservierungAdminController::showAction',));
                }
                not_admin_reservierungadmin_show:

                // admin_reservierungadmin_new
                if ('/admin/reservierungadmin/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_reservierungadmin_new;
                    }

                    return array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\ReservierungAdminController::newAction',  '_route' => 'admin_reservierungadmin_new',);
                }
                not_admin_reservierungadmin_new:

                // admin_reservierungadmin_edit
                if (preg_match('#^/admin/reservierungadmin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_reservierungadmin_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_reservierungadmin_edit')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\ReservierungAdminController::editAction',));
                }
                not_admin_reservierungadmin_edit:

                // admin_reservierungadmin_delete
                if (preg_match('#^/admin/reservierungadmin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_admin_reservierungadmin_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_reservierungadmin_delete')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\ReservierungAdminController::deleteAction',));
                }
                not_admin_reservierungadmin_delete:

            }

        }

        // h_zraum_reservierung_confirmation
        if ('/confirmation' === $pathinfo) {
            return array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\RaumReservierungController::confirmationAction',  '_route' => 'h_zraum_reservierung_confirmation',);
        }

        // h_zraum_reservierung_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'h_zraum_reservierung_homepage');
            }

            return array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\RaumReservierungController::indexAction',  '_route' => 'h_zraum_reservierung_homepage',);
        }

        // h_zraum_reservierung_gebaeudeRaum
        if (0 === strpos($pathinfo, '/gebauedeRaum') && preg_match('#^/gebauedeRaum/(?P<gebaeude>[^/]++)/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'h_zraum_reservierung_gebaeudeRaum')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\RaumReservierungController::gebauedeRaumAction',));
        }

        if (0 === strpos($pathinfo, '/r')) {
            // h_zraum_reservierung_raumInfos
            if (0 === strpos($pathinfo, '/raumInfos') && preg_match('#^/raumInfos/(?P<raum>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'h_zraum_reservierung_raumInfos')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\RaumReservierungController::raumInfosAction',));
            }

            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

        }

        // h_zraum_reservierung_reservierung
        if (0 === strpos($pathinfo, '/buchen/reservierung') && preg_match('#^/buchen/reservierung/(?P<raumId>[^/]++)/(?P<raumFrei>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'h_zraum_reservierung_reservierung')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\RaumReservierungController::reservierungAction',));
        }

        // h_zraum_reservierung_kontakt
        if ('/kontakt' === $pathinfo) {
            return array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\RaumReservierungController::kontaktAction',  '_route' => 'h_zraum_reservierung_kontakt',);
        }

        // h_zraum_reservierung_search
        if (0 === strpos($pathinfo, '/search') && preg_match('#^/search/(?P<raumId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'h_zraum_reservierung_search')), array (  '_controller' => 'HZ\\raumReservierungBundle\\Controller\\RaumReservierungController::searchAction',));
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
