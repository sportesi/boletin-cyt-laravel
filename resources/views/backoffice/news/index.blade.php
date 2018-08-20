@extends('backoffice.layouts.app')

@section('section', ucwords('Noticias'))

@section('content')

    <div class="panel panel-info">
        <div class="panel-body">
            <form action="" method="GET">
                <div class="col-md-5">
                    <select class="form-control select2" name="user">
                        <option value="">Filtrar por usuario</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ request()->get('user') == $user->id ? 'selected' : '' }}>
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-5">
                    <select class="form-control select2" name="category">
                        <option value="">Filtrar por categoría</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ request()->get('category') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 text-center">
                    <button class="btn btn-info">
                        <i class="fa fa-search"></i> Filtrar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Listado de Noticias</h4>
        </div>

        <div class="panel-body no-padding">
            <table class="table table-bordered table-striped table-font-sm">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Categoría</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Fecha</th>
                    <th class="text-center">Links</th>
                    <th class="text-center">Acciones</th>
                </tr>
                </thead>

                <tbody>
                @foreach($news as $new)
                    <tr>
                        <td>{{ $new->id }}</td>
                        <td>{{ $new->category ? $new->category->name : '' }}</td>
                        <td>{{ App\Utils\StringHelper::title($new->title, 60) }}</td>
                        <td>
                            @if ($new->user)
                                <a href="{{ route('backoffice.user.edit', ['id' => $new->user->id]) }}">
                                    {{ utf8_decode($new->getAuthor()) }}
                                </a>
                            @endif
                        </td>
                        <td>
                            {{ $new->created_at->format('d-m-Y') }}
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ $new->link_1 }}" target="_blank" class="btn btn-info btn-xs">Noticia</a>
                                <a href="{{ $new->link_2 }}" target="_blank" class="btn btn-info btn-xs">Relacionada</a>
                                <a href="{{ $new->link_3 }}" target="_blank" class="btn btn-info btn-xs">PDF</a>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ route('backoffice.news.edit', ['id' => $new->id]) }}" class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i> Editar
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="col-md-12 text-right">
                {{ $news->links() }}
            </div>
        </div>
    </div>

@endsection