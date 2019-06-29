<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route(path="/login", name="security_login", methods={"GET"})
     */
    public function login()
    {
        return $this->render('security/login.html.twig');
    }

    /**
     * @Route(path="/register", name="security_register", methods={"GET"})
     */
    public function register()
    {
        return $this->render('security/register.html.twig');
    }

    /**
     * @Route(path="/lock-screen", name="security_lock_screen", methods={"GET"})
     */
    public function lockScreen()
    {
        return $this->render('security/lockScreen.html.twig');
    }
}