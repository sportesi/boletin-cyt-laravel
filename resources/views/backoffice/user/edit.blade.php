@extends('backoffice/layouts/app')

@section('section', $user->id ? 'Editar Usuario' : 'Crear Usuario')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    @php
                        if ($user->id) {
                            $formRoute = route('backoffice.user.update', ['id' => $user->id]);
                        } else {
                            $formRoute = route('backoffice.user.store');
                        }
                    @endphp
                    <form action="{{ $formRoute }}" method="post">
                        {{ csrf_field() }}
                        @if($user->id)
                            {{ method_field('PUT') }}
                        @endif

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Nombre y Apellido</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       value="{{ $user->name }}"/>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                       value="{{ $user->email }}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="turn">Turno</label>
                                <select name="turn" id="turn" class="form-control" required>
                                    <option value="">Seleccione...</option>
                                    @foreach($turns as $turn)
                                        <option value="{{ $turn->id }}" {{ $turn->id === $user->turn_id ? 'selected' : '' }}>
                                            {{ $turn->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="campus">Sede</label>
                                <select name="campus" id="campus" class="form-control" required>
                                    <option value="">Seleccione...</option>
                                    @foreach($campuses as $campus)
                                        <option value="{{ $campus->id }}" {{ $campus->id === $user->campus_id ? 'selected' : '' }}>
                                            {{ $campus->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="course_year">Año (Cursada)</label>
                                <select name="course_year" id="course_year" class="form-control" required>
                                    <option value="">Seleccione...</option>
                                    @foreach(['1', '2', '3', '4', '5'] as $a)
                                        <option value="{{ $a }}" {{ $user->course_year == $a ? 'selected' : '' }}>
                                            {{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="comission">Comisión</label>
                                <select name="comission" id="comission" class="form-control" required>
                                    <option value="">Seleccione...</option>
                                    @foreach(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K'] as $a)
                                        <option value="{{ $a }}" {{ $user->comission == $a ? 'selected' : '' }}>
                                            {{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="semester">Cuatrimestre</label>
                                <select name="semester" id="semester" class="form-control" required>
                                    <option value="">Seleccione...</option>
                                    @foreach(['1', '2'] as $a)
                                        <option value="{{ $a }}" {{ $user->semester == $a ? 'selected' : '' }}>
                                            {{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="year">Año (Calendario)</label>
                                <select name="year" id="year" class="form-control" required>
                                    <option value="">Seleccione...</option>
                                    @for($i = 2000; $i <= 2025; $i++)
                                        <option value="{{ $i }}" {{ $user->year === $i ? 'selected' : '' }}>
                                            {{ $i }}
                                        </option>
                                    @endfor
                                </select>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select name="role" id="role" class="form-control" required>
                                    <option value="">Seleccione...</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}"
                                                {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                            {{ $role->display_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Opciones</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="validated" name="validated"
                                                    {{ $user->validated === 1 ? 'checked' : '' }}> Validado
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <hr>
                            <div class="form-group">
                                <button class="btn btn-primary">Guardar</button>
                                <a href="{{ route('backoffice.user.index') }}" class="btn btn-default">Cancelar</a>
                                @if($user->id)
                                    <button type="button" onclick="deleteUser();" class="btn btn-danger">Eliminar</button>
                                @endif
                            </div>
                        </div>
                    </form>
                    @if($user->id)
                        <form action="{{ route('backoffice.user.destroy', [$user->id]) }}" method="post"
                              class="js-form-delete">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                        <script>
                            function deleteUser() {
                                if (confirm('¿Está seguro de eliminar este usuario?')) {
                                    $('.js-form-delete').submit();
                                }
                            }
                        </script>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection