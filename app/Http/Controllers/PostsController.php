<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
  public function index()
  {
      return view('posts.index');
  }

  public function show()
  {
      return view('posts.show');
  }

  public function create()
  {
      return view('posts.create');
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
