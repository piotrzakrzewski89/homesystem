<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\CarConsumption;
use AppBundle\Entity\Cars;
use AppBundle\Form\Type\CarsType;
use AppBundle\Form\Type\ChooseCarType;
use AppBundle\Form\Type\CarConsumptionType;
use AppBundle\Entity\ChooseCar;

class CarsController extends Controller
{
    /**
     * @Route("/cars", name="cars", methods={"GET","HEAD", "POST"}))
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $ChooseCar = new ChooseCar();
        $formsearch = $this->createForm(ChooseCarType::class, $ChooseCar);
        $formsearch->handleRequest($request);

        
        
        if ($formsearch->isSubmitted() && $formsearch->isValid()) {     
            $cars = $em->getRepository('AppBundle:Cars')->findOneBy(['id'=> $ChooseCar->getCars()->getId()]);
            $carconsumption = $em->getRepository('AppBundle:CarConsumption')->findAll();
          
       }else{
        $cars = null;
        $carconsumption = null;
       }

        return $this->render('cars/index.html.twig', [
            'formsearch' => $formsearch->createView(),
            'cars' => $cars,
            'carconsumption' => $carconsumption,
            'controller_name' => 'CarController',
        ]);
    }

    /**
     * @Route("/cars/new", name="cars_new" , methods={"POST","GET","HEAD"}))
     */
    public function newCarsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $Cars = new Cars();

        $form = $this->createForm(CarsType::class, $Cars);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           $em->persist($Cars);   
           $em->flush();
           return $this->redirectToRoute('cars');
       }

        return $this->render('cars/newCars.html.twig', [
            'Cars' => $Cars,
            'form' => $form->createView(),
            'controller_name' => 'newCars',
        ]);
    }

     /**
     * @Route("/cars/consumtpion/new", name="carconsumtpion_new" , methods={"POST","GET","HEAD"}))
     */
    public function newCarConsumptionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $carconsumption = new CarConsumption();

        $form = $this->createForm(CarConsumptionType::class, $carconsumption);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           $em->persist($carconsumption);   
           $em->flush();
           return $this->redirectToRoute('car');
       }

        return $this->render('cars/new.html.twig', [
            'carconsumption' => $carconsumption,
            'form' => $form->createView(),
            'controller_name' => 'CarController',
        ]);
    }
}