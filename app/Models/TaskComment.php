<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskComment extends Model
{
    use HasFactory;
    protected $fillable = ['task_id','comment','status','created_by'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
