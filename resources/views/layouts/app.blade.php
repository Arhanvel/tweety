<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen">
            @livewire('navigation-dropdown')

            <!-- Page Heading -->
{{--            <header class="bg-white shadow">--}}
{{--                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                    {{ $header }}--}}
{{--                </div>--}}
{{--            </header>--}}

            <!-- Page Content -->
            <main>
                <div class="py-8">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <div class="lg:flex lg:justify-between">
                                <div class="lg:w-32">
                                    @include ('_sidebar-links')
                                </div>

                                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">

                                    {{ $slot }}

                                </div>


                                @include ('_friends-list')
                            </div>

                        </div>
                    </div>
                </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <script src="http://unpkg.com/turbolinks"></script>
    </body>
</html>
