<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class Sidebar extends Controller
{
  // Show tasks in sidebar
  $tasks = Task::all();
  return compact('tasks');
}
