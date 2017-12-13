<?php

namespace AstuceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DetailsController extends Controller
{
    /**
     * @Route("/detailsastuce/{id}")
     */
    public function detailsAstuceAction($id)
    {
      $repository=$this->getDoctrine()->getManager();
      $astuce=$repository->getRepository('AstuceBundle:Astuce')->find($id);
      return $this->render('AstuceBundle:Default:details.html.twig',array(
          'astuce'=>$astuce));
    }
}
