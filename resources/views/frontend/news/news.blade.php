@foreach($news as $new)
    <div class="col-md-12">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">{{ $new->category->name }}</strong>
                <div class="mb-1 text-muted">
                    {{ $new->created_at->diffForHumans() }}
                    por
                    <a href="{{ route('profile.show', ['profile' => $new->user->id]) }}}">{{ utf8_decode($new->getAuthor()) }}</a>
                </div>
                <h3 class="mb-0">
                    <a class="text-dark" href="#">{{ utf8_decode($new->title) }}</a>
                </h3>
                <p class="card-text mb-auto">{{ !empty($new->sub_title) ? utf8_decode($new->sub_title) : str_limit(utf8_decode($new->summary), 200) }}</p>

                <div class="btn-group">
                    <a class="btn btn-secondary btn-xs" href="{{ route('news.show', [$new->id]) }}">Leer más</a>
                    @if(Auth::check() && $new->user && $new->user->id === Auth::user()->id)
                        <a href="{{ route('news.edit', [$new->id]) }}" class="btn btn-primary btn-xs">
                            Editar
                        </a>
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
                        <button onclick="deleteNew({{ $new->id }})" class="btn btn-danger btn-xs">
                            Borrar
                        </button>
                    @endif
                </div>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="{{ $new->image_url }}">
        </div>
    </div>
@endforeach

<div class="col-md-12">
    <div class="d-flex justify-content-center">{{ $news->links() }}</div>
</div>
