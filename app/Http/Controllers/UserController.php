<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $request)
    {
        $user= User::where('email', $request->email)->first();
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }

            $token = $user->createToken('my-app-token')->plainTextToken;

            $response = [
                'msg' => 'User login successfully',
                'code' => '200',
                'status' => 'success',
                'data' => new UserResource($user),
                'meta' => [
                    'token' => $token,
                ]
            ];

            return response()->json($response,200);
    }

    function register(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'name' => 'required|min:3',
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => $request->level,
        ]);


        $response = [
            'code' => '201',
            'status' => 'created',
            'msg' => 'User created successfully',
            'data' => new UserResource($user),
        ];

        return response()->json($response,200);
    }

    public function getAllUser()
    {
        return new UserCollection(UserResource::collection(User::all()));
    }

    public function getById($id)
    {
        return new UserResource(User::find($id));
    }

    public function getName()
    {
        return [
            'data' =>  User::select('id','name')->get()
        ];
    }
}
