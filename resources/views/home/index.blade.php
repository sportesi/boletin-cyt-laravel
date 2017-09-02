@extends('layouts.app')

@section('section', 'Últimas Noticias')

@section('content')
    @foreach($news as $new)
        <div class="panel panel-info">
            <div class="panel-body no-padding">
                <div class="col-md-3">
                    <img class="img-thumbnail" src="{!! $new->image_url !!}"/>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <b>{{ utf8_decode($new->title) }}</b>
                        </div>
                        <div class="panel-body">
                            <p>{{ utf8_decode($new->sub_summary) }}</p>
                            <p>{{ utf8_decode($new->summary) }}</p>
                            <div class="text-center">
                                @if($new->link_1)
                                    <a href="{!! $new->link_1 !!}" class="btn btn-info btn-sm" target="_blank">Nota
                                        Completa</a>
                                @endif
                                @if($new->link_2)
                                    <a href="{!! $new->link_2 !!}" class="btn btn-info btn-sm" target="_blank">Relacionado</a>
                                @endif
                                @if($new->link_3)
                                    <a href="{!! $new->link_3 !!}" class="btn btn-info btn-sm" target="_blank">Formato
                                        PDF</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-5">
                        <strong>Autor:&nbsp;</strong>
                        <a href="{{--/user/statistics/index.php?id=1--}}">
                            {{ $new->getAuthor() }}
                        </a>
                    </div>
                    <div class="col-md-3 text-center">
                        <strong>Sede:&nbsp;</strong> {{ $new->user->campus->name }}
                    </div>
                    <div class="col-md-4 text-right">
                        <strong>Fecha:&nbsp;</strong> {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $new->date)->format('Y-m-d') }}
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{ $news->links() }}
@endsection


@section('slider')
    <div class="col-md-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @for($i = 0; $i < 5; $i++)
                    <div class="item {{ $i == 0 ? 'active' : '' }}">
                        <a href="{{ asset('/images/uai-vertical.png') }}" target="_blank">
                            <img src="{{ asset('/images/uai-vertical.png') }}">
                        </a>
                        <div class="carousel-caption">
                            title
                        </div>
                    </div>
                @endfor
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