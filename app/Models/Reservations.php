<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $table = 'réservations';
    protected $fillable=['phone','enregistrement','nuit','verifier','adultes','enfants'];
}
