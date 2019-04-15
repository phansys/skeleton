<?php

namespace App\Service;

class Qux
{
    /**
     * @var BazInterface[]
     */
    private static $services = [];

    public static function factory(string $key): BazInterface
    {
        if (!self::$services) {
            self::$services = [
                'foo' => new Foo(),
                'bar' => new Bar(),
            ];
        }

        return self::$services[$key];
    }
}
