<div class="w3-container w3-border-bottom">

  <h3>
    <a href="/posts/{{$post->id}}" class="w3-text-teal w3-hover-text-grey">{{$post->title}}</a>
  </h3>

  <p>{{$post->body}}</p>

  {{-- Only show 'edit' for signed in user's posts --}}
  @if (Auth::id() == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="w3-left w3-tiny">Edit</a>
  @endif

  <span class="w3-right">
    <span class="w3-text-teal">{{$post->user->name}}</span> on
    {{ $post->created_at->diffForHumans() }}
  </span>
  <br />
  {{-- <hr /> --}}
</div>
