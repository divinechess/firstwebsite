<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>John's first laravel website</title>
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">--}}



{{--    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">--}}
{{--    <link href="css/app.css" rel="stylesheet" type="text/css">--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>



<div class="container">
       <div class="header">

           <h1 id="title"><span class="highlight">John's</span> <span id="highlight2">first Laravel website</span></h1>
           <div>
               <a class="{{Request::is  ('/') ?'active' :'' }}" href="/">Home</a>
               <a class="{{Request::is  ('/about') ?'active' :'' }}"  href="/about">About</a>
               <a class="{{Request::is  ('contact') ?'active' :'' }}"  href="/contact">Contact</a>


           </div>

       </div>




    <div class="content">
        @include('inc2.messages')
        @if(Request::is('/'))
            @include('inc2.showcase')
        @endif
    @yield('content')

    </div>
    <div class="sidebar">
        <p><h3>Sidebar content</h3></p>
        @include('inc2.sidebar2')
        @yield('content2')
    </div>
    <div class="footer">Copyright 2021 &copy; Acme</div>

</div>


{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>--}}
</body>
</html>
