<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Patient;
use App\Entity\Sejours;
use src\Repository\PatientRepository;

class GestionController extends AbstractController
{
    /**
     * @Route("/gestion", name="gestion")
     */
    public function index(): Response
    {
        return $this->render('gestion/index.html.twig', [
            'controller_name' => 'GestionController',
        ]);
    }
    /** 
     *@Route ("/", name="home")
     */
    public function home() {
        return $this->render('gestion/home.html.twig');
    }

    /**
     * @Route("/patients", name="patients")
     */
    public function patients(){
        return $this->render('gestion/home.html.twig');
    }

    /**
     * @Route("/connexion", name="connexions")
     */
    public function connexions(){
        return $this->render('gestion/connexion.html.twig');
    }

    /**
     * @Route("/sejour", name="formulaireSejour")
     */
    public function formulaireSejour(){
        return $this->render('gestion/sejour.html.twig');
    }

    /**
     * @Route("/patient.php", name="enregistrement")
     */
    public function enregistrement(Request $request, EntityManagerInterface $manager){
        //dump($request);

        if($request->request->count() > 0){
            $patient = new Patient();
            $patient->setId($request->request->get('id'))
                    ->setNomPrenom($request->request->get('nomprenom'))
                    //->setDateNaissance($request->request->get('dateNaiss'))
                    ->setAdresse($request->request->get('adresse'))
                    ->setVille($request->request->get('ville'))
                    ->setTelephone($request->request->get('telephone'));

            $manager->persist($patient);
            $manager->flush();
        }
        return $this->render('gestion/patient.php');
    }

    /**
     * @Route("/sejour.php", name="enregistrementSejour")
     */
    public function enregistrementSejour(Request $request, EntityManagerInterface $manager){
        dump($request);

        if($request->request->count() > 0){
            $sejour = new Sejours();
            $sejour->setnomsPatient($request->request->get('nomprenom'))
                    //->setDateNaissance($request->request->get('dateNaiss'))
                    ->setNomService($request->request->get('service'))
                    ->setChambre($request->request->get('chambre'))
                    ->setDateEntree(new \DateTime());

            $manager->persist($sejour);
            $manager->flush();
        }
        return $this->render('gestion/patient.php');
    }
}
