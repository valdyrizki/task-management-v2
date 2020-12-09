<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TaskComment;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['task_name','description','client_name','due_date','priority','user_id','project_id'];

    public function taskComments()
    {
        return $this->hasMany(TaskComment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

}
