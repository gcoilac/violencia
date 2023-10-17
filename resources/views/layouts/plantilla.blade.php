<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>@yield('title')</title>
    <style>
        :root {
            --white: #ffffff;
            --black: #000000;
            --very-light-pink: #c7c7c7;
            --text-input-field: #f7f7f7;
            --hospital-green: #acd9b2;
            --sm: 12px;
            --md: 14px;
            --lg: 16px;
        }
    </style>
    @stack('styles')
</head>
<body>

    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    @stack('scripts')
</body>
</html>