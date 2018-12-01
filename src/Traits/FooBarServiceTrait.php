<?php

namespace App\Traits;

use App\Service\FooBarService;

trait FooBarServiceTrait
{
    /**
     * @var FooBarService
     */
    protected $fooBarService;

    /**
     * @see https://symfony.com/doc/current/service_container/autowiring.html#autowiring-other-methods-e-g-setters
     *
     * @required
     *
     * @param FooBarService $fooBarService
     *
     * @return self
     */
    public function setFooBarService(FooBarService $fooBarService): self
    {
        $this->fooBarService = $fooBarService;

        return $this;
    }
}