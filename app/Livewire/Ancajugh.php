<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ancaju;

class Ancajugh extends Component
{
    public function render()
    {
        $ancajuguest=Ancaju::latest()->get();
        return view('livewire.ancajugh',['ancaju'=>$ancajuguest]);
    }
}
