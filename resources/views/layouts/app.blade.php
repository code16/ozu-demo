<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? '' }} {{app(\App\Settings\Settings::class)->siteTitle}}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white text-black antialiased dark:bg-gray-950 dark:text-white">
        <div class="flex flex-col min-h-screen">
            <x-header></x-header>

            <main class="flex-1">
                <x-container>
                    {{ $slot }}
                </x-container>
            </main>

            <x-footer></x-footer>
        </div>
    </body>
</html>
