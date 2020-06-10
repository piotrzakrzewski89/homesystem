<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class MainController extends Controller
{
    /**
     * @Route("/", name="main")
     */
    public function indexAction(Request $request)    
    {
        $em = $this->getDoctrine()->getManager();
        $messuring_rooms_current = $em->getRepository('AppBundle:MessuringRooms')->findOneBy(array(), array('id' => 'DESC'), 1);  

        if($request->request->get('some_var_name')){
        //make something curious, get some unbelieveable data
        $arrData = ['output' => $messuring_rooms_current->getTemp()];
        return new JsonResponse($arrData);
    }

     	$phpversion = phpversion();
        $sysinfo = shell_exec('sh ../../sysinfo.sh');

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'phpversion' => $phpversion,
            'sysinfo' => $sysinfo
        ]);
    }
   
}
