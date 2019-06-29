<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(path="/widgets", name="pages_widgets", methods={"GET"})
 */
class WidgetsController extends AbstractController
{
    public function __invoke()
    {
        return $this->render('widgets/index.html.twig');

    }
}