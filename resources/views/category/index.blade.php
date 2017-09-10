@extends('layouts.app')

@section('section', 'Categoría: ' . ucwords($category->name))

@section('content')
    @include('news.news')
@endsection