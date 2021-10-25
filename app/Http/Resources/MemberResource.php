<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MemberResource extends JsonResource
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
            'fullname' => $this->fullname,
            'birthdate' => $this->birthdate,
            'email' => $this->email,
            'contact_number' => $this->contact_number,
            'date_started' => $this->date_started,
        ];
    }
}
