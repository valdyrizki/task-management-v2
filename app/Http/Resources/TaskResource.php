<?php

namespace App\Http\Resources;

use App\Models\Assign;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class TaskResource extends JsonResource
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
                'task_name' => $this->task_name,
                'client_name' => $this->client_name,
                'description' => $this->description,
                'due_date' => $this->due_date,
                'created_at' => $this->created_at->diffForHumans(),
                'status' => getStatusName($this->status),
                'priority' => getPriorityName($this->priority),
                'user' => $this->user->only('id','name'),
                'comments' => $this->taskComments,
                'project' => $this->project->only('id','project_name'),
        ];
    }
}
