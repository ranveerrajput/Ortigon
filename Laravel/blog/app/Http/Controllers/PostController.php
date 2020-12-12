<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class PostController extends Controller
{

      public function index()
      {
         return view('posts.index');
      }

      public function store(Request $request)
      {
         $post = new Post();
         $post->title = $request->Title; 
         $post->desc  = $request->Description;
         $post->user_id  =auth()->user()->id;
         $post->save();
         return redirect('/post/myposts');
         
      }

      public function myposts()
      {
         # code...
         $user_id = auth()->user()->id;
         $posts = Post::where('user_id',$user_id)->orderBy('id','desc')->get();
         return view('posts.myposts',compact('posts'));
      }


}
