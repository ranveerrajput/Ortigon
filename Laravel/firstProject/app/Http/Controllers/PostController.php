<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        return view('post.form'); 
    }

    public function store(Request $request)
    {   
        $title = $request->Title;
        $desc = $request->Description;
       
        //now insrting the data into the database

        $result =DB::insert("insert into posts (title,description) values ('$title','$desc')");
        //var_dump($result);

       
    }
    public function get()
    {
       $posts=DB::select("select * from posts");
       return view('post.show',compact('posts'));
    }
}
