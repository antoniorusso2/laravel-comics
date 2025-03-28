{{-- default layout --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield('title')</title>

</head>

<body>
    @include('../partials/header')

    <main class="main-content">
        @yield('content')
    </main>

    @include('../partials/footer')
</body>

</html>