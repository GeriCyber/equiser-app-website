<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
     protected $fillable = ['name', 'project', 'equipos'];

     public function images() {
        return $this->hasMany(ObraImages::class);
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