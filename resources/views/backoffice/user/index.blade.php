@extends('backoffice.layouts.app')

@section('section', 'Usuarios')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table class="table table-bordered table-striped table-js" width="100%">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Turno</th>
                                <th>Comisión</th>
                                <th>Año</th>
                                <th>Sede</th>
                                <th>Rol</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        <a href="{{ route('backoffice.user.edit', ['id'=> $user->id]) }}">
                                            {{ $user->name }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('backoffice.user.edit', ['id'=> $user->id]) }}">
                                            {{ $user->email }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('backoffice.user.edit', ['id'=> $user->id]) }}">
                                            {{ $user->turn->name }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('backoffice.user.edit', ['id'=> $user->id]) }}">
                                            {{ $user->comission }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('backoffice.user.edit', ['id'=> $user->id]) }}">
                                            {{ $user->year }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('backoffice.user.edit', ['id'=> $user->id]) }}">
                                            {{ $user->campus->name }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('backoffice.user.edit', ['id'=> $user->id]) }}">
                                            {{ $user->getRoleName() }}
                                        </a>
                                    </td>
                                    <td>
                                        <button class="btn btn-xs btn-{{ $user->validated ? 'success' : 'danger'}}">
                                            {{ $user->validated ? 'Validado' : 'No Validado'}}
                                        </button>
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