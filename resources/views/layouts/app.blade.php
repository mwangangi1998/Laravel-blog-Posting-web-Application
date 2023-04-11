<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
@vite(['resources/css/app.css'])
</head>
<body>
    <div class="loader">

    </div>
    <div id="app">
      @include('inc.navbar')
<div class="container">
    @include('inc.messages')
</div>
        <main class="py-4">
            @yield('content')
        </main>
       <div class="cont" style="padding-top:50px ">
        @include('inc.footer')
       </div>
    </div>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    @vite(['resources/js/app.js'])

    <script>
        window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");

    // loader.classList.add("loader--hidden");
loader.classList.add('loader--hidden');
    loader.addEventListener("transitionend", () => {
      document.body.removeChild(loader);
    });
  });
    </script>
</body>
</html>
