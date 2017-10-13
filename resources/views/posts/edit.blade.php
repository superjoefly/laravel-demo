@extends('layouts.app')

{{-- EDIT POST FORM --}}

@section('content')
  <div class="w3-container w3-margin">
      <div class="w3-row">
        <div class="w3-col l2 w3-container"></div>
          <div class="w3-col l8">
            <div class="w3-card form-bg">
            <h3 class="w3-padding">Edit Post: {{ $post->title }}</h3>
              {{-- Set method to POST --}}
              <form method="POST" action="/posts/{{$post->id}}" class="w3-container">

                {{-- Fake the method field for PATCH --}}
                {!! method_field('PATCH') !!}

                {{ csrf_field() }}
                <p>
                  <label for="title">Title:</label>

                  {{-- Use Old Data for Input Fields --}}
                  <input type="text" class="w3-input" id="body" name="title" value="{{old('title', $post->title)}}">
                </p>
                <p>
                  <label for="body">Body:</label>

                  {{-- Use Old Data for Input Fields --}}
                  <textarea rows="5" id="body" name="body" style="width: 100%; border:none;" class="w3-border-bottom w3-border-light-gray">{{old('body', $post->body)}}</textarea>
                </p>
                <input type="submit" name="Submit" value="Update" class="w3-button w3-blue w3-round">
                <br /><br />

                {{-- Display errors --}}
                {{-- {{ var_dump($errors) }} --}}
                @include('partials.errors')
              </form>
            </div>
            </div>
        </div>
  </div>
@endsection
