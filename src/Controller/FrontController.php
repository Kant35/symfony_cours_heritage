<?php

namespace App\Controller;

use App\Repository\PersonneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="app_front")
     */
    public function index(PersonneRepository $personneRepository): Response
    {
        // dd($personneRepository->findAll());

        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
}
