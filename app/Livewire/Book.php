<?php

namespace App\Livewire;
use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\Commande;
use App\Models\Chambre;


class Book extends Component
{

    public $teste='';
    
    
    public function cancel(){
    $this->redirect('/dashboard');
    }
  
 
#[Rule("required|max:40")]
public $nom;

public $post_nom;
#[Rule("required")]
public $email;
#[Rule("required|min:10|max:29")]
public $phone;
#[Rule("required|max:50")]
public $pays_ou_region;
#[Rule("required|max:150")]
public $adesse;
#[Rule("required|max:150")]
public $ville;
#[Rule("required|max:8")]
public $code;
#[Rule("required|max:8")]
public $conf_code;
#[Rule("required")]
public $date_d_arrivée;
#[Rule("required")]
public $heure_d_arrivée;
#[Rule("required")]
public $date_de_départ;
#[Rule("required")]
public $heure_de_départ;
#[Rule("required|max:4")]
public $nombre_d_adulte;
#[Rule("required|max:4")]
public $nombre_d_enfant;
#[Rule("required|max:225")]
public $demande;
public $newconf_code;


public function resetd(){

     $this->reset('demande','nombre_d_enfant','nombre_d_adulte','heure_de_départ','heure_d_arrivée','date_de_départ','date_d_arrivée','conf_code','code','ville','adesse','pays_ou_region','phone','email','nom','post_nom');
     $this->reset();
    }  
  


    public function create(){
        
        $valideted=$this->validate();
        Commande::create($valideted);
        $this->reset();
        session()->flash('success','creted');
        $this->redirect('/sent');

    }
    


    public function render()
    {
        $book=Chambre::latest()->get();
        return view('livewire.book',['chambre'=>$book]);
    }
}
