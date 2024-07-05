<?php

namespace App\Livewire;

use App\Models\Commodites;
use Livewire\Component;

class Commodities extends Component
{
    public function render()
    {
        $commodities=Commodites::latest()->get();
        return view('livewire.commodities',['commodites'=>$commodities]);
    }
}
