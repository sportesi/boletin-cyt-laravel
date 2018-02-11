@extends('frontend.layouts.app')

@section('section', 'Últimas Noticias')

@section('jumbotron')
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark"
         style="background-image: url('{{ asset($latest->image_url) }}')">
        <div class="col-md-6 px-0 jumbo-caption">
            <h1 class="jumbo-text display-4 font-italic">{{ str_limit($latest->title, 40) }}</h1>
            <p class="jumbo-text lead my-3">{{ str_limit($latest->summary, 200) }}</p>
            <p class="jumbo-text lead mb-0"><a href="#" class="text-white font-weight-bold">Leer Más...</a></p>
        </div>
    </div>
@endsection

@section('content')
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

    <div class="col-md-12 d-flex justify-content-center">
        {{ $news->links() }}
    </div>
@endsection