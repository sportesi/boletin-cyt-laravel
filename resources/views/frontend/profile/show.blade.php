@extends('frontend.layouts.app')

@section('section', ucwords($user->name))

@section('content')
    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="panel panel-primary">
                <div class="panel-body box-profile">
                    <img class="profile-user-img img-responsive img-circle"
                         src="{{ asset('backoffice/img/avatar5.png') }}" alt="User profile picture">

                    <h3 class="profile-username text-center">{{ $user->name }}</h3>

                    <p class="text-muted text-center">{{ $user->getRoleName() }}</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Noticias</b> <a class="pull-right">{{ count($user->news) }}</a>
                        </li>
                    </ul>

                </div>
            </div>
            <!-- /.panel -->

            <!-- About Me panel -->
            <div class="panel panel-primary">
                <div class="panel-heading with-border">
                    <h3 class="panel-title">Acerca de Mi</h3>
                </div>
                <!-- /.panel-heading -->

                <div class="panel-body">
                    <p>
                        <strong><i class="fa fa-book margin-r-5"></i> Curso</strong>
                        <span class="text-muted">{{ $user->getComission() }} {{ $user->turn->name }}</span>
                    </p>

                    <p>
                        <strong><i class="fa fa-map-marker margin-r-5"></i> Sede</strong>
                        <span class="text-muted">{{ $user->campus->name }}</span>
                    </p>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="panel panel-info">
                <div class="panel-body">
                    <div class="">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#timeline" data-toggle="tab">Últimas Noticias</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane timeline" id="timeline">
                                <br>
                                @foreach($news as $new)
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="col-md-12">
                                                <div class="pull-left">
                                                    <b>{{ $new->category->name }}</b>
                                                </div>
                                                <div class="pull-right">
                                                    <span class="text-muted"><i>{{ $new->created_at->diffForHumans() }}</i></span>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-md-12">
                                                <div class="col-md-2">
                                                    <img class="img-circle" src="{!! $new->image_url !!}"/>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            {{ str_limit($new->title, 50) }}
                                                        </div>
                                                        <div class="panel-body">
                                                            {{ str_limit($new->summary, 50) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @if (count($news))
                                    <div class="text-center">{{ $news->links() }}</div>
                                @else
                                    <div class="well">
                                        <b>Este usuario todavia no publico ninguna noticia.</b>
                                    </div>
                                @endif
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
@endsection