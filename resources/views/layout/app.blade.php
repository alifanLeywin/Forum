<!doctype html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum User</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icons/main/mainfont/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icons/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/v3/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/v4/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('layout.navbar') <!-- Include header -->

    <main>
        <!-- Main content -->
        @yield('content')
    </main>
    @include('layout.footer') <!-- Include footer -->

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/velocity/velocity.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
