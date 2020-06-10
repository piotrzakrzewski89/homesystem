<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Weight;
use AppBundle\Form\Type\WeightType;

class WeightController extends Controller
{
    /**
     * @Route("/weight", name="weight")
     */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $weight = $em->getRepository('AppBundle:Weight')->findAll();

        return $this->render('weight/index.html.twig', [
        	'weight' => $weight,
            'controller_name' => 'WeightController',
        ]);
    }

     /**
     * @Route("/eight/new", name="weight_new" , methods={"POST","GET","HEAD"}))
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $weight = new Weight();

        $form = $this->createForm(WeightType::class, $weight);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           $em->persist($weight);   
           $em->flush();
           return $this->redirectToRoute('weight');
       }

        return $this->render('weight/new.html.twig', [
        	'weight' => $weight,
        	'form' => $form->createView(),
            'controller_name' => 'CarController',
        ]);
    }
}