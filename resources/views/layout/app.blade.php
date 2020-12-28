<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('style')
</head>
<body>

    <nav>
        <ul>
            <li>
                <form method="POST" action="{{ route('signout') }}">
                    @csrf
                    <a href="{{ route('signout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="text-sm text-gray-700 underline">Signout</a>
                </form>
            </li>
        </ul>
    </nav>

    <main>
        <div>
            @if (session('message'))
                <div class="notification">
                    {{ session('message') }}
                </div>
            @endif
        </div>


        @yield('content')



    </main>

    <script src="{{ asset('js/main.js') }}"></script>
    @yield('js')
</body>
</html>
