<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Boletín Científico - Tecnológico</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/">Últimas Noticias</a></li>
            </ul>
            <div class="navbar-right">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <ul class="nav navbar-nav navbar-right">
                        @if(\Illuminate\Support\Facades\Auth::check())
                            @if(\Illuminate\Support\Facades\Auth::user()->hasRole('admin'))
                                <li><a href="{{ route('bo.dash') }}">Panel de Control</a></li>
                            @endif
                        @endif
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <b>{{ Auth::user()->name }}</b> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('news.index') }}">Mis Noticias</a></li>
                                <li><a href="#">Rendimiento</a></li>
                                <li><a href="#">Configuración</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a onclick="logout();">Cerrar sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                @else
                    <a href="{{ route('register') }}" class="btn btn-success btn-sm navbar-btn">Registrarse</a>
                    <a href="{{ route('login') }}" class="btn btn-primary btn-sm navbar-btn">Ingresar</a>
                @endif
            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">{{ csrf_field() }}</form>
<script>function logout(){event.preventDefault();document.getElementById('logout-form').submit();}</script>
