<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Product extends Resource
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
            "id" => $this->id,
            "productGroup" => $this->productGroup,
            "name" => $this->name,
            "nutritionalVolume" => $this->nutritionalVolume,
            "energy" => $this->energy,
            "fat" => $this->fat,
            "carbs" => $this->carbs,
            "protein" => $this->protein,
            "salt" => $this->salt,
            "ingredients" => $this->ingredients,
            "color" => $this->color,
            "bottleGroupImage" => $this->bottleGroupImage,
            "bottleHeroImage" => $this->bottleHeroImage,
            "fruitGroupImage" => $this->fruitGroupImage,
            "fruit1Image" => $this->fruit1Image,
            "fruit1Description" => $this->fruit1Description,
            "fruit2Image" => $this->fruit2Image,
            "fruit2Description" => $this->fruit2Description
        ];

        //return parent::toArray($request);
    }
}
