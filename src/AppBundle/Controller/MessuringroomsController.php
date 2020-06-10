<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\SearchingMessuring;
use AppBundle\Entity\MessuringRooms;
use AppBundle\Form\Type\SearchingMessuringType;
use Doctrine\ORM\EntityRepository;

class MessuringroomsController extends Controller
{
    /**
     * @Route("/messuringrooms", name="messuringrooms")
     */
    public function indexAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager();
        $messuring_rooms_current = $em->getRepository('AppBundle:MessuringRooms')->findOneBy(array(), array('id' => 'DESC'), 1);  
        
        $SearchingMessuring = new SearchingMessuring();
        $form = $this->createForm(SearchingMessuringType::class, $SearchingMessuring);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $messuring_from = (array)$SearchingMessuring->getMessuringFrom();
            $messuring_to = (array)$SearchingMessuring->getMessuringTo();
            
            $messuring_rooms = $this->getDoctrine()->getRepository(MessuringRooms::class)->createQueryBuilder('p')
                ->where('p.stamp BETWEEN :date_from AND :date_to ')
                ->setParameter('date_from', $messuring_from['date'])
                ->setParameter('date_to', $messuring_to['date'])
                ->orderBy('p.stamp', 'DESC')
                ->getQuery()->getResult();            

        }else{
            $messuring_rooms = $em->getRepository('AppBundle:MessuringRooms')->findBy(array(), array('id' => 'DESC'), 288);          
        }      


        return $this->render('messuringrooms/index.html.twig', [
            'messuring_rooms_current' => $messuring_rooms_current,
            'messuring_rooms' => $messuring_rooms,
        	'form' => $form->createView(),
            'controller_name' => 'MessuringroomsController',
        ]);
    }
}
