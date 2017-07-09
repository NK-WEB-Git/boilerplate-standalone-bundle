<?php
 
namespace Custom\StandaloneBundle\Tests\Functional\Controller;
 
use Custom\StandaloneBundle\Tests\WebTestCase;
 
class HelloControllerTest extends WebTestCase
{
    private $client = null;
 
    private $container = null;
 
    public function setUp()
    {
        $this->client = static::createClient();
        $this->container = $this->client->getContainer();
    }
 
    public function tearDown()
    {
        $this->client = null;
        $this->container = null;
    }
 
    public function testViewAction()
    {
        $this->client->request('GET', '/');
 
        $this->assertTrue($this->client->getResponse()->isSuccessful());
    }
}