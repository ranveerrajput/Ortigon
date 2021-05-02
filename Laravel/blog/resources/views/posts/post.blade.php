@extends('layouts.app')

@section('content')

<div class="container">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">Author:{{$post->user->name}}</h6>
      <p class="card-text">{{$post->desc}}</p>
    </div>
  </div>
  <hr>

  <form action="{{ route('comment.store',[$post->id])}}" method="POST">
    <div class="form-group">
      @csrf
      <label for="comment">Write a comment</label>
      <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Post Comment</button>
  </form>
  <hr>
  <h5>Comments:{{$post->comments->count()}}</h5>
  <ul class=list-group>
  @foreach($post->comments as $comment)
    <li class="list-group-item">{{$comment->body}}<br> <snmall>UserName : {{$comment->user->name}}</snmall>
  @endforeach
     
  </ul>




</div>


@endsection