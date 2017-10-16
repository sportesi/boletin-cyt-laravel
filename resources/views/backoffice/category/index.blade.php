@extends('backoffice.layouts.app')

@section('section', 'Categorías')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Categorías
                    </div>
                    <div class="box-tools pull-right">
                        <a href="{{ route('backoffice.category.create') }}" class="btn btn-primary btn-xs">Crear Categoría</a>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-striped datatable-js" width="100%">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Estado</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    <a href="{{ route('backoffice.category.edit', ['id' => $category->id]) }}">
                                        {{ $category->name }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('backoffice.category.edit', ['id' => $category->id]) }}">
                                        {{ $category->getStatus() }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection