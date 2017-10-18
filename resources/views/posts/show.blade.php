@extends('layouts.app')

@section('content')
  <div class="w3-container w3-margin w3-white">

    {{-- Only show 'edit' for signed in user's posts --}}
    @if (Auth::id() == $post->user_id)
      <a href="/posts/{{$post->id}}/edit" class="w3-right w3-text-teal w3-hover-text-gray">Edit</a>
    @endif
    
    <h3 class="w3-text-teal">{{ $post->title }}</h3>

    <p>{{ $post->body }}</p>


    {{-- Tags --}}
    <span>
      @if (count($post->tags))
          @foreach ($post->tags as $tag)
              <a href="/posts/tags/{{$tag->name}}"
                class="w3-tag w3-light-grey w3-margin-bottom w3-hover-teal"
                style="text-decoration: none;">
                {{$tag->name}}
              </a>
          @endforeach
      @endif
    </span>

    <span class="w3-right">
      <span class="w3-text-teal">{{$post->user->name}}</span> on
      {{ $post->created_at->toDayDateTimeString() }}
    </span>
  </div>

  {{-- Show Comments --}}
  <div class="w3-container">
    <h4>Comments:</h4>
    @if (count($post->comments) >= 1)
      @foreach ($post->comments as $comment)
        <div class="w3-container w3-border-bottom w3-border-white">
          <p>{{ $comment->body }}</p>
          <span class="w3-right">
            <span class="w3-text-teal">{{$comment->user->name}}</span> on
            {{ $comment->created_at->diffForHumans() }}
          </span>
        </div>
      @endforeach
    @else
      <p>No comments available...</p>
    @endif
  </div>

  {{-- Add Comments --}}
  @if (Auth::check())
    <div class="w3-margin">
      <h4>Add a comment:</h4>
      <form method="POST" action="/posts/{{ $post->id }}/comments">
        {{ csrf_field() }}
        <textarea rows="5" name="body" class="w3-border w3-white" style="width: 100%; border: none !important;" placeholder="Enter a comment..." required></textarea>
        <br /><br />
        <button class="w3-btn w3-blue-grey w3-right" value="Publish">Submit</button>
        <br /><br />
        @include('partials.errors')
      </form>
    </div>
    @else
      <div class="w3-panel w3-pale-yellow">
        <p>You must be logged in to comment...</p>
      </div>
  @endif
@endsection
