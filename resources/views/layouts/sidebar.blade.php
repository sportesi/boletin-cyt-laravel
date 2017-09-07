<div class="panel panel-info">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('search') }}" method="get">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Buscar Noticias..."/>
                            <span class="input-group-addon" style="padding: 0;">
                                <button type="submit" style="border: 0; background: transparent;">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12">
                <a href="{{ Storage::url('files/criterios_para_publicar.doc') }}" download="criterios_para_publicar.doc"
                   class="btn btn-primary">
                    Criterios para publicar
                </a>
            </div>
            <div class="col-md-12">
                <div><h2><strong>Categorias</strong></h2></div>
                <div id="categories" class="text-left">
                    <div class="list-group">
                        @foreach($categories as $category)
                            <a href="{{ route('category', ['id' => $category->id]) }}" class="list-group-item">
                                {{ str_limit($category->name, $limit = 22, $end = '...') }}
                                <span class="badge">{{ $category->news_count }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>