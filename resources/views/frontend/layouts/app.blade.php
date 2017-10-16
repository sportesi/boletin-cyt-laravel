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
    <div class="row">

        <div class="col-md-12">
            <div class="page-header">
                @include('frontend.layouts.nav')
                <div class="section-header">
                    <div class="row">
                        <div class="col-md-9">
                            <h3>@yield('section')</h3>
                        </div>
                        <div class="col-md-3" style="padding-right: 0;">
                            <img src="{{ asset('/images/uai-vertical.png') }}" style="width: 100%;" id="Logo UAI"/>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('slider')

        <div class="col-md-9">
            @yield('content')
        </div>

        <div class="col-md-3 text-center">
            @include('frontend.layouts.sidebar')
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="panel panel-default" style="margin: 0;">
            <div class="panel-body">
                <div class="col-md-12 text-center">
                    <div class="col-md-4">
                        <p><b>Boletín Científico Tecnológico</b></p>
                    </div>
                    <div class="col-md-4">
                        <p><b>Coordinación: </b>Enrique Cingolani</p>
                    </div>
                    <div class="col-md-4">
                        <p><b>Desarrollo: </b>Sebastián Portesi</p>
                    </div>
                    <div class="col-md-6">
                        <p>Proyecto de extensión universitaria</p>
                    </div>
                    <div class="col-md-6">
                        <p>Universidad Abierta Interamericana</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.min.js') }}"></script>
</body>
</html>
