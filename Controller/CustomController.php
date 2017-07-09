<?php

namespace Custom\StandaloneBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
 
class CustomController extends Controller
{
    public function viewAction()
    {
    	date_default_timezone_set('America/Los_Angeles');
    	// On récupère le service
	    $customService = $this->container->get('custom_standalone.check_even_number');

	    // Je pars du principe que $text contient le texte d'un message quelconque
	    var_dump($customService->isEven(60));die;
    }
}