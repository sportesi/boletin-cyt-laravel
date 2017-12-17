@extends('backoffice.layouts.app')

@section('section', 'Editar Noticia')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <form action="{{ route('backoffice.news.update', ['id' => $news->id]) }}" method="post">
                    <div class="box-body">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="category_id" class="control-label">Categoría *</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                <option value="">Seleccione...</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                            {{ $news->category && $category->id === $news->category->id ? 'selected' : ''}}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title" class="control-label">Título *</label>
                            <input type="text" class="form-control" id="title" value="{{ utf8_decode($news->title) }}"
                                   name="title" maxlength="255" required>
                        </div>
                        <div class="form-group">
                            <label for="sub_title" class="control-label">Sub Título</label>
                            <input type="text" class="form-control" id="sub_title"
                                   value="{{ utf8_decode($news->sub_title) }}"
                                   name="sub_title" maxlength="255">
                        </div>
                        <div class="form-group">
                            <label for="summary" class="control-label">Resumen *</label>
                            <textarea name="summary" id="summary" class="form-control" cols="30" rows="10"
                                      maxlength="250" required>{{ utf8_decode($news->summary) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="sub_summary" class="control-label">Sub Resumen</label>
                            <textarea name="sub_summary" id="sub_summary" class="form-control" cols="30" rows="5"
                                      maxlength="250">{{ utf8_decode($news->sub_summary) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image_url" class="control-label">Link Imágen *</label>
                            <input type="text" class="form-control" id="image_url" value="{{ $news->image_url }}"
                                   name="image_url" required>
                        </div>
                        <div class="form-group">
                            <label for="link_1" class="control-label">Link Noticia *</label>
                            <input type="text" class="form-control" id="link_1" value="{{ $news->link_1 }}"
                                   name="link_1" required>
                        </div>
                        <div class="form-group">
                            <label for="link_2" class="control-label">Link Relacionado</label>
                            <input type="text" class="form-control" id="link_2" value="{{ $news->link_2 }}"
                                   name="link_2">
                        </div>
                        <div class="form-group">
                            <label for="link_3" class="control-label">Link PDF</label>
                            <input type="text" class="form-control" id="link_3" value="{{ $news->link_3 }}"
                                   name="link_3">
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <div class="form-group">
                                <button class="btn btn-primary">Guardar</button>
                                <a href="{{ route('backoffice.news.index') }}" class="btn btn-default">Cancelar</a>
                                <button type="button" onclick="deleteNews();" class="btn btn-danger">Eliminar</button>
                            </div>
                        </div>
                    </div>

                </form>
                <form action="{{ route('backoffice.news.destroy', [ 'id' => $news->id]) }}" method="post"
                      class="js-form-delete">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
                <script>
                    function deleteNews() {
                        if (confirm('¿Está seguro de eliminar esta noticia?')) {
                            $('.js-form-delete').submit();
                        }
                    }
                </script>
            </div>
        </div>
    </div>

@endsection