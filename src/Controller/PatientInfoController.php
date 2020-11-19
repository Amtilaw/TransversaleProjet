<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PatientInfoController extends AbstractController
{
    /**
     * @Route("/patient/info", name="patient_info")
     */
    public function index(): Response
    {
        return $this->render('patient_info/index.html.twig', [
            'controller_name' => 'PatientInfoController',
        ]);
    }
}
