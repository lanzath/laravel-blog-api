<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "data" => [
                "total" => $this->count(),
                "page" => $this->currentPage(),
                "pageSize" => $this->perPage(),
                "posts" =>  $this->items()
            ]
        ];
    }
}
