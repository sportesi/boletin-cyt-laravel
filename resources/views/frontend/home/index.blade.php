@extends('frontend.layouts.app')

@section('section', 'Últimas Noticias')

@section('content')
    @include('frontend.news.news')
@endsection


@section('slider')
    <div class="col-md-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach($slider as $slide)
                    <li data-target="#carousel-example-generic"
                        data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach($slider as $slide)
                    <div class="item {{ $loop->first ? 'active' : '' }}">
                        <a href="{!! $slide->link_1 !!}" target="_blank">
                            <img src="{{ asset($slide->image_url) }}">
                        </a>
                        <div class="carousel-caption">
                            {{ utf8_decode($slide->title) }}
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
@endsection