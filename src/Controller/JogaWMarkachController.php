<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JogaWMarkachController extends AbstractController
{

    #[Route('/', name: 'app_jogawmarkach_homepage')]
    public function homepage(): Response {

        $response = $this->render('hp.html.twig', []);

        $response->setPublic();
        $response->setMaxAge(2592000);

        $response->headers->addCacheControlDirective('must-revalidate', true);

        return $response;
    }
}