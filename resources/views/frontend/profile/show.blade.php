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
                            @if (Auth::user() === $user->id)
                                <li><a href="#settings" data-toggle="tab">Settings</a></li>
                            @endif
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
                                <div class="text-center">{{ $news->links() }}</div>
                            </div>
                            <!-- /.tab-pane -->
                            @if (Auth::user() === $user->id)
                                <div class="tab-pane" id="settings">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Name</label>

                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputName"
                                                       placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail"
                                                       placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Name</label>

                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName"
                                                       placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputExperience"
                                                   class="col-sm-2 control-label">Experience</label>

                                            <div class="col-sm-10">
                                            <textarea class="form-control" id="inputExperience"
                                                      placeholder="Experience"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSkills"
                                                       placeholder="Skills">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> I agree to the <a href="#">terms and
                                                            conditions</a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        @endif
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