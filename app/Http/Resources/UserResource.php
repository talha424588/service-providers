<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\RolesCollection;

class UserResource extends JsonResource
{
    public $preserveKeys = true;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            // 'roles' => RoleResource::collection($this->roles), when user have more then 1 role user colelction 
            'roles' => new  RoleResource($this->role),// else use new ClassResource to access directly roles detail
        ];
    }
    
}
