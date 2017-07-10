<?php

namespace Custom\StandaloneBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
 
class HelloController extends Controller
{
    public function viewAction()
    {
    	date_default_timezone_set('America/Los_Angeles');
    	throw new NotFoundHttpException('bloqué');
        return new JsonResponse(['greeting' => 'Hello world']);
    }
}