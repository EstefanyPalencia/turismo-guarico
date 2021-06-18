<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PackageBenefic extends Pivot
{
    protected $fillable = [
        'ilimited',
        'quantity',
    ];
}
