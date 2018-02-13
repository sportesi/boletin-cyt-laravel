@extends('frontend.layouts.app')

@section('section', ucwords($user->name))

@section('content')
    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary">
                <div class="card-body box-profile">
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
            <!-- /.card -->
            <br>
            <!-- About Me card -->
            <div class="card card-primary">
                <div class="card-header with-border">
                    <h3 class="card-title">Acerca de Mi</h3>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <p>
                        <strong><i class="fa fa-book margin-r-5"></i> Curso</strong>
                        <span class="text-muted">{{ $user->getComission() }} {{ $user->turn->name }}</span>
                    </p>

                    <p>
                        <strong><i class="fa fa-map-marker margin-r-5"></i> Sede</strong>
                        <span class="text-muted">{{ $user->campus->name }}</span>
                    </p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card card-info">
                <div class="card-body">
                    <div class="">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#timeline" data-toggle="tab">Últimas Noticias</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane timeline" id="timeline">
                                <br>
                                @include('frontend.news.news')
                                @if (!count($news))
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