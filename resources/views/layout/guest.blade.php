<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guest</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('style')
</head>
<body>

    <main>
        <div class="fullPageContainer">
            <div class="flexContainer">
                @yield('content')
            </div>
        </div>
    </main>

    <script src="{{ asset('js/main.js') }}"></script>
    @yield('js')
</body>
</html>
