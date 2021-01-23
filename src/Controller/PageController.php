<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PageController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function page(): Response
    {
        return $this->render('page.html.twig');
    }

    /**
     * @Route("/contacts")
     */
    public function contacts(): Response
    {
        return $this->render('contacts.html.twig');
    }

    /**
     * @Route("/about")
     */
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }
}