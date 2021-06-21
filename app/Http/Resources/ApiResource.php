<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //definimos entre llave los datos de la api que se le dara un formato
        return[
         'id' => $this->id,
         'tittle' => $this->tittle,
         'slug' => $this->slug,
         'content' => $this->content,
         'tittle' => $this->tittle,
    
        ];
    }
}
