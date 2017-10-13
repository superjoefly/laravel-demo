<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="w3-light-grey">

  <div class="w3-content" style="max-width:100%;" id="app">
    @include('layouts.nav')
    @include('layouts.header')
    @include('partials.message')

    {{-- Grid --}}
    <div class="w3-row w3-padding">

      {{-- Yielded content is dyanamic and will change from view to view --}}
      @yield('content')

    </div><br />
    @include('layouts.archives')
    @include('layouts.tags')
    @include('layouts.footer')
    {{-- End Grid --}}
  </div>


    <!-- Scripts -->

    @include('partials.script')

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
