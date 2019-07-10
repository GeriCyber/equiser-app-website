<?php

namespace App;

use App\Obra;
use Illuminate\Database\Eloquent\Model;

class ObraImages extends Model
{
    public function images() {
        return $this->belongsTo(Obra::class);
    }

    public function getUrlAttribute() {
        return '/images/obras/'.$this->image;
    }
}