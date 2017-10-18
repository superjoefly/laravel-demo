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

    <style media="screen">
        /*For fixed footer*/
        html {
            margin-bottom: 100px;
        }
    </style>

</head>
<body class="w3-light-grey">

    <div class="w3-content" style="max-width:100%;" id="app">
      @include('layouts.nav')

      <div class="w3-row w3-padding">
        {{-- Yield content to all pages --}}
        @yield('content')
      </div><br />

        {{-- Only show these for authorized users --}}
        @auth
          @include('partials.message')
          @include('layouts.archives')
          @include('layouts.tags')
        @endauth

        {{-- Show on all pages --}}
        @include('layouts.footer')
    </div>


    <!-- Scripts -->

    {{-- Script for naviagation --}}
    @include('partials.script')

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
