<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // nelmio_api_doc_index
        if (0 === strpos($pathinfo, '/frais-api/doc') && preg_match('#^/frais\\-api/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_nelmio_api_doc_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
        }
        not_nelmio_api_doc_index:

        if (0 === strpos($pathinfo, '/api')) {
            // api_fichefrais_get_lesmoisdisponibles
            if (0 === strpos($pathinfo, '/api/lesmoisdisponibles') && preg_match('#^/api/lesmoisdisponibles/(?P<idVisiteur>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_fichefrais_get_lesmoisdisponibles;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_fichefrais_get_lesmoisdisponibles')), array (  '_controller' => 'FraisApiBundle\\Controller\\FichefraisRestController::getLesmoisdisponiblesAction',  '_format' => 'json',));
            }
            not_api_fichefrais_get_lesmoisdisponibles:

            if (0 === strpos($pathinfo, '/api/nbjustificatifs')) {
                // api_fichefrais_get_nbjustificatif_mois
                if (preg_match('#^/api/nbjustificatifs/(?P<idVisiteur>[^/]++)/mois/(?P<mois>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_fichefrais_get_nbjustificatif_mois;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_fichefrais_get_nbjustificatif_mois')), array (  '_controller' => 'FraisApiBundle\\Controller\\FichefraisRestController::getNbjustificatifMoisAction',  '_format' => 'json',));
                }
                not_api_fichefrais_get_nbjustificatif_mois:

                // api_fichefrais_put_nbjustificatifs
                if (preg_match('#^/api/nbjustificatifs(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_api_fichefrais_put_nbjustificatifs;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_fichefrais_put_nbjustificatifs')), array (  '_controller' => 'FraisApiBundle\\Controller\\FichefraisRestController::putNbjustificatifsAction',  '_format' => 'json',));
                }
                not_api_fichefrais_put_nbjustificatifs:

            }

            // api_fichefrais_get_derniermoissaisi
            if (0 === strpos($pathinfo, '/api/derniermoissaisis') && preg_match('#^/api/derniermoissaisis/(?P<idVisiteur>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_fichefrais_get_derniermoissaisi;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_fichefrais_get_derniermoissaisi')), array (  '_controller' => 'FraisApiBundle\\Controller\\FichefraisRestController::getDerniermoissaisiAction',  '_format' => 'json',));
            }
            not_api_fichefrais_get_derniermoissaisi:

            // api_fichefrais_post_nouvelleslignesfrais
            if (0 === strpos($pathinfo, '/api/nouvelleslignesfrais') && preg_match('#^/api/nouvelleslignesfrais(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_fichefrais_post_nouvelleslignesfrais;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_fichefrais_post_nouvelleslignesfrais')), array (  '_controller' => 'FraisApiBundle\\Controller\\FichefraisRestController::postNouvelleslignesfraisAction',  '_format' => 'json',));
            }
            not_api_fichefrais_post_nouvelleslignesfrais:

            // api_fichefrais_get_lesinfosfichesfrais_mois
            if (0 === strpos($pathinfo, '/api/lesinfosfichesfrais') && preg_match('#^/api/lesinfosfichesfrais/(?P<idVisiteur>[^/]++)/mois/(?P<mois>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_fichefrais_get_lesinfosfichesfrais_mois;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_fichefrais_get_lesinfosfichesfrais_mois')), array (  '_controller' => 'FraisApiBundle\\Controller\\FichefraisRestController::getLesinfosfichesfraisMoisAction',  '_format' => 'json',));
            }
            not_api_fichefrais_get_lesinfosfichesfrais_mois:

            // api_fichefrais_put_majetatfichefrais
            if (0 === strpos($pathinfo, '/api/majetatfichefrais') && preg_match('#^/api/majetatfichefrais/(?P<idVisiteur>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_api_fichefrais_put_majetatfichefrais;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_fichefrais_put_majetatfichefrais')), array (  '_controller' => 'FraisApiBundle\\Controller\\FichefraisRestController::putMajetatfichefraisAction',  '_format' => 'json',));
            }
            not_api_fichefrais_put_majetatfichefrais:

            // api_etat_put_etatidfichefrais
            if (0 === strpos($pathinfo, '/api/etatidfichefrais') && preg_match('#^/api/etatidfichefrais(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_api_etat_put_etatidfichefrais;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_etat_put_etatidfichefrais')), array (  '_controller' => 'FraisApiBundle\\Controller\\EtatRestController::putEtatidfichefraisAction',  '_format' => 'json',));
            }
            not_api_etat_put_etatidfichefrais:

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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
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

        // api_login_check
        if ($pathinfo === '/api/login_check') {
            return array('_route' => 'api_login_check');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
