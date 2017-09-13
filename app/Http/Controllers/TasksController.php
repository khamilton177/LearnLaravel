<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
  public function about() {
    $tasks=[
      "Go to the store.",
      "Finish my screencast",
      "Clean the house."
    ];
    return view('about', compact('tasks'));
  }

  public function index()
  {
    // $tasks=[
    //   "Go to the store.",
    //   "Finish my screencast",
    //   "Clean the house."
    // ];
    // $tasks = DB::table('tasks')->get();
    $tasks = Task::all();
    // return $tasks;
    return view('tasks.index', compact('tasks'));
  }

  public function show(Task $task)
  {
    // $task = DB::table('tasks')->find($id);
    // $task = Task::find($id); ////don't ned to use because we are suing model binding
    // dd($task);
    return view('tasks.show', compact('task'));
  }
}
