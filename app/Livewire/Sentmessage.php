<?php

namespace App\Livewire;
use App\Models\Message;
use Livewire\Component;

class Sentmessage extends Component
{
    
    public function render()
    {
        $currentDate=today();
        return view('livewire.sentmessage',['message'=>Message::latest()->get()]);
    }
}
