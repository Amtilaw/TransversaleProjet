<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModifPatientController extends AbstractController
{
    /**
     * @Route("/modif/patient", name="modif_patient")
     */
    public function index(): Response
    {
        return $this->render('modif_patient/index.html.twig', [
            'controller_name' => 'ModifPatientController',
        ]);
    }
}
