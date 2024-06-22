<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex font-serif antialiased">
    <div class="w-full h-full bg-main-100">
        <div class="min-h-screen">
            @include('layouts.navbar')
            <!-- Page Heading -->

            <div class="h-full">
                <!-- side menu -->
                @include('layouts.sidebar')
                <!-- side menu -->

                <!-- Page Content -->
                <main class="main flex-auto pt-12 lg:pl-72">
                    <div class="area py-10 px-40">
                        <div class="workingarea">
                            {{ $slot }}
                        </div>
                    </div>
                </main>
            </div>

        </div>
    </div>
</body>

</html>