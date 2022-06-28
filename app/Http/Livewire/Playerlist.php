<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Playerlist extends Component
{

    public $player;
    public $players;

    public function render()
    {
       


        return view('livewire.playerlist');
    }

    public function addplayer()
    {
        $player = $this->player;

        dd($player);

        return view('livewire.playerlist')->with(['player' => $player ]);
    }
}
