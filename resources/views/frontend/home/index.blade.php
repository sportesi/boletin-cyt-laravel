@extends('frontend.layouts.app')

@section('section', 'Últimas Noticias')

@section('jumbotron')
    <div id="sliderCarousel" class="carousel slide mb-3" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($slider as $sliderItem)
                <li data-target="#sliderCarousel"
                    data-slide-to="{{ $loop->index }}" {{ $loop->first ? 'class="active"' : '' }}></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($slider as $sliderItem)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <a href="{{ route('news.show', [$sliderItem->id]) }}">
                        <div class="d-block silder-image"
                             style="background-image: url('{{ $sliderItem->image_url }}')"></div>
                    </a>
                    <div class="carousel-caption d-none d-md-block bg-black">
                        <h5>
                            @if ($sliderItem->title)
                                {{ str_limit(utf8_decode($sliderItem->title), 70) }}
                            @else
                                {{ str_limit(utf8_decode($sliderItem->sub_title), 70) }}
                            @endif
                        </h5>
                        <p>
                            @if ($sliderItem->summary)
                                {{ str_limit(utf8_decode($sliderItem->summary), 140) }}
                            @else
                                {{ str_limit(utf8_decode($sliderItem->sub_summary), 140) }}
                            @endif
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#sliderCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#sliderCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
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