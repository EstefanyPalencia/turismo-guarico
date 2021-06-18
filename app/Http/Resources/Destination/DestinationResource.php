<?php

namespace App\Http\Resources\Destination;

use Illuminate\Http\Resources\Json\JsonResource;

class DestinationResource extends JsonResource
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
            'slug' => $this->slug,
            'name' => $this->name,
            'body' => $this->body,
            'image_url' => $this->image_url,
            'prices' => PriceResource::collection($this->whenLoaded('prices'))
        ];
    }
}
