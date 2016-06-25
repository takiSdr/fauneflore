<?php
/**
 * Created by PhpStorm.
 * User: sider
 * Date: 24/06/16
 * Time: 21:57
 */

namespace Ffk\UserBundle\Controller;


use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Controller\RegistrationController as BaseController;


class RegistrationController extends BaseController
{

    public function registerAction()
    {
        $form = $this->container->get('fos_user.registration.form');
        $formHandler = $this->container->get('fos_user.registration.form.handler');
        $confirmationEnabled = $this->container->getParameter('fos_user.registration.confirmation.enabled');

        $process = $formHandler->process($confirmationEnabled);
        if ($process) {
            $player = $form->getData();

            $this->container->get('logger')->info(
                sprintf('New user registration: %s', $player)
            );

            if ($confirmationEnabled) {
                $this->container->get('session')->set('fos_user_send_confirmation_email/email', $player->getEmail());
                $route = 'ffk_user_registration';
            } else {
                $this->authenticateUser($player);
                $route = 'app';
            }

            $this->setFlash('app', 'registration.flash.user_created');
            $url = $this->container->get('router')->generate($route);

            return new RedirectResponse($url);
        }

        //  return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:register.html.'.$this->getEngine(), array('form' => $form->createView(), ));
    }

}