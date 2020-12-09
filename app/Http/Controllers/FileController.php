<?php

namespace App\Http\Controllers;

use App\Models\File;

class FileController extends Controller
{
    public function findByTaskId($task_id)
    {
        $response = [
            'data' => File::select('id','file_name','path')->where('task_id',$task_id)->get()
            ,
            'msg' => 'Succesfully loaded',
            'status' => 200
        ];
        return response($response,200);
    }

    public function download($id)
    {
        $file = File::select('path','file_name')->find($id);
        $header = [
            'Content-Type' => 'application/*',
        ];

        return response()->download($file->path, $file->file_name, $header);
    }
}
