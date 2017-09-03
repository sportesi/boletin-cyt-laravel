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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">
                            Configuración de Usuario <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a role="button" data-toggle="modal" data-target="#modal-update-user">Actualizar
                                    Datos</a>
                            </li>
                            <li>
                                <a role="button" data-toggle="modal" data-target="#modal-change-password">
                                    Cambiar Contraseña
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{--@if($session->GetSessionValue('permission') == 2)--}}
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
                    {{--@else--}}
                    <li>
                        <a href="/user/statistics/index.php?id=1">
                            Rendimiento
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            Noticias <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/news/create">Crear</a></li>
                            <li><a href="/news/list/">Lista por usuario</a></li>
                        </ul>
                    </li>
                    {{--@endif--}}
                @endif
            </ul>
            <div class="navbar-right">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="/login/logout.php" class="btn btn-primary btn-sm navbar-btn">Salir</a>
                @else
                    <a href="#" class="btn btn-success btn-sm navbar-btn" data-toggle="modal"
                       data-target="#modal-register">Registrarse</a>
                    <a href="#" class="btn btn-primary btn-sm navbar-btn" data-toggle="modal"
                       data-target="#modal-login">Ingresar</a>
                @endif
            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
