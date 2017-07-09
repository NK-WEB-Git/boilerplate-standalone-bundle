<?php
 
 namespace Custom\StandaloneBundle\Tests\Unit\Controller;
 
use Custom\StandaloneBundle\Controller\HelloController;
use Symfony\Component\HttpFoundation\JsonResponse;
 
class HelloControllerTest extends \PHPUnit_Framework_TestCase
{
    private $controller = null;
 
    protected function setUp()
    {
        $this->controller = new HelloController();
    }
 
    protected function tearDown()
    {
        $this->controller = null;
    }
 
    public function testViewAction()
    {
        $this->assertInstanceOf(JsonResponse::class, $this->controller->viewAction());
    }
}