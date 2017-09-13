<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('backoffice/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backoffice/css/skin-purple.min.css') }}">
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{ route('backoffice.dashboard') }}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>B</b>CT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Boletín</b> CyT</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        @include('backoffice.layouts.header')
    </header>
    <!-- Left side column. contains the logo and sidebar -->
@include('backoffice.layouts.nav')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Panel de Control
                <small>@yield('section')</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>150</h3>

                            <p>Noticias</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pricetag"></i>
                        </div>
                        <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Usuarios Validados</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-people"></i>
                        </div>
                        <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>44</h3>

                            <p>Usuarios a Validar</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Reportes</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
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

                            <div class="box-tools pull-right">
                                <ul class="pagination pagination-sm inline">
                                    <li><a href="#">&laquo;</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <ul class="todo-list">
                                <li>
                                    <!-- drag handle -->
                                    <span class="handle">
                                            <i class="fa fa-ellipsis-v"></i>
                                            <i class="fa fa-ellipsis-v"></i>
                                          </span>
                                    <!-- checkbox -->
                                    <input type="checkbox" value="">
                                    <!-- todo text -->
                                    <span class="text">Design a nice theme</span>
                                    <!-- Emphasis label -->
                                    <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                                    <!-- General tools such as edit or delete-->
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="">
                                    <span class="text">Make the theme responsive</span>
                                    <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="">
                                    <span class="text">Let theme shine like a star</span>
                                    <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="">
                                    <span class="text">Let theme shine like a star</span>
                                    <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="">
                                    <span class="text">Check your messages and notifications</span>
                                    <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="">
                                    <span class="text">Let theme shine like a star</span>
                                    <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix no-border">
                            <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item
                            </button>
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

                            <div class="box-tools pull-right">
                                <ul class="pagination pagination-sm inline">
                                    <li><a href="#">&laquo;</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <ul class="todo-list">
                                <li>
                                    <!-- drag handle -->
                                    <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <!-- checkbox -->
                                    <input type="checkbox" value="">
                                    <!-- todo text -->
                                    <span class="text">Design a nice theme</span>
                                    <!-- Emphasis label -->
                                    <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                                    <!-- General tools such as edit or delete-->
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="">
                                    <span class="text">Make the theme responsive</span>
                                    <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="">
                                    <span class="text">Let theme shine like a star</span>
                                    <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="">
                                    <span class="text">Let theme shine like a star</span>
                                    <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="">
                                    <span class="text">Check your messages and notifications</span>
                                    <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="">
                                    <span class="text">Let theme shine like a star</span>
                                    <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix no-border">
                            <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item
                            </button>
                        </div>
                    </div>
                    <!-- /.box -->
                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.8
        </div>
        <strong>
            Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.
        </strong> All rightsreserved.
    </footer>
</div>
<!-- ./wrapper -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script> $.widget.bridge('uibutton', $.ui.button);</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('backoffice/js/app.min.js') }}"></script>

</body>
</html>
