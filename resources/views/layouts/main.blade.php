<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>
    @include('layouts.navbar')
    <div class="container mx-5 position-relative">
        @yield('container')
    </div>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>