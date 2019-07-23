<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Event extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            "id" => $this->id,
            "name" => $this->name,
            "type" => $this->type,
            "title" => $this->title,
            "subTitle" => $this->subTitle,
            "tagline" => $this->tagline,
            "details" => $this->details,
            "date" => $this->date,
            "register" => $this->register,
            "video" => $this->video,
            "bgImage" => $this->bgImage,
            "logoImage" => $this->logoImage,
            "accentColor" => $this->accentColor
        ];

        //return parent::toArray($request);
    }
}
