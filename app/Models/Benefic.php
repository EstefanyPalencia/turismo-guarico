<?php

namespace App\Models;

class Benefic extends Model
{
    protected $fillable = [
        'name',
        'icon'
    ];

    /**
     * Packages Relationship
     */
    public function packages()
    {
        return $this->belongsToMany(
            Package::class,
            'package_benefics'
        );
    }

    #Methods
    public static function findByName($name)
    {
        return static::where('name', $name)->firstOrFail();
    }
}
