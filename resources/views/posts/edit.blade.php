@extends('layouts.app')

{{-- EDIT POST FORM --}}

@section('content')
  <div class="w3-container w3-margin">
      <div class="w3-row">
        <div class="w3-col l2 w3-container"></div>
          <div class="w3-col l8">
            <div class="w3-card form-bg">

              {{-- Delete Post --}}
              <form method="POST" action="/posts/{{$post->id}}">
                {{-- Fake the method field for DELETE --}}
                {{method_field('DELETE')}}

                {{ csrf_field() }}
                <button type="submit" class="w3-button w3-hover-none w3-hover-text-red w3-right">Delete</button>
              </form>

              <h3 class="w3-padding">Edit Post: {{ $post->title }}</h3>

                {{-- Set method to POST --}}
                <form method="POST" action="/posts/{{$post->id}}" class="w3-container">

                  {{-- Fake the method field for PATCH --}}
                  {!! method_field('PATCH') !!}

                  {{ csrf_field() }}
                  <p>
                    <label for="title" class="w3-large">Title:</label>

                    {{-- Use Old Data for Input Fields --}}
                    <input type="text" class="w3-input" id="body" name="title" value="{{old('title', $post->title)}}">
                  </p>
                  <p>
                    <label for="body" class="w3-large">Body:</label>

                    {{-- Use Old Data for Input Fields --}}
                    <textarea rows="5" id="body" name="body" style="width: 100%; border:none;" class="w3-border-bottom w3-border-light-gray">{{old('body', $post->body)}}</textarea>
                  </p>

                  <div>
                    <h3>Tags</h3>

                    <p>
                      <input class="w3-check w3-margin" type="checkbox" id="javascript" name="tags[]" value="1" />
                      <label>javascript</label>

                      <input class="w3-check w3-margin" type="checkbox" id="vuejs" name="tags[]" value="2" />
                      <label>vuejs</label>

                      <input class="w3-check w3-margin" type="checkbox" id="php" name="tags[]" value="3" />
                      <label>php</label>

                      <input class="w3-check w3-margin" type="checkbox" id="laravel" name="tags[]" value="4" />
                      <label>laravel</label>

                      <input class="w3-check w3-margin" type="checkbox" id="mysql" name="tags[]" value="5" />
                      <label>mysql</label>
                    </p>
                  </div>

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
