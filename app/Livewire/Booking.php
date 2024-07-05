<?php

namespace App\Livewire;
use Livewire\Attributes\Rule;
use App\Models\Reservations;
use Livewire\Component;

class Booking extends Component
{
   public $margine=2;
    #[Rule("required|max:18")]
        public $phone;
        #[Rule("required")]
        public $enregistrement;
        #[Rule("required")]
        public $nuit;
        #[Rule("required")]
        public $verifier;
        #[Rule("required")]
        public $adultes;
        #[Rule("required")]
        public $enfants;

        public function create(){
            $valideted=$this->validate();
            Reservations::create($valideted);
            $this->margine=8;
            $this->reset();
            $this->redirect('/sent');
        }
    public function render()
    {
        return view('livewire.booking');
    }
}
