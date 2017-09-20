@extends('backoffice.layouts.app')

@section('section', 'Usuarios')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Turno</th>
                            <th>Comisión</th>
                            <th>Año</th>
                            <th>Sede</th>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->turn->name }}</td>
                                <td>{{ $user->comission }}</td>
                                <td>{{ $user->year }}</td>
                                <td>{{ $user->campus->name }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection