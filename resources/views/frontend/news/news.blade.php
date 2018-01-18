@foreach($news as $new)
    <div class="panel panel-info">
        @if(Auth::check() && $new->user && $new->user->id === Auth::user()->id)
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3 pull-right text-right">
                        <a href="{{ route('news.edit', [$new->id]) }}" class="btn btn-primary btn-xs">
                            <i class="fa fa-pencil"></i> Editar
                        </a>
                        <button onclick="deleteNew({{ $new->id }})" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash"></i> Borrar
                        </button>
                        <form action="{{ route('news.destroy', [$new->id]) }}" method="post"
                              class="hide js-form-new-{{ $new->id }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                        <script>
                            function deleteNew(newsId) {
                                if (confirm('¿Estás seguro de borrar esta noticia?')) {
                                    $('.js-form-new-' + newsId).submit();
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        @endif
        <div class="panel-body no-padding">
            <div class="col-md-3">
                <img class="img-thumbnail" src="{!! $new->image_url !!}"/>
            </div>
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <b>{{ utf8_decode($new->title) }}</b>
                        <p>
                            <small>{{ utf8_decode($new->sub_title) }}</small>
                        </p>
                    </div>
                    <div class="panel-body">
                        <p>{{ utf8_decode($new->summary) }}</p>
                        <p><small>{{ utf8_decode($new->sub_summary) }}</small></p>
                        <div class="text-center">
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
        <div class="panel-footer">
            <div class="row">
                <div class="col-md-5">
                    @if($new->user)
                        <strong>Autor:&nbsp;</strong>
                        <a href="{{ route('profile.show', ['profile' => $new->user->id]) }}">
                            {{ utf8_decode($new->getAuthor()) }}
                        </a>
                    @endif
                </div>
                <div class="col-md-3 text-center">
                    @if($new->user && $new->user->campus)
                        <strong>Sede:&nbsp;</strong> {{ $new->user->campus->name }}
                    @endif
                </div>
                <div class="col-md-4 text-right">
                    <strong>Fecha:&nbsp;</strong> {{ $new->date }}
                </div>
            </div>
        </div>
    </div>
@endforeach

<div class="text-center">{{ $news->links() }}</div>