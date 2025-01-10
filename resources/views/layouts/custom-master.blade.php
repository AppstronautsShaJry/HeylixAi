<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" class="dark"
      data-header-styles="dark" data-menu-styles="dark">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Tailwind Responsive Admin Web Dashboard Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
          content="template admin, dashboard, laravel template, admin panel laravel, admin dashboard template, template dashboard, laravel, laravel vite, admin, laravel framework, tailwind css, laravel dashboard, dashboard admin template, laravel tailwind, tailwind admin template, dashboard tailwind, tailwind dashboard, tailwind dashboard template">

    <!-- TITLE -->
    <title> Heylix AI </title>

    <!-- FAVICON -->
    <link rel="icon" href="{{asset('build/assets/images/brand-logos/favicon.ico')}}" type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="{{asset('build/assets/icon-fonts/icons.css')}}" rel="stylesheet">

    <!-- APP SCSS -->
    @vite(['resources/sass/app.scss'])



    <!-- APP CSS -->
    @vite(['resources/css/app.css'])



    <!-- MAIN JS -->
    <script src="{{asset('build/assets/authentication-main.js')}}"></script>

    @yield('styles')

</head>
<body>
@yield('error-body')

@yield('content')

<!-- SCRIPTS -->

@yield('scripts')

<!-- END SCRIPTS -->

</body>
</html>
