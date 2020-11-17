<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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

    <script src="{{asset('backend/js/main.js')}}"></script>
</body>
</html>
