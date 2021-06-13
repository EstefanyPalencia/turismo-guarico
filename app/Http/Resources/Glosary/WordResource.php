<?php

namespace App\Http\Resources\Glosary;

use Illuminate\Http\Resources\Json\JsonResource;

class WordResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'word' => $this->word,
            'body' => $this->body,
            'created_at' => $this->created_at->format('d-m-Y')
        ];
    }
}
