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
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <script src="https://kit.fontawesome.com/db74d9e1d4.js" crossorigin="anonymous"></script>

    <title>@yield('title', 'Default Title')</title>

</head>
<body>
    @yield('content')
    <div class="body-botton">
        @include('./components/footer')
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
