<aside class="col-md-3 blog-sidebar">
    <form action="{{ route('search') }}" method="get">
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Buscar Noticias..."/>
                <span class="input-group-prepend">
                        <button type="submit" class="input-group-text">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
            </div>
        </div>
    </form>

    <div class="text-center">
        <a href="{{ Storage::url('files/criterios_para_publicar.doc') }}" download="criterios_para_publicar.doc"
           class="btn btn-primary">
            Criterios para publicar
        </a>
    </div>

    <br>

    <div><h4><i>Categorias</i></h4></div>
    <div id="categories" class="text-left">
        <div class="list-group">
            @foreach($categories as $category)
                <a href="{{ route('category', ['id' => $category->id]) }}" class="list-group-item">
                    {{ str_limit(utf8_decode($category->name), $limit = 22, $end = '...') }}
                    <span class="badge">{{ $category->news_count }}</span>
                </a>
            @endforeach
        </div>
    </div>

</aside><!-- /.blog-sidebar -->