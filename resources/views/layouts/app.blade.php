<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-light">
    @include('layouts.menu')


    <div class="container-fluid">
        @yield('content')
    </div>

    @stack('scripts')
</body>

</html>
