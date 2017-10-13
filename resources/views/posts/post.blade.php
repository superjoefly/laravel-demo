<div class="w3-container">
  <h3>
    <a href="/posts/{{$post->id}}" class="w3-text-blue w3-hover-text-grey">{{$post->title}}</a>
  </h3>
  <p>{{$post->body}}</p>
  <i>{{$post->created_at->toDayDateTimeString()}}</i>

  {{-- Only show 'edit' for signed in user's posts --}}
  @if (Auth::id() == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" style="float: right">Edit</a>
  @endif
  <hr />
</div>
