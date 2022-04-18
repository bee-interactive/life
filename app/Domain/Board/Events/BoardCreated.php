<?php

namespace App\Domain\Board\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class BoardCreated extends ShouldBeStored
{
    public function __construct(
        public string $name,
        public string $color,
        public string $icon,
    ) {
    }
}
