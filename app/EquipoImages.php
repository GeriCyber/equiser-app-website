<?php

namespace App;

use App\Equipos;
use Illuminate\Database\Eloquent\Model;

class EquipoImages extends Model
{
    public function images() {
        return $this->belongsTo(Equipos::class);
    }

    public function getUrlAttribute() {
        return '/images/equipos/'.$this->image;
    }
}