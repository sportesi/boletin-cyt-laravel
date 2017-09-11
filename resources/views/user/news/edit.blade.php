@extends('layouts.app')

@section('section', 'Crear Noticia')

@section('content')

    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal" action="{{ route('user.news.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="category_id" class="col-sm-2 control-label">Categoría</label>
                    <div class="col-sm-10">
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">Seleccione...</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ utf8_decode($category->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Título</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="sub_title" class="col-sm-2 control-label">Sub Título</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sub_title" name="sub_title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="summary" class="col-sm-2 control-label">Resumen</label>
                    <div class="col-sm-10">
                <textarea name="summary" id="summary" class="form-control" cols="30" rows="10"
                          maxlength="250"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sub_summary" class="col-sm-2 control-label">Sub Resumen</label>
                    <div class="col-sm-10">
                <textarea name="sub_summary" id="sub_summary" class="form-control" cols="30" rows="5"
                          maxlength="250"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image_url" class="col-sm-2 control-label">Link Imágen</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="image_url" name="image_url">
                    </div>
                </div>
                <div class="form-group">
                    <label for="link_1" class="col-sm-2 control-label">Link Noticia</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="link_1" name="link_1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="link_2" class="col-sm-2 control-label">Link Relacionado</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="link_2" name="link_2">
                    </div>
                </div>
                <div class="form-group">
                    <label for="link_3" class="col-sm-2 control-label">Link PDF</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="link_3" name="link_3">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Crear Noticia</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection