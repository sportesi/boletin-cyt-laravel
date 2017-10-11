@extends('frontend.layouts.app')

@section('section', 'Categoría: ' . ucwords($category->name))

@section('content')
    @include('frontend.news.news')
@endsection