<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Enquiry extends Resource
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
        return[
            "name" => $this->name,
            "email" => $this->email,
            "message" => $this->message
        ];
    }
}
