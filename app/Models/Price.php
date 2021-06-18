<?php

namespace App\Models;

class Price extends Model
{
    protected $fillable = [
        'package_id',
        'people',
        'amount',
        'free',
    ];

    protected $casts = [
        'free' => 'boolean'
    ];

    /**
     * Package Relationship
     */
    public function package()
    {
        return $this->belongsTo(
            Package::class
        );
    }
}
