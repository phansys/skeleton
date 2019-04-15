<?php

namespace App\Controller;

use App\Service\Bar;
use App\Service\Foo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index(Foo $baz)
    {
        dump($baz, $baz instanceof \Countable); // prints `false`

        return new Response('empty');
    }
}