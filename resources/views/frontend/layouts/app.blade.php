<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117411111-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-117411111-1');
    </script>

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
<br>
<footer class="blog-footer">
    <div class="d-flex align-items-center col-md-12">
        <div class="d-flex col-md-4">
            <img src="{{ asset('images/uai-vertical.png') }}" alt="UAI Universidad Abierta Interamericana" class="logo-footer">
        </div>
        <div class="d-flex col-md-4">
            <div>
                <p>Boletín Científico Tecnológico</p>
                <p>Proyecto de extensión universitaria</p>
            </div>
        </div>
        <div class="d-flex col-md-4">
            <div>
                <p><b>Coordinación:</b> Enrique Cingolani</p>
                <p><b>Desarrollo:</b> Sebastián Portesi</p>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.min.js') }}"></script>
@yield('scripts')
</body>
</html>
