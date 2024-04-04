<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function read(){
        $task = Task::all();
        return response()->json($task);
    }

    public function readById($id) {
        $task = Task::findOrFail($id);
        return response()->json($task);
    } 

    public function create(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'dataTask' => 'required',
        ]);

        $task = new Task();
        $task->setTitle($request->input('title'));
        $task->setDescription($request->input('description'));
        $task->setDataTask($request->input('dataTask'));
        $task->save();

        return response()->json($task);
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'dataTask' => 'required',
        ]);

        $task = Task::findOrFail($id);
        $task->setTitle($request->input('title'));
        $task->setDescription($request->input('description'));
        $task->setDataTask($request->input('dataTask'));
        $task->save();

        return response()->json($task);
    }

    public function delete($id){
        $task = Task::findOrFail($id);
        $task->delete();
        
        return response()->json(null, 204);
    }

}
