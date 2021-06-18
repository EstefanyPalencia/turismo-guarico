<?php

namespace App\Http\Resources\Destination;

use Illuminate\Http\Resources\Json\JsonResource;

class PriceResource extends JsonResource
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
            'package_id' => $this->package_id,
            'people' => $this->people,
            'amount' => $this->amount,
            'free' => $this->free,
            'created_at' => $this->created_at->format('d-m-Y')
        ];
    }
}
