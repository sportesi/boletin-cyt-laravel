@extends('backoffice.layouts.app')

@section('section', $category->id ? 'Editar Categoría' : 'Crear Categoría')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            @php
                if ($category->id) {
                    $formRoute = route('backoffice.category.update', ['id' => $category->id]);
                } else {
                    $formRoute = route('backoffice.category.store');
                }
            @endphp
            <form action="{{ $formRoute }}" method="post">
                <div class="box">
                    <div class="box-body">
                        {{ csrf_field() }}
                        @if($category->id)
                            {{ method_field('PUT') }}
                        @endif
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name"
                                   value="{{ $category->name }}"/>
                        </div>
                        <div class="form-group">
                            <label for="status">Estado</label>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="status" name="status"
                                            {{ $category->status === 1 ? 'checked' : '' }}>
                                    <span>Activa</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="primary">Principal</label>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="primary" name="primary"
                                            {{ $category->primary === 1 ? 'checked' : '' }}>
                                    <span>Mostrar en el menú</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary">Guardar</button>
                        <button type="button" class="btn btn-danger" onclick="destroy();">Eliminar</button>
                        <a href="{{ route('backoffice.category.index') }}" class="btn btn-default">Cancelar</a>
                    </div>
                </div>
            </form>
            <script>
                function destroy() {
                    if (confirm('¿Estás seguro de borrar esta categoría?')) {
                        event.preventDefault();
                        document.getElementById('destroy-form').submit();
                    }
                }
            </script>
            <form id="destroy-form" method="post"
                  action="{{ route('backoffice.category.destroy', ['id' => $category->id]) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
            </form>
        </div>
    </div>

@endsection