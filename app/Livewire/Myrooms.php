<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Chambre;
class Myrooms extends Component
{
    public $hideRooms;
    public $viewRom;
    public $viewRomtwo=0;
    public $first='';
    public $second='hidden';
    public $third='hidden';

    public $firstSm='hidden';
    public $secondSm='';
    public $thirdSm='';

    // COLOR
    public $bgcolorF='gray-400';
    public $bgcolorS='white';
    public $bgcolorT='white';
    
    public function thirdImgClick(){
    $this->firstSm='';
    $this->secondSm='';
    $this->thirdSm='hidden';
    // 
    $this->first='hidden';
    $this->second='hidden';
    $this->third='';
    // 
    $this->bgcolorF='white';
    $this->bgcolorS='white';
    $this->bgcolorT='gray-400';
    }
    // ---------
    public function thirdImg(){
        $this->second='hidden';
        $this->first='hidden';
        $this->third='';
        // 
        $this->firstSm='';
        $this->secondSm='';
        $this->thirdSm='hidden';
        // 
        $this->bgcolorF='white';
        $this->bgcolorS='white';
        $this->bgcolorT='gray-400';
        
       }
    // ...........end third cliclick
    // .......... second click
    public function secondImgClick(){
    $this->firstSm='';
    $this->secondSm='hidden';
    $this->thirdSm='';
    // 
    $this->first='hidden';
    $this->second='';
    $this->third='hidden';
    // 
    $this->bgcolorF='white';
    $this->bgcolorS='gray-400';
    $this->bgcolorT='white';
    }
    // --------
    public function secondImg (){
        $this->first='hidden';
        $this->third='hidden';
        $this->second='';
        // 
        $this->firstSm='';
        $this->secondSm='hidden';
        $this->thirdSm='';
        // 
        $this->bgcolorF='white';
        $this->bgcolorS='gray-400';
        $this->bgcolorT='white';
       }
    // .......... End second click
    public function firstImgClick(){
    $this->firstSm='hidden';
    $this->secondSm='';
    $this->thirdSm='';
    // 
    $this->first='';
    $this->second='hidden';
    $this->third='hidden';
    // 
    $this->bgcolorF='gray-400';
    $this->bgcolorS='white';
    $this->bgcolorT='white';
    }
   // ---------
    public function firstImg(){
        $this->second='hidden';
        $this->third='hidden';
        $this->first='';
        // 
        $this->firstSm='hidden';
        $this->secondSm='';
        $this->thirdSm='';
        // 
        $this->bgcolorF='gray-400';
        $this->bgcolorS='white';
        $this->bgcolorT='white';
       }
   // ..........


   public function view($roomId){
    $this->viewRom=$roomId;
    $this->hideRooms='hidden';
    
   }

public function back(){
    $this->viewRom='';
    $this->hideRooms='block';
    $this->redirect('/dashboard');


}


    public function render()
    {
        $mychambre=Chambre::latest()->get();
        return view('livewire.myrooms',['chambre'=>$mychambre]);
    }
}
