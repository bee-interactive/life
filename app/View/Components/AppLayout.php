<?php

namespace App\View\Components;

use App\Models\Board;
use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $boards = Board::get();

        return view('layouts.app', [
            'boards' => $boards
        ]);
    }
}
