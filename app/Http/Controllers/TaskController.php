<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskCollection;
use App\Http\Resources\TaskResource;
use App\Models\Assign;
use App\Models\Task;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;

class TaskController extends Controller
{
    public function getAllTask()
    {
        return TaskResource::collection(Task::all());
    }

    public function getById($id)
    {
        return new TaskResource(Task::find($id));
    }

    public function getByStatus($sts)
    {
        return new TaskCollection(TaskResource::collection(Task::where('status',$sts)->get()));
    }

    public function save()
    {
        DB::beginTransaction(); //Save transactionally
        $json_decode = json_decode(request()->getContent());
        $data = $json_decode->data;

        try{
            $task = Task::create([
                'task_name' => $data->task_name,
                'description' => $data->description,
                'client_name' => $data->client_name,
                'priority' => $data->priority,
                'user_id' => $data->user_id,
                'project_id' => $data->project_id,
                'due_date' => date('Y-m-d', strtotime($data->due_date))
            ]);


            $assigns = new Collection();
            foreach ($data->assign as $as) {
                $assign = Assign::create([
                    'task_id' => $task->id,
                    'user_id' => $as->id,
                ]);
                $assigns->merge($assigns,$assign);
            }

            $response = [
                'msg' => 'Data has been saved',
                "code"=> 201,
                'status' => 'created',
                'data' => [
                    'task' => $task,
                    'assign' => $assigns
                ],
            ];


            DB::commit();

            return response($response, 201);

        }catch(Exception $e){
            DB::rollback();

            $response = [
                'msg' => 'Data fail to save',
                "code"=> 201,
                'status' => 'created',
                'data' => $data,
                'error' => $e

            ];
            return response($response, 500);
        }

        // $data = request()->body;
        // DB::beginTransaction(); //Save transactionally

        // try{
        //     $task = Task::create([
        //         'task_name' => $data['task_name'],
        //         'description' => $data['description'],
        //         'client_name' => $data['client_name'],
        //         'priority' => $data['priority'],
        //         'created_by' => $data['created_by'],
        //         'project_id' => $data['project_id'],
        //         'due_date' => date('Y-m-d', strtotime($data['due_date']))
        //     ]);

        //     $assigns = new Collection();
        //     foreach ($data['assign'] as $as) {
        //         $assign = Assign::create([
        //             'task_id' => $task->id,
        //             'user_id' => $as['id'],
        //         ]);
        //         $assigns->merge($assigns,$assign);
        //     }

        //     DB::commit();

        //     $response = [
        //         'data' => [
        //             'task' => $task,
        //             'assign' => $assigns
        //         ],
        //         'msg' => 'Data has been saved',
        //         'status' => 201
        //     ];
        //     return response($response, 201);

        // }catch(Exception $e){
        //     DB::rollback();

        //     $response = [
        //         'data' => $data,
        //         'msg' => 'Error saving data',
        //         'status' => 500
        //     ];
        //     return response($response, 500);
        // }

    }

    public function getPaginate()
    {
        $task = TaskResource::collection(Task::paginate(2))->response()->getData(true);

        return response($task,200);

        // $datas = new Collection();
        // $tasks = DB::select('SELECT A.id, A.task_name, A.client_name, A.description, A.due_date, A.created_at, A.status, A.priority, (SELECT name FROM users D where D.id=A.created_by) AS created_by FROM tasks A');
        // foreach ($tasks as $task) {
        //     $assigns = DB::select('SELECT name FROM users WHERE id IN (SELECT user_id FROM assigns WHERE task_id = ?)',[$task->id]);

        //     $datas->push((object)[
        //         'task' => $task,
        //         'assign' => $assigns
        //     ]);
        // }

        // dd($datas);

        // return new TaskResource(Task::simplePaginate(5));
    }

    public function updateStatus()
    {
        $task = Task::find(request()->id);
        if ($task) {
            $task->status = request()->status;
            $task->save();

            $response = [
                'data' => [
                    'task' => $task
                ],
                'msg' => 'Data has been updated',
            ];
        }else{
            $response = [
                'data' => [
                    'task' => request()->all()
                ],
                'msg' => 'Task not found',
            ];
        }
        return response($response);

    }

    public function countTask()
    {
        $active = Task::where('status',1)->count();
        $needReview = Task::where('status',2)->count();
        $done = Task::where('status',3)->count();
        $cancel = Task::where('status',9)->count();

        return response([
            'data' => [
                'active' => $active,
                'needReview' => $needReview,
                'done' => $done,
                'cancel' => $cancel
            ]
        ]);
    }
}
