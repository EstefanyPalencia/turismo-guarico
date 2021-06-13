<?php

namespace App\Models;

class Letter extends Model
{
    protected $fillable = [
        'letter'
    ];

    protected $with = [
        'words'
    ];

    /**
     * Relacion de palabras
     */
    public function words()
    {
        return $this->hasMany(
            Word::class,
            'letter_id'
        )->orderBy('word', 'asc');
    }

    #Assesors
    public function getLetterAttribute($value)
    {
        return mb_strtoupper($value);
    }
}
