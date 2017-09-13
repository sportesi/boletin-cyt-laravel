<aside class="main-sidebar">

    <section class="sidebar">

        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                    <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>


        <ul class="sidebar-menu">
            <li class="header">MENÚ PRINCIPAL</li>
            <li class="active">
                <a href="{{ route('backoffice.dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Panel de Control</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Cursos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="">
                            <i class="fa fa-circle-o"></i> Reporte
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Usuarios</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="">
                            <i class="fa fa-circle-o"></i> Validar Alumnos
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-list"></i> Categorías
                </a>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-book"></i> Noticias
                </a>
            </li>
        </ul>
    </section>
</aside>