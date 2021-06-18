<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\Destination\DestinationResource;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::with(['prices' => function ($query) {
            return $query->orderBy('people', 'desc');
        }])->get();

        return DestinationResource::collection($destinations);
    }
}
