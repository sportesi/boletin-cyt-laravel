<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    @include('frontend.layouts.nav')
    @yield('jumbotron')
</div>

<main role="main" class="container">
    @yield('content')
</main><!-- /.container -->

<footer class="blog-footer">

</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.min.js') }}"></script>
@yield('scripts')
</body>
</html>
