<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Head -->
        @include('partials.head')
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div class="bg-body-tertiary min-vh-100 d-flex flex-row align-items-center">
            <div class="container">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
