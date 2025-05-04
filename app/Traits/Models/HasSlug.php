<?php

namespace App\Traits\Models;


trait HasSlug
{
    protected static function bootHasSlug() {
        static::creating(function (Model $item){
            $item->slug = $item->slug ?? str($item->title)->slug();
        })
    }
}
