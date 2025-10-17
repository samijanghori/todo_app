<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class TaskManager extends Controller
{
    //
    function tasklist(){
        $tasks = Task::where('user_id',auth()->user()->id)->where('status',null)->paginate(3);
        return view('welcome' , compact('tasks'));
    }


    function addTask(){
        return view('tasks.add');
    }
    function addTaskPost(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'deadline' => 'required'
        ]);
        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->deadline = $request->deadline;
        $task->user_id = auth()->user()->id;
        if($task->save()){
            return redirect(route('home'))->with('success','added successfully');
        }
        return redirect(route('task.add'))->with('error','failed to add');
        }
        public function taskUpdateStatus($id){
            if( Task::where('id', $id)->update(['status' => 'completed'])){
                return redirect(route('home'))->with('success','task completed');
            }
            return redirect(route('home'))->with('error','errro occured while completing task');

        }
        public function taskDelete($id){
            if(Task::where('id' , $id)->delete()){
                return redirect(route('home'))->with('success','task deleted');
            }
            return redirect(route('home'))->with('error','some error occured while deleting the item');
        }
    }

