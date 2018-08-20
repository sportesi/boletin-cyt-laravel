@extends('frontend.layouts.app')

@section('section', $news->id ? 'Editar Noticia' : 'Crear Noticia')

@section('content')

    @php
        if ($news->id) {
            $formRoute = route('news.update', ['id' => $news->id]);
        } else {
            $formRoute = route('news.store');
        }
    @endphp

    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal" action="{{ $formRoute }}" method="post">
                {{ csrf_field() }}
                @if($news->id)
                    {{ method_field('PUT') }}
                @endif
                <div class="form-group">
                    <label for="category_id" class="col-sm-2 control-label">Categoría *</label>
                    <div class="col-sm-10">
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
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Título *</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" value="{{ utf8_decode($news->title) }}"
                               name="title" maxlength="255" required>
                        <span class="title-counter pull-right">Caracteres restantes: <b>255</b></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sub_title" class="col-sm-2 control-label">Sub Título</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sub_title" value="{{ utf8_decode($news->sub_title) }}"
                               name="sub_title" maxlength="255">
                        <span class="sub_title-counter pull-right">Caracteres restantes: <b>255</b></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="summary" class="col-sm-2 control-label">Resumen *</label>
                    <div class="col-sm-10">
                        <textarea name="summary" id="summary" class="form-control" cols="30" rows="10"
                                  maxlength="255" required>{{ utf8_decode($news->summary) }}</textarea>
                        <span class="summary-counter pull-right">Caracteres restantes: <b>255</b></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sub_summary" class="col-sm-2 control-label">Sub Resumen</label>
                    <div class="col-sm-10">
                        <textarea name="sub_summary" id="sub_summary" class="form-control" cols="30" rows="5"
                                  maxlength="255">{{ utf8_decode($news->sub_summary) }}</textarea>
                        <span class="sub_summary-counter pull-right">Caracteres restantes: <b>255</b></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image_url" class="col-sm-2 control-label">Link Imágen *</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="image_url" value="{{ $news->image_url }}"
                               name="image_url" required maxlength="255">
                    </div>
                </div>
                <div class="form-group">
                    <label for="link_1" class="col-sm-2 control-label">Link Noticia *</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="link_1" value="{{ $news->link_1 }}"
                               name="link_1" required maxlength="255">
                    </div>
                </div>
                <div class="form-group">
                    <label for="link_2" class="col-sm-2 control-label">Link Relacionado</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="link_2" value="{{ $news->link_2 }}"
                               name="link_2" maxlength="255">
                    </div>
                </div>
                <div class="form-group">
                    <label for="link_3" class="col-sm-2 control-label">Link PDF</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="link_3" value="{{ $news->link_3 }}"
                               name="link_3" maxlength="255">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">{{ $news->id ? 'Editar Noticia' : 'Crear Noticia' }}</button>
                        <a href="{{ route('news.index') }}" class="btn btn-default">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        function setCharCounter(input) {
            $('#' + input).on('keyup', function () {
                let max = $(this).attr('maxlength');
                let current = $(this).val().length;
                let left = parseInt(max) - parseInt(current);

                $('.' + input + '-counter b').text(left);
            });
        }

        setCharCounter('summary');
        setCharCounter('sub_summary');
        setCharCounter('sub_title');
        setCharCounter('title');
    </script>
@endsection