<?php

namespace App\Livewire;

use Livewire\Component;
use App\models\Chambre;

class DetailPage extends Component
{
    public $first='';
    public $second='hidden';
    public $third='hidden';

    public function firstImg(){
        $this->second='hidden';
        $this->third='hidden';
        $this->first='';
       }
    
       public function secondImg (){
        $this->first='hidden';
        $this->third='hidden';
        $this->second='';
       }
    
       public function thirdImg(){
        $this->second='hidden';
        $this->first='hidden';
        $this->third='';
       }
    public function render()
    {
        $details=Chambre::latest()->get();
        return view('livewire.detail-page',['chambre'=>$details]);
    }
}
