<?php
 
namespace Custom\StandaloneBundle\Tests\Functional\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
 
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
        $this->expectException(NotFoundHttpException::class);
        $this->client->request('GET', '/');
        $this->assertTrue($this->client->getResponse()->isSuccessful());
    }

    /**
     * {@inheritdoc}
     */
    /* protected function onNotSuccessfulTest(Exception $exception)
    {
        $message = null;
        if ($this->client->getCrawler()) {
            $message = preg_replace('#\s{2,}#', '', $this->client->getCrawler()->filter('.text-exception')->text());
        }
        if ($message) {
            $exceptionClass = get_class($exception);
            throw new $exceptionClass($exception->getMessage() . ' | ' . $message);
        }
        throw $exception;
    }*/
}