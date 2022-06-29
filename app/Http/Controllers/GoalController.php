<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;

class GoalController extends Controller
{
    //get Goal
    public function getGoals(){
        return response()->json(Goal::all(),200);
    }

    //get GoalById
    public function getGoalById($id){
        $goal = Goal::find($id);

        if(is_null($goal))
        {
            return response()->json(['message' => 'Meta não encontrada'],404);
        }
        return response()->json(Goal::find($id),200);
    }

    //add Goal
    public function addGoal(Request $request){
        $goal = Goal::create($request->all());

        return response($goal,201);
    }

    //update Goal
    public function updateGoal(Request $request, $id){
        $goal = Goal::find($id);

        if(is_null($goal))
        {
            return response()->json(['message' => 'Meta não encontrada'],404);
        }

        $goal->update($request->all());
        return response($goal,200);
    }

    //delete Goal
    public function deleteGoal(Request $request, $id){
        $goal = Goal::find($id);

        if(is_null($goal))
        {
            return response()->json(['message' => 'Meta não encontrada'],404);
        }

        $goal->delete();
        return response(null,204);
    }
}
