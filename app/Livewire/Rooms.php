<?php

namespace App\Livewire;
use App\Models\Room;
use Livewire\Component;

class Rooms extends Component
{
    
    public function render()
    {
       
        return view('livewire.rooms',['room'=>Room::latest()->get()]);
    }
}
