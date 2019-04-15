<?php

use App\Service\ServiceHandler;
use App\Service\Foo;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class LazyServiceTest extends KernelTestCase
{
    public function setUp()
    {
        parent::setUp();
        static::bootKernel();
    }

    public function testFooService()
    {
        $serviceHandler = self::$container->get(ServiceHandler::class);

        $this->assertInstanceOf(Foo::class, $serviceHandler->get(Foo::KEY));
    }
}
