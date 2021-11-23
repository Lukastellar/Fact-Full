<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            input {
                width: 200px;
                padding: 4px 13px 3px 13px;
                font-size: 14px;
            }
        </style>
    </head>
    <body>
    <nav class="absolute w-screen">
        <ul class="flex flex-row justify-center gap-x-4 mt-6">
            <li class="bg-gray-800 text-white uppercase rounded font-bold">
                <a href="{{route('login')}}" class="block px-4 py-1.5">Login</a>
            </li>
            <li class="bg-gray-800 text-white uppercase rounded font-bold">
                <a href="{{route('register')}}" class="block px-4 py-1.5">Register</a>
            </li>
        </ul>
    </nav>

    @yield('content')

    </body>
</html>
