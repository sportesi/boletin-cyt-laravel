@extends('frontend.layouts.app')

@section('section', 'Mis Noticias')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('news.create') }}" class="btn btn-primary btn-sm">
                <i class="fa fa-plus"></i> Crear Noticia
            </a>
        </div>
    </div>

    <br>

    @include('frontend.news.news')

@endsection