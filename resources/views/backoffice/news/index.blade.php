@extends('backoffice.layouts.app')

@section('section', ucwords('Noticias'))

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Listado de Noticias</h4>
        </div>

        <div class="panel-body no-padding">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th class="text-center">Imágen</th>
                    <th>Categoría</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th class="text-center">Links</th>
                    <th class="text-center">Acciones</th>
                </tr>
                </thead>

                <tbody>
                @foreach($news as $new)
                    <tr>
                        <td class="text-center"><img src="{{ $new->image_url }}" alt="Imagen" style="width: 25px;"></td>
                        <td>{{ $new->category->name }}</td>
                        <td>{{ str_limit($new->title, 75) }}</td>
                        <td>
                            <a href="{{ route('backoffice.user.edit', ['id' => $new->user->id]) }}">
                                {{ utf8_decode($new->getAuthor()) }}
                            </a>
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
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="" class="btn btn-primary btn-xs"><i class="fa fa-trash"></i></a>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="fa fa-bars"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
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