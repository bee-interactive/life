<?php

namespace App\Domain\Board\Projectors;

use App\Models\Board;
use Illuminate\Support\Facades\Auth;
use App\Domain\Board\Events\BoardCreated;
use App\Domain\Board\Events\BoardDeleted;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class BoardProjector extends Projector
{
    public function onBoardCreated(BoardCreated $event)
    {
        Board::firstOrCreate([
            'uuid' => $event->aggregateRootUuid(),
        ], [
            'name' => $event->name,
            'user_id' => Auth::user()->id,
            'color' => $event->color,
            'icon' => $event->icon,
        ]);
    }

    public function onBoardDeleted(BoardDeleted $event)
    {
        Board::uuid($event->aggregateRootUuid())->delete();
    }
}
