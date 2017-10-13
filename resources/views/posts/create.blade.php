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
                  <label for="title" class="w3-large">Title:</label>
                  <input type="text" class="w3-input" id="body" name="title" placeholder="A great title...">
                </p>
                <p>
                  <label for="body" class="w3-large">Body:</label>
                  <textarea rows="5" id="body" name="body" placeholder="What's going on??" style="width: 100%; border:none;" class="w3-border-bottom w3-border-light-gray"></textarea>
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
