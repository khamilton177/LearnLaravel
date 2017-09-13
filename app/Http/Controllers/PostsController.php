<?php

namespace App\Http\Controllers;

use App\Post;
use App\Task;
use Illuminate\Http\Request;

class PostsController extends Controller
{
  public function index()
  {
    $posts = Post::all();
    // Show tasks in sidebar
    $tasks = Task::all();
    return view('posts.index', compact('posts'), compact('tasks'));
  }

  public function show()
  {
    $tasks = Task::all();
    return view('posts.show', compact('tasks'));
  }

  public function create()
  {
    $tasks = Task::all();
    return view('posts.create', compact('tasks'));
  }

  public function store()
  {
    //diedump request and show all
    // dd(request()->all());

    //Create a new post
    // $post = new Post;

    //Set columns from passed params
    // $post->title = request('title');
    // $post->body = request('body');
    //
    // //Save post to DB
    // $post->save();
    $this->validate(request(), [
      'title' => 'required',
      'body' => 'required'
    ]);

    //This will do same as previous lines
    Post::create([
      'title' => request('title'),
      'body' => request('body')
    ]);

    //Redirect to root page
    return redirect('/');
  }
}
