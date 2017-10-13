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
<body>


    <div id="app">
        @include('layouts.nav')

        <div class="w3-container">
          <h1 class="w3-center">Welcome To My Blog!</h1>
        </div>

        @yield('content')

        @include('partials.message')
    </div>


    <!-- Scripts -->

    @include('partials.script')

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
