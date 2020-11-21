<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./public/frontend/img/favicon.png">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- CSS only -->


    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/detail.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/base.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}">
{{--    @stack('stylesheets')--}}
{{--    {{!-- <link rel="stylesheet" href="/css/admin.css"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/font/fontawesome-free-5.14.0-web/css/all.min.css')}}">

</head>
<body>
<div class="app">
    <header class="header">
        @include('frontend.partials.header')
    </header>
    <div class="content">
        @yield('content')
    </div>

    <footer class="footer">
        @include('frontend.partials.footer')
    </footer>
</div>

<!-- JS, Popper.js, and jQuery -->
<script src="{{asset('frontend/js/main.js')}}"></script>
<script src="{{asset('frontend/js/header.js')}}"></script>
<script src="{{asset('frontend/js/footer.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
{{--@stack('javascripts')--}}
</body>
</html>
