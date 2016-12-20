<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/User')) {
            // grc_user_list
            if ($pathinfo === '/User/index') {
                return array (  '_controller' => 'Grc\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'grc_user_list',);
            }

            // grc_admin_manager_list
            if ($pathinfo === '/User/ListManager') {
                return array (  '_controller' => 'Grc\\UserBundle\\Controller\\AdminController::ListManagerAction',  '_route' => 'grc_admin_manager_list',);
            }

            // grc_admin_manager_ajout
            if ($pathinfo === '/User/ajoutManager') {
                return array (  '_controller' => 'Grc\\UserBundle\\Controller\\AdminController::AjoutManagerAction',  '_route' => 'grc_admin_manager_ajout',);
            }

            // grc_admin_manager_update
            if (0 === strpos($pathinfo, '/User/updateManager') && preg_match('#^/User/updateManager/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grc_admin_manager_update')), array (  '_controller' => 'Grc\\UserBundle\\Controller\\AdminController::updateManagerAction',));
            }

            // grc_admin_manager_delete
            if (0 === strpos($pathinfo, '/User/deleteManager') && preg_match('#^/User/deleteManager/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grc_admin_manager_delete')), array (  '_controller' => 'Grc\\UserBundle\\Controller\\AdminController::deleteManagerAction',));
            }

            // grc_manager_collaborateur_list
            if ($pathinfo === '/User/ListCollaborateur') {
                return array (  '_controller' => 'Grc\\UserBundle\\Controller\\ManagerController::ListCollaborateurAction',  '_route' => 'grc_manager_collaborateur_list',);
            }

            // grc_manager_collaborateur_ajout
            if ($pathinfo === '/User/ajoutCollaborateur') {
                return array (  '_controller' => 'Grc\\UserBundle\\Controller\\ManagerController::AjoutCollaborateurAction',  '_route' => 'grc_manager_collaborateur_ajout',);
            }

            // grc_manager_collaborateur_delete
            if (0 === strpos($pathinfo, '/User/deleteCollaborateur') && preg_match('#^/User/deleteCollaborateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grc_manager_collaborateur_delete')), array (  '_controller' => 'Grc\\UserBundle\\Controller\\ManagerController::deleteCollaborateurAction',));
            }

        }

        if (0 === strpos($pathinfo, '/reclamation')) {
            // grc_reclamation_homepage
            if (0 === strpos($pathinfo, '/reclamation/hello') && preg_match('#^/reclamation/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grc_reclamation_homepage')), array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\DefaultController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/reclamation/list')) {
                if (0 === strpos($pathinfo, '/reclamation/liste')) {
                    // grc_reclamation_liste
                    if ($pathinfo === '/reclamation/listeSujet') {
                        return array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\ReclamationController::listAction',  '_route' => 'grc_reclamation_liste',);
                    }

                    // grc_reclamation_liste_ejecter
                    if ($pathinfo === '/reclamation/listejecter') {
                        return array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\ReclamationController::listejecterAction',  '_route' => 'grc_reclamation_liste_ejecter',);
                    }

                }

                // grc_reclamation_liste_terminer
                if ($pathinfo === '/reclamation/listterminer') {
                    return array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\ReclamationController::listterminerAction',  '_route' => 'grc_reclamation_liste_terminer',);
                }

                if (0 === strpos($pathinfo, '/reclamation/liste')) {
                    // grc_reclamation_liste_cour
                    if ($pathinfo === '/reclamation/listecour') {
                        return array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\CollaborateurController::listecourAction',  '_route' => 'grc_reclamation_liste_cour',);
                    }

                    // grc_collaborateur_liste
                    if ($pathinfo === '/reclamation/listeSujetaffecté') {
                        return array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\CollaborateurController::listAction',  '_route' => 'grc_collaborateur_liste',);
                    }

                }

            }

            // reclamation_ajoutSujet
            if ($pathinfo === '/reclamation/ajoutSujet') {
                return array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\ReclamationController::ajoutAction',  '_route' => 'reclamation_ajoutSujet',);
            }

            if (0 === strpos($pathinfo, '/reclamation/update')) {
                // reclamation_updateSujet
                if (0 === strpos($pathinfo, '/reclamation/updateSujet') && preg_match('#^/reclamation/updateSujet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_updateSujet')), array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\ReclamationController::updateAction',));
                }

                // reclamation_updatecloturer
                if (0 === strpos($pathinfo, '/reclamation/updatecloturer') && preg_match('#^/reclamation/updatecloturer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_updatecloturer')), array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\ReclamationController::updatecloturerAction',));
                }

            }

            // reclamation_ejecter
            if (0 === strpos($pathinfo, '/reclamation/ejecter') && preg_match('#^/reclamation/ejecter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_ejecter')), array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\CollaborateurController::updateAction',));
            }

            // reclamation_terminer
            if (0 === strpos($pathinfo, '/reclamation/terminer') && preg_match('#^/reclamation/terminer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_terminer')), array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\CollaborateurController::updateterminerAction',));
            }

            // reclamation_showSujet
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/Sujetshow$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_showSujet')), array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\ReclamationController::showAction',));
            }

            // reclamation_showSujetterminer
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/Sujetshowterminer$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_showSujetterminer')), array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\ReclamationController::showterminerAction',));
            }

            // reclamation_showSujet_cour
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/Sujetshowcour$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_showSujet_cour')), array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\CollaborateurController::showcourAction',));
            }

            // reclamation_showSujet_affecter
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/Sujetshowaffecter$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_showSujet_affecter')), array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\CollaborateurController::showAction',));
            }

            // commentaire
            if ($pathinfo === '/reclamation/index') {
                return array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\CommentaireController::indexAction',  '_route' => 'commentaire',);
            }

            // commentaire_show
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_show')), array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\CommentaireController::showAction',));
            }

            // commentaire_new
            if ($pathinfo === '/reclamation/new') {
                return array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\CommentaireController::newAction',  '_route' => 'commentaire_new',);
            }

            // commentaire_create
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_commentaire_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_create')), array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\CommentaireController::createAction',));
            }
            not_commentaire_create:

            // commentaire_ajouter
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/ajouter$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_ajouter')), array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\CommentaireController::ajoutAction',));
            }

            // commentaire_edit
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_edit')), array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\CommentaireController::editAction',));
            }

            // commentaire_update
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_commentaire_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_update')), array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\CommentaireController::updateAction',));
            }
            not_commentaire_update:

            // commentaire_delete
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_delete')), array (  '_controller' => 'Grc\\ReclamationBundle\\Controller\\CommentaireController::suppressionAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
