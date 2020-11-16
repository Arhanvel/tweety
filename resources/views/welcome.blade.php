<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tweety</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

            <div class="content">
                <div class="text-6xl text-gray-800 font-sans mb-8">
                    Tweety
                </div>

                <div class="text-center font-sans text-2xl text-gray-700 flex space-x-12">
                    @auth
                        <a href="{{ url('/dashboard') }}" class>Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        <a href="{{ route('register') }}">Register</a>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
