<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\Type\EditUserAdminType;
use AppBundle\Entity\User;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function indexAction()    {

        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findAll();

        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'users' => $users,
        ]);
    }

    /**
     * @Route("/admin/details/{id}", name="admin_details")
     */
    public function detailsAction($id)    {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->findOneBy(['id' => $id]);

        return $this->render('admin/details.html.twig', [
            'controller_name' => 'AdminController',
            'user' => $user,
        ]);
    }

    /**
     * @Route("/admin/edit/{id}", name="admin_edit")
     */
    public function editAction(Request $request, User $user,$id)    {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->findOneBy(['id' => $id]);

        $form = $this->createForm(EditUserAdminType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 
           $em->persist($user);   
           $em->flush();
           return $this->redirectToRoute('admin');
       }

        return $this->render('admin/edit.html.twig', [
            'controller_name' => 'AdminController',
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }
}
