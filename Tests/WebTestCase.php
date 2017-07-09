<?php
 
namespace Custom\StandaloneBundle\Tests;
 
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase as BaseWebTestCase;
 
abstract class WebTestCase extends BaseWebTestCase
{
    protected static function getKernelClass()
    {
        return 'Custom\StandaloneBundle\Tests\App\AppKernel';
    }
}