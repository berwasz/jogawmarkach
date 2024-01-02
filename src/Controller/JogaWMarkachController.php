<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JogaWMarkachController extends AbstractController
{
    #[Route('/', name: 'app_jogawmarkach_homepage')]
    public function homepage(): Response {
        return $this->render('hp.html.twig');
    }
}