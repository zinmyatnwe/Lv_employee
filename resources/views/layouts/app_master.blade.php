<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LV Authentication</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{('assets/css/signin.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">



</head>
<body>
    @include('layouts.partial.nav')
    <main class="container">
        @yield('content')

    </main>
</body>
</html>