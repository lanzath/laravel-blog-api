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
    {   // TO-DO: FIX TO WORK WITH PAGINATION
        return [
            "id" => $this->Id,
            "title" => $this->Title,
            "slug" => $this->Slug,
            "lastUpdateDate" => $this->LastUpdateDate,
            "category" => $this->Category->Name,
            "author" => $this->Author->Name
        ];
    }
}
