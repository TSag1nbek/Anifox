<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Register And Login Css -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <title>@yield('title')</title>
</head>
<body>
    @if(session()->get('info'))
        <div class="info">
            {{ session()->get('info') }}
        </div>
    @endif

<div class="wrapper">
    <div class="container">
        @yield('content')
    </div>
</div>
</body>
</html>
