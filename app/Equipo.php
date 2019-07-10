<?php

namespace App;

use App\EquipoImages;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = ['name', 'description'];

    public function images() {
        return $this->hasMany(EquipoImages::class);
    }

    public function getFeaturedImageUrlAttribute() {
        $featuredImage = $this->images()->where('featured', true)->first();
        if (!$featuredImage) {
            $featuredImage = $this->images()->first();
        }
        if ($featuredImage) {
            return $featuredImage->url;
        }
        //default
        return '/images/default.png';
    }
}