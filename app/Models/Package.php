<?php

namespace App\Models;

class Package extends Model
{
    protected $fillable = [
        'name',
        'check_in',
        'check_out',
        'active',
        'destination_id',
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    protected $dates = [
        'check_in',
        'check_out',
    ];

    /**
     * Destination Relationship
     */
    public function destination()
    {
        return $this->belongsTo(
            Destination::class
        );
    }

    /**
     * Benefics Relationship
     */
    public function benefics()
    {
        return $this->belongsToMany(
            Benefic::class,
            'package_benefics'
        )->withPivot(
            'ilimited',
            'quantity'
        )->withTimestamps();
    }

    /**
     * Price Relationship
     */
    public function price()
    {
        return $this->hasMany(
            Price::class
        );
    }
}
