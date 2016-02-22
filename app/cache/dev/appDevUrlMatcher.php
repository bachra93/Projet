<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/ville')) {
            // gv_ville_homepage
            if (0 === strpos($pathinfo, '/ville/hello') && preg_match('#^/ville/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gv_ville_homepage')), array (  '_controller' => 'GV\\VilleBundle\\Controller\\DefaultController::indexAction',));
            }

            // AjouterVille
            if ($pathinfo === '/ville/ajouter') {
                return array (  '_controller' => 'GV\\VilleBundle\\Controller\\VilleController::ajouterVilleAction',  '_route' => 'AjouterVille',);
            }

            // DeleteVille
            if (0 === strpos($pathinfo, '/ville/supprimer') && preg_match('#^/ville/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'DeleteVille')), array (  '_controller' => 'GV\\VilleBundle\\Controller\\VilleController::SupprimerVilleAction',));
            }

            // UpdateVille
            if (0 === strpos($pathinfo, '/ville/modifier') && preg_match('#^/ville/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'UpdateVille')), array (  '_controller' => 'GV\\VilleBundle\\Controller\\VilleController::ModifierVilleAction',));
            }

            // afficherVille
            if ($pathinfo === '/ville/afficher') {
                return array (  '_controller' => 'GV\\VilleBundle\\Controller\\VilleController::afficherVilleAction',  '_route' => 'afficherVille',);
            }

            // rechercherVille
            if ($pathinfo === '/ville/rechercher') {
                return array (  '_controller' => 'GV\\VilleBundle\\Controller\\VilleController::RechercherVilleAction',  '_route' => 'rechercherVille',);
            }

            if (0 === strpos($pathinfo, '/ville/afficher')) {
                // Afficherdetails
                if (0 === strpos($pathinfo, '/ville/afficherdetails') && preg_match('#^/ville/afficherdetails/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Afficherdetails')), array (  '_controller' => 'GV\\VilleBundle\\Controller\\VilleController::afficherdetailsAction',));
                }

                // afficherVillefront
                if ($pathinfo === '/ville/afficherfro') {
                    return array (  '_controller' => 'GV\\VilleBundle\\Controller\\VilleController::frontRechercherVilleAction',  '_route' => 'afficherVillefront',);
                }

                // afficherdetailsVillefront
                if (0 === strpos($pathinfo, '/ville/afficherdetailsfro') && preg_match('#^/ville/afficherdetailsfro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficherdetailsVillefront')), array (  '_controller' => 'GV\\VilleBundle\\Controller\\VilleController::afficherdetailsfrontAction',));
                }

            }

            // rechercherfrontVille
            if ($pathinfo === '/ville/rechercherfront') {
                return array (  '_controller' => 'GV\\VilleBundle\\Controller\\VilleController::frontRechercherVilleAction',  '_route' => 'rechercherfrontVille',);
            }

        }

        // gv_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gv_user_homepage')), array (  '_controller' => 'GV\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        // erreur
        if ($pathinfo === '/erreur') {
            return array (  '_controller' => 'GV\\UserBundle\\Controller\\DefaultController::erreurAction',  '_route' => 'erreur',);
        }

        // accueil
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'GV\\UserBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'accueil',);
        }

        // modifier
        if (0 === strpos($pathinfo, '/modifier') && preg_match('#^/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier')), array (  '_controller' => 'GV\\UserBundle\\Controller\\DefaultController::modifierAbonneAction',));
        }

        // detail_Abonne
        if ($pathinfo === '/detail') {
            return array (  '_controller' => 'GV\\UserBundle\\Controller\\DefaultController::detailAbonneAction',  '_route' => 'detail_Abonne',);
        }

        // afficher_ab
        if ($pathinfo === '/afficher_ab') {
            return array (  '_controller' => 'GV\\UserBundle\\Controller\\DefaultController::afficherAction',  '_route' => 'afficher_ab',);
        }

        // gv_user_mail_succ
        if ($pathinfo === '/succ') {
            return array (  '_controller' => 'GV\\UserBundle\\Controller\\MailController::indexAction',  '_route' => 'gv_user_mail_succ',);
        }

        // gv_user_mail_form
        if ($pathinfo === '/mail') {
            return array (  '_controller' => 'GV\\UserBundle\\Controller\\MailController::newAction',  '_route' => 'gv_user_mail_form',);
        }

        // gv_user_mail_sendpage
        if ($pathinfo === '/sendmail') {
            return array (  '_controller' => 'GV\\UserBundle\\Controller\\MailController::sendMailAction',  '_route' => 'gv_user_mail_sendpage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // affiche_detail_compte
            if (0 === strpos($pathinfo, '/admin/detailCompte') && preg_match('#^/admin/detailCompte/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiche_detail_compte')), array (  '_controller' => 'GV\\UserBundle\\Controller\\AdminController::aficherDetailCompteAction',));
            }

            // choix_admin_compte
            if (0 === strpos($pathinfo, '/admin/choix_admin_compte') && preg_match('#^/admin/choix_admin_compte/(?P<choix>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'choix_admin_compte')), array (  '_controller' => 'GV\\UserBundle\\Controller\\AdminController::choixAdminCompteAction',));
            }

            // afficher_compte_admin
            if ($pathinfo === '/admin/afficherCompte') {
                return array (  '_controller' => 'GV\\UserBundle\\Controller\\AdminController::afficherCompteDashAction',  '_route' => 'afficher_compte_admin',);
            }

            // cher
            if ($pathinfo === '/admin/recherche') {
                return array (  '_controller' => 'GV\\UserBundle\\Controller\\AdminController::rechercheAction',  '_route' => 'cher',);
            }

        }

        if (0 === strpos($pathinfo, '/Forum')) {
            // gv_forum_homepage
            if ($pathinfo === '/Forum/hello') {
                return array (  '_controller' => 'GV\\ForumBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gv_forum_homepage',);
            }

            // Ajouter_commentaire
            if (0 === strpos($pathinfo, '/Forum/ajouterc') && preg_match('#^/Forum/ajouterc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Ajouter_commentaire')), array (  '_controller' => 'GV\\ForumBundle\\Controller\\CommentaireController::ajouterAction',));
            }

            // Liste_commentaire
            if (0 === strpos($pathinfo, '/Forum/listec') && preg_match('#^/Forum/listec/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Liste_commentaire')), array (  '_controller' => 'GV\\ForumBundle\\Controller\\CommentaireController::ListeAction',));
            }

            // Liste_poste
            if (rtrim($pathinfo, '/') === '/Forum') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Liste_poste');
                }

                return array (  '_controller' => 'GV\\ForumBundle\\Controller\\PosteController::listeAction',  '_route' => 'Liste_poste',);
            }

            // Ajouter_poste
            if ($pathinfo === '/Forum/ajouterp') {
                return array (  '_controller' => 'GV\\ForumBundle\\Controller\\PosteController::ajouterAction',  '_route' => 'Ajouter_poste',);
            }

            // Modifier_commentaire
            if (0 === strpos($pathinfo, '/Forum/modifier') && preg_match('#^/Forum/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_commentaire')), array (  '_controller' => 'GV\\ForumBundle\\Controller\\CommentaireController::ModifierAction',));
            }

            if (0 === strpos($pathinfo, '/Forum/supprimer')) {
                // Supprimer_poste
                if (0 === strpos($pathinfo, '/Forum/supprimerp') && preg_match('#^/Forum/supprimerp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Supprimer_poste')), array (  '_controller' => 'GV\\ForumBundle\\Controller\\PosteController::SupprimerAction',));
                }

                // Supprimer_commentaire
                if (0 === strpos($pathinfo, '/Forum/supprimerc') && preg_match('#^/Forum/supprimerc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Supprimer_commentaire')), array (  '_controller' => 'GV\\ForumBundle\\Controller\\CommentaireController::SuppAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

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
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'GV\\UserBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
