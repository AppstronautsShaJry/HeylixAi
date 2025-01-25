<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="dark"
      data-header-styles="light" data-menu-styles="light"
      data-width="fullwidth">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Laravel Tailwind Responsive Admin Web Dashboard Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="template admin, dashboard, laravel template, admin panel laravel, admin dashboard template, template dashboard, laravel, laravel vite, admin, laravel framework, tailwind css, laravel dashboard, dashboard admin template, laravel tailwind, tailwind admin template, dashboard tailwind, tailwind dashboard, tailwind dashboard template">

    <!-- TITLE -->
    <title> Heylix AI </title>

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('build/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="{{ asset('build/assets/icon-fonts/icons.css') }}" rel="stylesheet">

    <!-- APP SCSS -->
    @vite(['resources/sass/app.scss'])

    <!-- APP CSS -->
    @vite(['resources/css/app.css'])

    @include('layouts.components.styles')

    <!-- MAIN JS -->
    <script src="{{ asset('build/assets/main.js') }}"></script>

    @yield('styles')
    @livewireStyles
</head>

<body class="font-roboto tracking-wider relative">

<!-- SWITCHER -->
@include('layouts.components.switcher')

<!-- LOADER -->
<div id="loader">
    <img src="{{ asset('build/assets/images/media/loader.svg') }}" alt="">
</div>

<div class="page">
    <!-- HEADER -->
    @include('layouts.components.header')
    <!-- SIDEBAR -->
    @include('layouts.components.sidebar')
    <!-- MAIN-CONTENT -->
    <main>
        {{ $slot }}
        @yield('content')
    </main>
    <!-- FOOTER -->
    @include('layouts.components.footer')
</div>
<div class="absolute top-0 right-0">
    <x-toast.success />
</div>

<!-- SCRIPTS -->
@include('layouts.components.scripts')

@yield('scripts')

<!-- LIVEWIRE SCRIPTS -->
@livewireScripts

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<script src="//unpkg.com/alpinejs" defer></script>

<!-- STICKY JS -->
<script src="{{ asset('build/assets/sticky.js') }}"></script>

<!-- APP JS -->
@vite('resources/js/app.js')

<!-- CUSTOM-SWITCHER JS -->
@vite('resources/assets/js/custom-switcher.js')
</body>

</html>
