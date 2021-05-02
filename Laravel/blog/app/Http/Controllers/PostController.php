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

      public function allpost()
      {
         $user_id = auth()->user()->id;
         $posts = Post::where('user_id','!=',$user_id)->orderBy('id','desc')->get();
         return view('posts.allpost',compact('posts'));
      }

      public function delete($post_id)
      {
        // dd($post_id);
         $user_id = auth()->user()->id;
         $post = Post::find($post_id);
         if($post->user_id == $user_id){

            $post->delete();

         }
         return redirect('/post/myposts');
        
      }

      public function edit($post_id)
      { 
         $user_id = auth()->user()->id;
         $post = Post::find($post_id);
         if($post->user_id == $user_id){

            return view('posts.edit',compact('post'));

         }
         else{
               
            return redirect('/post/myposts');

         }
         
      }

      public function update(Request $request,$post_id)
      {
         $user_id = auth()->user()->id;
         $post = Post::find($post_id);
         if($post->user_id == $user_id){

            $post->title=$request->Title;
            $post->desc=$request->Description;
            $post->save();


         }
         return redirect('/post/myposts');
         
      }

      public function get($id)
      {
         # code...
         $post = Post::findOrFail($id);
         $post->comments;
         return view('posts.post',compact('post'));
      }
     

}
