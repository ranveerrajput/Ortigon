@extends('layouts.app')


@section('content')
     
    <div class="container">
        <h2>My Posts</h2>
        @foreach ($posts as $post)

            <div class="card mt-3">
                <div class="card-body">
                    <h4 class="card-title">{{$post->title}}</h4>
                    <p class="card-text">{{$post->desc}}</p>
                </div>
            </div>





        @endforeach













    </div>


@endsection