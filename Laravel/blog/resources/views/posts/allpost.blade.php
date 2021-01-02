@extends('layouts.app')


@section('content')
     
    <div class="container bg rounded pb-3" style="background-color: #ccebff;">
        <h2 class="display-4">Feed</h2>
        @foreach ($posts as $post)

            <div class="card mt-3">
                <div class="card-body">
                    <h1 class="shadow-lg p-3 mb-5 bg-primary rounded  ">{{$post->title}}</h1>
                    <p class="shadow-sm p-3 mb-5 card-text bg-warning rounded">{{$post->desc}}</p>
                </div>
            </div>





        @endforeach













    </div>


@endsection