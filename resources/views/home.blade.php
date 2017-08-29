@extends('layouts.app')

@section('content')
    @for($i=0; $i < 3; $i++)
        <div class="panel panel-info">
            <div class="panel-body no-padding">
                <div class="col-md-3">
                    <img class="img-thumbnail" src="/"/>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <b>Title</b>
                        </div>
                        <div class="panel-body">
                            <p>Sub-Summary</p>
                            <p>Summary</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-info btn-sm" target="_blank">Nota Completa</a>
                                <a href="#" class="btn btn-info btn-sm" target="_blank">Relacionado</a>
                                <a href="#" class="btn btn-info btn-sm" target="_blank">Formato PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-5">
                        <strong>Autor:&nbsp;</strong>
                        <a href="/user/statistics/index.php?id=1">
                            Sebastian Portesi ( 2017 A - TN )
                        </a>
                    </div>
                    <div class="col-md-3 text-center">
                        <strong>Sede:&nbsp;</strong> Centro
                    </div>
                    <div class="col-md-4 text-right">
                        <strong>Fecha:&nbsp;</strong> 2017-04-08
                    </div>
                </div>
            </div>
        </div>
    @endfor

@endsection
