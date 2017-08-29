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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="page-header">
                @include('common.nav')
                <div class="section-header">
                    <div class="row">
                        <div class="col-md-9">
                            <h3>@yield('section')</h3>
                        </div>
                        <div class="col-md-3" style="padding-right: 0;">
                            <img src="{{ asset('/images/uai-vertical.png') }}" style="width: 100%;" id="Logo UAI"/><br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('slider')

        <div class="col-md-9">
            @yield('content')
            {{--require_once 'controls/php-pagination/widget.php'; --}}
        </div>

        <div class="col-md-3 text-center">
            <div class="panel panel-info">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            {{--require_once 'controls/search/widget.php'; --}}
                        </div>
                        <div class="col-md-12">
                            <a href="/files/criterios_para_publicar.doc" class="btn btn-primary"> Criterios para
                                publicar </a>
                        </div>
                        <div class="col-md-12">
                            <div><h2><strong>Categorias</strong></h2></div>
                            <div id="categories" class="text-left"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--require_once 'login/modal.php';--}}
        {{--require_once 'user/register/modal.php'; --}}
        {{--if ($session->GetSessionValue('valid') == 'valid'): --}}
        {{--require_once 'user/update/modal.php'; --}}
        {{--endif --}}
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
