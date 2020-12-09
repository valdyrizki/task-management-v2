<?php

namespace App\Http\Resources;

use App\Models\File;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskCommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $file =  File::select('id','file_name','path')
                    ->where('comment_id',$this->id)
                    ->get();
        return [
            'id' => $this->id,
            'task_id' => $this->task_id,
            'comment' => $this->comment,
            'created_by' => User::select('name')->find($this->created_by)->name,
            'created_at' => $this->created_at->diffForHumans(),
            'file' => $file
        ];
    }
}


