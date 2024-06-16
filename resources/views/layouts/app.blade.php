<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wines Selection</title>
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/img/wines.jpg')}}">

    @vite('resources/js/app.js')
</head>
<body>
    <main>
        @yield('content')
    </main>
</body>
</html>