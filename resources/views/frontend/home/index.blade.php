@extends('frontend.layouts.app')

@section('section', 'Últimas Noticias')

@section('jumbotron')
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark"
         style="background-image: url('{{ asset($latest->image_url) }}')">
        <div class="col-md-6 px-0 jumbo-caption">
            <h1 class="jumbo-text display-4 font-italic">{{ str_limit(utf8_decode($latest->title), 40) }}</h1>
            <p class="jumbo-text lead my-3">{{ str_limit(utf8_decode($latest->summary), 200) }}</p>
            <p class="jumbo-text lead mb-0"><a href="{{ route('news.show', [$latest->id]) }}"
                                               class="text-white font-weight-bold">Leer Más...</a></p>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-9 blog-main">
            @include('frontend.news.news')
        </div><!-- /.blog-main -->

        @include('frontend.layouts.sidebar')

    </div><!-- /.row -->
@endsection