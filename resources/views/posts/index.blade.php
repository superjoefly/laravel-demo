@extends('layouts.app')

@section('content')
  <!-- Introduction menu -->
  <div class="w3-col" style="margin: auto;">

    {{-- <!-- About Card -->
    <div class="w3-margin w3-margin-top">
      <div class="w3-container w3-padding w3-white">
        <h4><b>SuperJoeFly - Dev</b></h4>
        <p>Hi there! and thanks for visiting my blog! I'm an aspiring web-developer and I have a passion for technology, computers and helping others achieve success. I love working with people and making dreams come to life on the web. Feel free to post whatever is on your mind, comment on others' posts and have a good time. My world is your world!</p>
      </div>
    </div><hr> --}}

    @auth
      <p class="w3-text-teal w3-padding">Have a great day {{auth()->user()->name}}!</p>
      @else
        <p class="w3-text-teal w3-padding">Sign up to post and comment :-)</p>
    @endauth

    <div class="w3-container w3-padding">
      <h4>Recent Posts:</h4>
      <!-- Posts -->
      <div>
        <ul class="w3-ul w3-white w3-padding">
          {{-- Loop through posts and display each post --}}
          @foreach ($posts as $post)
            @include('posts.post')
          @endforeach
        </ul>
      </div>
    </div>
  <!-- END Introduction Menu -->
  </div>
@endsection
