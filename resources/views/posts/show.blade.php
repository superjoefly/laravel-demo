@extends('layouts.app')


@section('content')
  <div class="w3-container">
    <h3>{{$post->title}}</h3>
    <p>{{$post->body}}</p>
    <i>{{$post->created_at->diffForHumans()}}</i>

    {{-- Only show 'edit' for signed in user's posts --}}
    @if (Auth::id() == $post->user_id)
      <a href="/posts/{{$post->id}}/edit" style="float: right">Edit</a>
    @endif
  </div>
  <hr />
@endsection
