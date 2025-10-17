<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title" , "To Do App")</title>
    <link href="{{asset('assets\css\bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    @yield('style')
</head>
  
  <body class="d-flex flex-column h-100">
        @include('include.header')
        @yield('content')
        @include('include.footer')
    <script src="{{asset('assets\js\bootstrap.min.js')}}" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>