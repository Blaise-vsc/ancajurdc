<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = 'commande';
    protected $fillable=['nom','post_nom','emai','phone','pays_ou_region','ville','code', 'conf_code','date_d_arrivée','heure_d_arrivée','date_de_départ','heure_de_départ','nombre_d_adulte','nombre_d_enfant','demande'];
}
