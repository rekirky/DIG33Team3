<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ProductGroup extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //Set the information that should be returned when a request is made
        return [
            "id" => $this->id,
            "name" => $this->name,
            "accentColor" => $this->accentColor,
            "tagLine" => $this->tagLine,
        ];

        //return parent::toArray($request);
    }
}
