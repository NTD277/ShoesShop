<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link type="text/css" rel="stylesheet" href="http://example.com/image-uploader.min.css">
    <link rel="stylesheet" href="{{asset('backend/css/main.css')}}">

    @stack('stylesheets')
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="dashboard">
                @include('backend.partials.left')
                @yield('content')
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('backend/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/js/image-uploader.min.js')}}"></script>
    <script src="{{asset('backend/js/main.js')}}"></script>
    @stack('javascripts')
</body>
</html>
