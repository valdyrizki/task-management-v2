<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'project_name' => $this->project_name,
            'client_name' => $this->client_name,
            'description' => $this->description,
            'due_date' => $this->due_date,
            'created_at' => $this->created_at->diffForHumans(),
            'status' => getStatusName($this->status),
            'cost' => $this->cost,
            'user' => new UserResource($this->user)
        ];
    }
}
