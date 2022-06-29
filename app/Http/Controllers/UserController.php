<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //get User
    public function getUsers(){
        return response()->json(User::all(),200);
    }

    //get UserById
    public function getUserById($id){
        $user = User::find($id);

        if(is_null($user))
        {
            return response()->json(['message' => 'Usuário não encontrado'],404);
        }
        return response()->json(User::find($id),200);
    }

    //add User 
    public function addUser(Request $request){
        $user = User::create($request->all());

        return response($user,201);
    }

    //update User
    public function updateUser(Request $request, $id){
        $user = User::find($id);

        if(is_null($user))
        {
            return response()->json(['message' => 'Usuário não encontrado'],404);
        }

        $user->update($request->all());
        return response($user,200);
    }

    //delete User
    public function deleteUser(Request $request, $id){
        $user = User::find($id);

        if(is_null($user))
        {
            return response()->json(['message' => 'Usuário não encontrado'],404);
        }

        $user->delete();
        return response(null,204);
    }
}
