<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Search Form -->
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
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENÚ PRINCIPAL</li>
            <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> <span>Página Principal</span></a></li>
            <li class="active">
                <a href="{{ route('bo.dash') }}">
                    <i class="fa fa-dashboard"></i> <span>Panel de Control</span>
                </a>
            </li>
            <li><a href="{{ route('backoffice.course.index') }}"><i class="fa fa-edit"></i> <span>Cursos</span></a></li>
            <li><a href="{{ route('backoffice.user.index') }}"><i class="fa fa-users"></i> <span>Usuarios</span></a></li>
            <li><a href="{{ route('backoffice.category.index') }}"><i class="fa fa-list"></i> <span>Categorías</span></a></li>
            <li><a href=""><i class="fa fa-book"></i> <span>Noticias</span></a></li>
        </ul>
    </section>
</aside>