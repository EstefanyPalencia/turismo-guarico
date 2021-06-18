<?php

namespace App\Models;

class Destination extends Model
{
    protected $fillable = [
        'slug',
        'name',
        'body',
        'image_url'
    ];

    /**
     * Packages Relationship
     */
    public function packages()
    {
        return $this->hasMany(
            Package::class
        );
    }

    /**
     * Prices Relationship
     */
    public function prices()
    {
        return $this->hasManyThrough(
            Price::class,
            Package::class
        );
    }
}
