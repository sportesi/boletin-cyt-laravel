@extends('frontend.layouts.app')

@section('section', ucwords('Categoría: ' . ucwords($new->category->name)))

@section('content')
    <div class="panel panel-default news-container">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ $new->image_url }}" class="img-rounded" alt="News Image">
                </div>
            </div>

            <hr>

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4>{{ utf8_decode($new->title) }}</h4>
                    <h5>{{ utf8_decode($new->sub_title) }}</h5>
                </div>

                <div class="panel-body">
                    <p>{{ utf8_decode($new->summary) }}</p>

                    <p>{{ utf8_decode($new->sub_summary) }}</p>
                </div>

                <div class="panel-footer text-center">
                    <div class="btn-group">
                        @if($new->link_1)
                            <a href="{!! $new->link_1 !!}" class="btn btn-info btn-sm" target="_blank">Nota
                                Completa</a>
                        @endif
                        @if($new->link_2)
                            <a href="{!! $new->link_2 !!}" class="btn btn-info btn-sm"
                               target="_blank">Relacionado</a>
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
@endsection