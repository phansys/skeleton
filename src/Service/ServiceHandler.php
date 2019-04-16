<?php

namespace App\Service;

class ServiceHandler
{
    /**
     * @var BazInterface[]
     */
    private $services = [];

    public function __construct(array $services)
    {
        $this->services = $services;
    }

    public function get(string $key): BazInterface
    {
        return $this->services[$key];
    }
}
