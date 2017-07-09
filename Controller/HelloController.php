<?php

namespace Custom\StandaloneBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
 
class HelloController extends Controller
{
    public function viewAction()
    {
    	date_default_timezone_set('America/Los_Angeles');
        return new JsonResponse(['greeting' => 'Hello world']);
    }
}