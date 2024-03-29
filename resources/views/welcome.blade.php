<!DOCTYPE html>
<html
    lang="en"
    class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/components/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components/sidbar.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/db74d9e1d4.js" crossorigin="anonymous"></script>

    <title>@yield('title', 'Default Title')</title>

</head>
<body>
    @yield('content')
    <div class="body-botton">
        @include('./components/footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</body>
</html>
