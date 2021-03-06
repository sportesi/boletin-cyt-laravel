<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-2 pt-1">
            <img src="{{ asset('images/uai-vertical.png') }}" alt="UAI Universidad Abierta Interamericana"
                 class="blog-header-image">
        </div>
        <div class="col-6 text-center">
            <a class="blog-header-logo text-dark" href="/">{{ config('app.name') }}</a>
        </div>
        <div class="col-3 text-right">
            @if(\Illuminate\Support\Facades\Auth::check())
                <div class="dropdown dropleft pull-right">
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        {{ \Illuminate\Support\Facades\Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('news.index') }}">
                            Mis Noticias
                        </a>
                        <a class="dropdown-item" href="{{ route('news.create') }}">
                            Nueva Noticia
                        </a>

                        @if(\Illuminate\Support\Facades\Auth::user()->hasRole('admin'))
                            <a class="dropdown-item" href="{{ route('bo.dash') }}">Panel de Control</a>
                        @endif

                        <a class="dropdown-item" href="#">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-sm btn-outline-secondary">Cerrar sesión
                                </button>
                            </form>
                        </a>
                    </div>
                </div>
            @else
                <div class="dropdown dropleft">
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        Iniciar Sesión
                    </button>
                    @include('auth.mini-login')
                </div>
            @endif
        </div>
    </div>
</header>

<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        @foreach ($categories as $category)
            <a class="p-2 text-muted" href="{{ route('category', [$category->id]) }}">
                {{ $category->name }}
            </a>
        @endforeach
    </nav>
</div>