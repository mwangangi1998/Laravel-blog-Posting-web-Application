<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ config('app.name') }}</title>

</head>
<body>
    @include('inc.navbar')
   <div class="container">
    @include('inc.messages')
   </div>
@yield('content')

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
@vite(['resources/js/app.js'])
</body>
</html>
