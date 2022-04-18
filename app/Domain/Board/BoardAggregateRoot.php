<?php

namespace App\Domain\Board;

use App\Domain\Board\Events\BoardCreated;
use App\Domain\Board\Events\BoardDeleted;
use Spatie\EventSourcing\AggregateRoots\AggregateRoot;

class BoardAggregateRoot extends AggregateRoot
{
    protected string $uuid;

    public function createBoard(string $name, string $color, string $icon)
    {
        $this->recordThat(new BoardCreated($name, $color, $icon));

        return $this;
    }

    public function deleteBoard()
    {
        $this->recordThat(new BoardDeleted());

        return $this;
    }
}
