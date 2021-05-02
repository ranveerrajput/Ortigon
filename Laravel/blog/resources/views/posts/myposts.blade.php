@extends('layouts.app')


@section('content')
     
    <div class="container bg rounded pb-3" style="background-color: #ccebff;">
        <h2 class="display-4">My Posts</h2>
        @foreach ($posts as $post)

            <div class="card mt-3">
                <div class="card-body">
                <a href="{{ route('post.single',[$post->id])}}" style="color:green"><h1 class="shadow-lg p-3 mb-5 bg-primary rounded  ">{{$post->title}}</h1></a>
                    
                    <p class="shadow-sm p-3 mb-5 card-text bg-warning rounded">{{$post->desc}}</p>
                    <a href="{{route('post.edit',[$post->id])}}"><button type="button" class="btn btn-info">Edit</button></a>
                    <a href="{{route('post.delete',[$post->id])}}"><button type="button" class="btn btn-danger">Delete</button></a>
                    
                </div>
               
            </div>





        @endforeach













    </div>


@endsection