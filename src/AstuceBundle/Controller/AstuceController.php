<?php

namespace AstuceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AstuceController extends Controller
{
    /**
     * @Route("/astuces",name="astuces")
     */
    public function detailsAstuceAction()
    {
      $repository=$this->getDoctrine()->getManager();
      $astuces=$repository->getRepository('AstuceBundle:Astuce')->findAll();
      return $this->render('AstuceBundle:Default:astuces.html.twig',array(
          'astuces'=>$astuces));
    }
}
