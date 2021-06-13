<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\Glosary\LetterResource;
use App\Models\Letter;
use Illuminate\Http\Request;

class GlosaryController extends Controller
{
    public function index()
    {
        $letters = Letter::has('words')->orderBy('letter', 'asc')->paginate();
        return LetterResource::collection($letters);
    }
}
