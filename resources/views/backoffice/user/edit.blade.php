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
                        <div class="form-group">
                            <label for="name">Nombre y Apellido</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}"/>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
                        </div>

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

                        <div class="form-group">
                            <label for="year">Año</label>
                            <select name="year" id="year" class="form-control" required>
                                <option value="">Seleccione...</option>
                                @for($i = 2010; $i <= 2025; $i++)
                                    <option value="{{ $i }}" {{ $user->year === $i ? 'selected' : '' }}>
                                        {{ $i }}
                                    </option>
                                @endfor
                            </select>
                        </div>

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

                        <div class="form-group">
                            <button class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection