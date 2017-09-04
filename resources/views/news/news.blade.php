@foreach($news as $new)
    <div class="panel panel-info">
        <div class="panel-body no-padding">
            <div class="col-md-3">
                <img class="img-thumbnail" src="{!! $new->image_url !!}"/>
            </div>
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <b>{{ utf8_decode($new->title) }}</b>
                    </div>
                    <div class="panel-body">
                        <p>{{ utf8_decode($new->sub_summary) }}</p>
                        <p>{{ utf8_decode($new->summary) }}</p>
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
                        <a href="{{--/user/statistics/index.php?id=1--}}">
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
                    <strong>Fecha:&nbsp;</strong> {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $new->date)->format('Y-m-d') }}
                </div>
            </div>
        </div>
    </div>
@endforeach

{{ $news->links() }}