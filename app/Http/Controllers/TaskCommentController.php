<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskCommentCollection;
use App\Http\Resources\TaskCommentResource;
use App\Models\File;
use App\Models\TaskComment;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TaskCommentController extends Controller
{
    public function findByTaskId($id)
    {
        return new TaskCommentCollection(TaskCommentResource::collection(TaskComment::where('task_id',$id)->get()));
    }

    public function save()
    {

        $file = request()->file;
        $mytime = Carbon::now();

        DB::beginTransaction(); //Save transactionally

        try{
            $taskComment = TaskComment::create([
                'task_id' => request()->task_id,
                'comment' => request()->comment,
                'created_by' => request()->created_by
            ]);

            if($file){
                // Save to disk
                Storage::putFile('file', $file);
                // Rename the Name
                $path = 'file/'.$taskComment->id.'-'.$mytime->toDateString().'-'.$file->getClientOriginalName();
                Storage::move('file/'.$file->hashName(), $path);

                $file = File::create([
                    'task_id' => request()->task_id,
                    'comment_id' => $taskComment->id,
                    'file_name' => $file->getClientOriginalName(),
                    'path' => $path,
                    'created_by' => request()->created_by
                ]);
            }

            $response = [
                'data' => [
                    'taskComment' => $taskComment
                ],
                'msg' => 'Data has been saved',
                'status' => 201
            ];

            DB::commit();
            return response($response,201);
        }catch(Exception $e){
            DB::rollback();
            $response = [
                'data' => [
                    'taskComment' => request()->all(),
                    'error' => $e
                ],
                'msg' => 'Data failed',
                'status' => 500
            ];
            return response($response,500);
        }



    }

    public function getFile($id)
    {
        $file = File::find($id);
        $path = $file->path;
        return response()->download($path);
    }
}
