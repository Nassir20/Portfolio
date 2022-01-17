<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NailPortfolioController extends AbstractController
{
    /**
     * @Route("/", name="/")
     */
    public function index(): Response
    {
        return $this->render('nail_portfolio/index.html.twig', [
            'controller_name' => 'NailPortfolioController',
        ]);
    }
     /**
     * @Route("/cv", name="cv")
     */
    public function cv(): Response
    {
        return $this->render('nail_portfolio/cv.html.twig');
    }
     /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('nail_portfolio/contact.html.twig');
    }
     /**
     * @Route("/portfolio", name="portfolio")
     */
    public function portfolio(): Response
    {
        return $this->render('nail_portfolio/portfolio.html.twig');
    }
    /**
     * @Route("/mesloisirs", name="mesloisirs")
     */
    public function mesloisirs(): Response
    {
        return $this->render('nail_portfolio/mesloisirs.html.twig');
    }
    /**
     * @Route("/oral", name="oral")
     */
    public function oral(): Response
    {
        return $this->render('nail_portfolio/Oral.html.twig');
    }
    
}
