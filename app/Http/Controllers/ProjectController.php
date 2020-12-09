<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectCollection;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Exception;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function getAllProject()
    {
        // return new TaskCollection(TaskResource::collection(Task::all()));
        $task = ProjectResource::collection(Project::paginate(5));

        return response()->json($task);
    }

    public function getName()
    {
        return [
            'data' =>  Project::select('id','project_name')->get()
        ];
    }

    public function save()
    {
        $json_decode = json_decode(request()->getContent());
        $data = $json_decode->data;

            $project = Project::create([
                'project_name' => $data->project_name,
                'description' => $data->description,
                'client_name' => $data->client_name,
                'cost' => $data->cost,
                'user_id' => $data->user_id,
                'due_date' => date('Y-m-d', strtotime($data->due_date))
            ]);

            $response = [
                'data' => [
                    'project' => $project
                ],
                'msg' => 'Data has been saved',
                'status' => 201
            ];
            return response($response, 201);

        // $data = request()->body;

        //     $project = Project::create([
        //         'project_name' => $data['project_name'],
        //         'description' => $data['description'],
        //         'client_name' => $data['client_name'],
        //         'cost' => $data['cost'],
        //         'created_by' => $data['created_by'],
        //         'due_date' => date('Y-m-d', strtotime($data['due_date']))
        //     ]);

        //     $response = [
        //         'data' => [
        //             'project' => $project
        //         ],
        //         'msg' => 'Data has been saved',
        //         'status' => 201
        //     ];
        //     return response($response, 201);


    }

    public function getAll()
    {
        return new ProjectCollection(ProjectResource::collection(Project::all()));
    }

    public function getPaginate()
    {
        return Project::simplePaginate(5);
    }
}
