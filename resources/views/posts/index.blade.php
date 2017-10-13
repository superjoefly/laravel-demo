@extends('layouts.app')

@section('content')

  <div class="w3-container">
    @auth
      <p class="w3-text-green w3-padding">Have a great day {{auth()->user()->name}}!</p>
      @else
        <p class="w3-text-green w3-padding">Sign up to post and comment :-)</p>
    @endauth
    <h2 class="w3-padding">Recent Posts:</h2>
    @foreach ($posts as $post)
      @include('posts.post')
    @endforeach
  </div>

@endsection
