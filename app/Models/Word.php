<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Word extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'word',
        'body',
        'letter_id'
    ];

    #Assesors
    public function getWordAttribute($value)
    {
        return mb_strtoupper($value);
    }
    public function getBodyAttribute($value)
    {
        return ucfirst($value);
    }
}
