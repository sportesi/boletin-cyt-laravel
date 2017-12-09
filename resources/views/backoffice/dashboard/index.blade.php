@extends('backoffice.layouts.app')

@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{ $newsCount }}</h3>

                    <p>Noticias</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pricetag"></i>
                </div>
                <a href="{{ route('home') }}" class="small-box-footer" target="_blank">
                    Ver más <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ $validatedUsers }}</h3>

                    <p>Usuarios Validados</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-people"></i>
                </div>
                <a href="{{ route('backoffice.user.index') }}" class="small-box-footer">
                    Ver más <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{ $nonValidatedUsers }}</h3>

                    <p>Usuarios a Validar</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ route('backoffice.user.index') }}" class="small-box-footer">
                    Ver más <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{ $categories }}</h3>

                    <p>Categorías</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{ route('backoffice.category.index') }}" class="small-box-footer">
                    Ver más <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
            <!-- TO DO List -->
            <div class="box box-primary">
                <div class="box-header">
                    <i class="ion ion-clipboard"></i>

                    <h3 class="box-title">Últimas Noticias</h3>

                    <div class="box-tools pull-right"></div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ul class="todo-list">
                        @foreach($recentNews as $new)
                            <li>
                                <span class="text">{{ utf8_decode($new->title) }}</span>
                                <small class="text text-info"><i
                                            class="fa fa-clock-o"></i> {{ $new->created_at->diffForHumans() }}</small>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                    <a href="{{ route('home') }}" target="_blank" class="btn btn-default pull-right">
                        <i class="fa fa-external-link"></i> Ver más
                    </a>
                </div>
            </div>
            <!-- /.box -->
        </section>
        <!-- /.Left col -->

        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
            <!-- TO DO List -->
            <div class="box box-primary">
                <div class="box-header">
                    <i class="ion ion-clipboard"></i>

                    <h3 class="box-title">Últimas Registraciones</h3>

                    <div class="box-tools pull-right"></div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ul class="todo-list">
                        @foreach($recentUsers as $user)
                            <li>
                                <span class="text">{{ $user->name }}</span>
                                <small class="text">
                                    <i>({{ $user->getComission() . ' ' . $user->turn->name }})</i>
                                </small>
                                <small class="text text-info">
                                    <i class="fa fa-clock-o"></i> {{ $user->created_at->diffForHumans() }}
                                </small>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                    <a href="{{ route('backoffice.user.index') }}" class="btn btn-default pull-right">
                        <i class="fa fa-external-link"></i> Ver más
                    </a>
                </div>
            </div>
            <!-- /.box -->
        </section>
        <!-- right col -->
    </div>
    <!-- /.row (main row) -->
@endsection