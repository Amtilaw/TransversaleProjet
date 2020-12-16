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
     *@Route ("/list/1", name="list_show1")
     */
    public function show1(){
        return $this->render('service/show1.html.twig');
    }
     /** 
     *@Route ("/list/2", name="list_show2")
     */
    public function show2(){
        return $this->render('service/show2.html.twig');
    }
     /** 
     *@Route ("/list/3", name="list_show3")
     */
    public function show3(){
        return $this->render('service/show3.html.twig');
    }
     /** 
     *@Route ("/list/4", name="list_show4")
     */
    public function show4(){
        return $this->render('service/show4.html.twig');
    }
}
