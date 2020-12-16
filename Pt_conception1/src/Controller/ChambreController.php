<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChambreController extends AbstractController
{
    /**
     * @Route("/chambre", name="chambre")
     */
    public function index(): Response
    {
        $numChambre = $_GET['num'];
        return $this->render('chambre/index.html.twig', [
            'controller_name' => 'ChambreController',
            'num' => $numChambre,
        ]);
    }
}
