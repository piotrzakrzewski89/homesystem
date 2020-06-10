<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class VpnController extends Controller
{
    /**
     * @Route("/vpn", name="vpn")
     */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $openvpnlog = $em->getRepository('AppBundle:Openvpn')->findAll();

        return $this->render('vpn/index.html.twig', [
        	'openvpnlog' => $openvpnlog,
            'controller_name' => 'VpnController',
        ]);
    }
}
