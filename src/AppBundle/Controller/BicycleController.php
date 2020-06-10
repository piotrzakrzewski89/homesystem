<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\Bicycle;
use AppBundle\Form\Type\BicycleType;
class BicycleController extends Controller
{
    /**
     * @Route("/bicycle", name="bicycle")
     */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $bicycle = $em->getRepository('AppBundle:Bicycle')->findAll();

        return $this->render('bicycle/index.html.twig', [
        	'bicycle' => $bicycle,
            'controller_name' => 'BicycleController',
        ]);
    }

    /**
     * @Route("/bicycle/new", name="bicycle_new" , methods={"GET","HEAD"}))
     */
    public function new(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $bicycle = new Bicycle();

        $form = $this->createForm(BicycleType::class, $bicycle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           $em->persist($bicycle);   
           $em->flush();
           return $this->redirectToRoute('bicycle');
       }

        return $this->render('bicycle/new.html.twig', [
        	'bicycle' => $bicycle,
        	'form' => $form->createView(),
            'controller_name' => 'BicycleController',
        ]);
    }
}
