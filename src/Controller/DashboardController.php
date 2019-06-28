<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DashboardController
 *
 * @package App\Controller
 * @Route(path="/", name="dashboard", methods={"GET"})
 */
class DashboardController extends AbstractController
{
    public function __invoke()
    {
        return $this->render('dashboard.html.twig');
    }
}
