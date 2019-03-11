<?php

namespace GTImports\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShowroomResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'miles' => $this->miles,
            'kilometres' => $this->kilometres,
            'model' => $this->model,
            'chassis' => $this->chassis,
            'manufacture' => $this->manufacture,
            'color' => $this->color,
            'fueltype' => $this->fueltype,
            'transmission' => $this->transmission,
            'exteriorfeature' => $this->exteriorfeature,
            'interiorfeature' => $this->interiorfeature,
            'safetyfeature' => $this->safetyfeature,
            'audiofeature' => $this->audiofeature,
            'created_at' => $this->created_at,
        ];
    }
}
