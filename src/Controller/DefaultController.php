<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController
 *
 * @package App\Controller
 * @Route(path="/{page}", name="show_pages", methods={"GET"})
 */
class DefaultController extends AbstractController
{
    public function __invoke($page)
    {
        return $this->render(sprintf('pages/%s.html.twig', $page));

    }
}
