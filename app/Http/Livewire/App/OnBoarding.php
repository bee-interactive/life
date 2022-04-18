<?php

namespace App\Http\Livewire\App;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Domain\Board\BoardAggregateRoot;

class OnBoarding extends Component
{
    public $name;
    public $newUuid;

    public function mount()
    {
        $this->newUuid = Str::uuid()->toString();
    }

    public function startExperience()
    {
        $this->name = 'Uncategorized';
        $this->color = '#474c52';
        $this->icon = 'fa-solid fa-box-archive';

        BoardAggregateRoot::retrieve($this->newUuid)
            ->createBoard($this->name, $this->color, $this->icon)
            ->persist();

        return redirect()->back();
    }
}
