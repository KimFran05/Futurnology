<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/6097016f6c.js" crossorigin="anonymous"></script>
    <title> @yield('titlu') | {{ config('app.name') }}</title>
</head>
<body>
    @include('elemente.header')
    @yield('continut')
    @include('elemente.footer')
</body>
</html>

<style>
    body {
        margin: 0;
        background-image: url('{{ asset('imagini/background1.png') }}'), linear-gradient(to right, #04236a, #98b7f0);
        background-repeat: repeat-y;
        background-size: 100%;
        color: white;
    }
</style>