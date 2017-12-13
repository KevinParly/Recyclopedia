<?php

namespace AstuceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AccueilController extends Controller
{
    /**
     * @Route("/accueil",name="accueil")
     */
    public function accueilAction()
    {
      $repository=$this->getDoctrine()->getManager();
      $astuces=$repository->getRepository('AstuceBundle:Astuce')->findAll();
      $i = sizeof($astuces);
      $astuce1=$repository->getRepository('AstuceBundle:Astuce')->find($i);
      $i = $i-1;
      $astuce2=$repository->getRepository('AstuceBundle:Astuce')->find($i);
      $i = $i-1;
      $astuce3=$repository->getRepository('AstuceBundle:Astuce')->find($i);
      return $this->render('AstuceBundle:Default:accueil.html.twig',array(
          'astuce1'=>$astuce1,'astuce2'=>$astuce2,'astuce3'=>$astuce3
        )
      );
    }
}
