<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Component;

class Card extends Component
{
    public $type;
    public $data;

    public function render()
    {
        return view('livewire.pages.dashboard.card');
    }
}
