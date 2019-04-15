<?php

namespace App\Service;

class Foo implements BazInterface, \Countable
{
    public const KEY = 'foo';

    public function count()
    {
        return 0;
    }
}
