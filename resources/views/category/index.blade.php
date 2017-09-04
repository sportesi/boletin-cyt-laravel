@extends('layouts.app')

@section('section', 'Categoría: ' . ucwords(utf8_decode($category->name)))

@section('content')
    @include('news.news')
@endsection