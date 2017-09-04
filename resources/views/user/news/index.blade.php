@extends('layouts.app')

@section('section', 'Mis Noticias')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('user-news-create') }}" class="btn btn-primary">Crear Noticia</a>
        </div>
    </div>

    <br>

    @include('news.news')

@endsection