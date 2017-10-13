@extends('layouts.app')

@section('content')

  <div class="w3-container w3-margin">
      <div class="w3-row">
          <div class="w3-col l2 w3-container"></div>
          <div class="w3-col l8">
            <div class="w3-card form-bg">

              <h3 class="w3-padding">Add Post</h3>

              <form method="POST" action="/posts" class="w3-container">
                {{ csrf_field() }}
                <p>
                  <label for="title">Title:</label>
                  <input type="text" class="w3-input" id="body" name="title" placeholder="A great title...">
                </p>
                <p>
                  <label for="body">Body:</label>
                  <textarea rows="5" id="body" name="body" placeholder="What's going on??" style="width: 100%; border:none;" class="w3-border-bottom w3-border-light-gray"></textarea>
                </p>
                <input type="submit" name="Submit" value="Submit" class="w3-button w3-blue w3-round">
                <br /><br />

                {{-- Display errors --}}
                @include('partials.errors')
              </form>
            </div>
            </div>
            <div class="w3-col l2 w3-container"></div>
        </div>
  </div>

@endsection
