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
                @if(\Illuminate\Support\Facades\Auth::check())
                    @if(\Illuminate\Support\Facades\Auth::user()->hasRole('admin'))
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                Cursos <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/admin/users/report/courses/index.php">
                                        Reporte
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                Usuarios <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/admin/users/validate/index.php">
                                        Validar Alumnos
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li><a href="/admin/category/list/">Categorías</a></li>

                        <li><a href="/admin/users/news/list/index.php?offset=0&pageperview=10">Listar Noticias</a></li>
                    @endif
                @endif
            </ul>
            <div class="navbar-right">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <b>{{ Auth::user()->name }}</b> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('user-news') }}">Mis Noticias</a></li>
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
