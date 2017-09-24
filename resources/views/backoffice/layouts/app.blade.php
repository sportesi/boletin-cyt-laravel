<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{ asset('backoffice/css/app.min.css') }}">

        @yield('styles')
    </head>
    <body class="hold-transition skin-purple sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <a href="{{ route('bo.dash') }}" class="logo">
                    <span class="logo-mini"><b>B</b>CT</span>
                    <span class="logo-lg"><b>Boletín</b> CyT</span>
                </a>

                @include('backoffice.layouts.header')
            </header>

            @include('backoffice.layouts.nav')

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>Panel de Control <small>@yield('section')</small></h1>
                </section>

                <section class="content">
                    @yield('content')
                </section>
            </div>

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.3.8
                </div>
                <strong>
                    Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.
                </strong> All rightsreserved.
            </footer>

        </div>

        <script src="{{ asset('backoffice/js/app.min.js') }}">$.widget.bridge('uibutton', $.ui.button);</script>

        @yield('scripts')

    </body>
</html>
