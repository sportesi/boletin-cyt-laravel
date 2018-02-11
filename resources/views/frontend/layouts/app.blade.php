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
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-2 pt-1">
                <img src="{{ asset('images/uai-vertical.png') }}" alt="UAI Universidad Abierta Interamericana"
                     class="blog-header-image">
            </div>
            <div class="col-6 text-center">
                <a class="blog-header-logo text-dark" href="/">{{ config('app.name') }}</a>
            </div>
            <div class="col-2 text-right">
                <a class="btn btn-sm btn-outline-secondary" href="#">Iniciar Sesión</a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            @foreach ($categories as $category)
                <a class="p-2 text-muted" href="#">{{ $category->name }}</a>
            @endforeach
        </nav>
    </div>

    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark"
         style="background-image: url('{{ asset($latest->image_url) }}')">
        <div class="col-md-6 px-0 jumbo-caption">
            <h1 class="jumbo-text display-4 font-italic">{{ str_limit($latest->title, 40) }}</h1>
            <p class="jumbo-text lead my-3">{{ str_limit($latest->summary, 200) }}</p>
            <p class="jumbo-text lead mb-0"><a href="#" class="text-white font-weight-bold">Seguir leyendo...</a></p>
        </div>
    </div>
</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-9 blog-main">
            @foreach($news as $new)
                <div class="col-md-12">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">{{ $new->category->name }}</strong>
                            <div class="mb-1 text-muted">
                                {{ $new->created_at->diffForHumans() }}
                                por
                                <a href="{{ $new->user->id }}">{{ $new->getAuthor() }}</a>
                            </div>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">{{ $new->title }}</a>
                            </h3>
                            <p class="card-text mb-auto">{{ !empty($new->sub_title) ? $new->sub_title : str_limit($new->summary, 200) }}</p>
                            <a href="#">Leer más</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" src="{{ $new->image_url }}">
                    </div>
                </div>
            @endforeach

        </div><!-- /.blog-main -->

        <aside class="col-md-3 blog-sidebar">
            <div class="p-3 mb-3 bg-light rounded">
                <h4 class="font-italic">About</h4>
                <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus
                    sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
    <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.
    </p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.min.js') }}"></script>
@yield('scripts')
</body>
</html>
