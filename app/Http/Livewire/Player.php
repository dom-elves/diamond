<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Player extends Component
{
    public function render()
    {
        return view('livewire.player');
    }

    // public function mount($player)
    // {
    //     $player = Playerlist::where('player', $player)->first();
    // }
}
