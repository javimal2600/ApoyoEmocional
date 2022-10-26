<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PsicologoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre'=> $this->nombre,
            'apellido' => $this->apellido,
            'fechanac'=> $this->fechanac,
            'cedula'=> $this->cedula,
            'telefono'=> $this->telefono,
            'correo'=> $this->correo,
        ];
    }
}
