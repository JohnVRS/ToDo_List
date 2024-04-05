<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function showCreateForm() {
        return view('create');
    }
    
    public function read(){
        $task = Task::all();
        return response()->json($task);
    }

    public function readById($id) {
        $task = Task::findOrFail($id);
        return response()->json($task);
    } 

    public function create(Request $request) {
        
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'dataTask' => 'required',
        ]);
    
       
        $task = new Task();
        $task->title = $validatedData['title'];
        $task->description = $validatedData['description'];
        $task->dataTask = $validatedData['dataTask'];
        $task->save();
    
        // Retornar uma resposta JSON com a nova tarefa
        return response()->json($task);
    }

    /*
    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'dataTask' => 'required',
        ]);
    
        $task = Task::findOrFail($id);
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->dataTask = $request->input('dataTask');
        $task->save();
    
        return response()->json($task);
    }
    */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'dataTask' => 'required',
        ]);

        $task = Task::findOrFail($id);
        $task->update($validatedData);

        return response()->json($task);
    }
    

    public function delete($id){
        $task = Task::findOrFail($id);
        $task->delete();
        
        return response()->json(null, 204);
    }

}
