<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
      /**
     * @Route("/service", name="service")
     */
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'GestionController',
        ]);
    
    }
    /** 
     *@Route ("/list", name="list")
     */
    public function list () {
        return $this->render('service/list.html.twig', [
            'title' => "Listes des Services"
        ]);
    }
     /** 
     *@Route ("/list/12", name="list_show")
     */
    public function show(){
        return $this->render('service/show.html.twig');
    }
}
