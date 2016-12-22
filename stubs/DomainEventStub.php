<?php

namespace Stubs;

use Mosaiqo\Cqrs\Contracts\DomainEvent;

class DomainEventStub implements DomainEvent {
    
    public function payload()
    {
        // TODO: Implement payload() method.
    }
    
    public static function fromArray(array $payload)
    {
        // TODO: Implement fromArray() method.
    }
}