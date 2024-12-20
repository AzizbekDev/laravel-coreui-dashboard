<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- Head -->
        @include('partials.head')
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <!-- Custom styles -->
        @stack('styles')
    </head>

    <body>
        @include('partials.sidenav')
        <div class="wrapper d-flex flex-column min-vh-100">
            @include('partials.header', ['breadcrumbs' => $breadcrumbs])
            {{ $slot }}
            @include('partials.footer')
        </div>
        <!-- Scripts -->
        @include('partials.alerts')
        <script>
        const header = document.querySelector('header.header');
        document.addEventListener('scroll', () => {
            if (header) {
                header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
            }
        });
        </script>
        @stack('scripts')
    </body>

</html>