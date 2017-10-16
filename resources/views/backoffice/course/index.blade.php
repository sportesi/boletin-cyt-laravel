@extends('backoffice.layouts.app')

@section('section', 'Cursos')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table class="table table-bordered table-striped datatable-js" width="100%">
                        <thead>
                        <tr>
                            <th>Curso</th>
                            <th>Turno</th>
                            <th>Comisión</th>
                            <th>Sede</th>
                            <th>Año</th>
                            <th>Alumnos</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>
                                    {{ \App\Utils\StringHelper::courseName($course) }}
                                </td>
                                <td>{{ $course->turn }}</td>
                                <td>{{ $course->comission }}</td>
                                <td>{{ $course->campus }}</td>
                                <td>{{ $course->year }}</td>
                                <td>{{ $course->count }}</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pie-chart"></i>
                                        Ver Reporte
                                    </a>
                                    <a href="{{ route('backoffice.user.index', ['course' => $course]) }}"
                                       class="btn btn-primary btn-xs">
                                        <i class="fa fa-users"></i>
                                        Ver Alumnos
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection