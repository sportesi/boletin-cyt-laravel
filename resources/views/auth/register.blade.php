@extends('frontend.layouts.app')

@section('section', 'Registrarse')

@section('content')
    <div class="card">
        <div class="card-header">
            Registrarse como nuevo usuario
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-row">
                    <div class="col">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                                   required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block"> <strong>{{ $errors->first('name') }}</strong> </span>
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail</label>
                            <input id="email" type="email" class="form-control" name="email"
                                   value="{{ old('email') }}"
                                   required>
                            @if ($errors->has('email'))
                                <span class="help-block"> <strong>{{ $errors->first('email') }}</strong> </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Contraseña</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block"> <strong>{{ $errors->first('password') }}</strong> </span>
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="password-confirm" class="control-label">Confirmar Contraseña</label>
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation"
                                   required>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="turn" class="control-label">Turno</label>
                            <select name="turn" id="turn" class="form-control" required>
                                <option value="">Seleccione...</option>
                                <option value="1">TM</option>
                                <option value="2">TT</option>
                                <option value="3">TN</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="campus" class="control-label">Sede</label>
                            <select name="campus" id="campus" class="form-control" required>
                                <option value="">Seleccione...</option>
                                <option value="1">Centro</option>
                                <option value="3">Lomas de Zamora</option>
                                <option value="4">Castelar</option>
                                <option value="8">Boulogne</option>
                                <option value="10">Rosario</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="course_year" class="control-label">Año (Cursada)</label>
                            <select name="course_year" id="course_year" class="form-control" required>
                                <option value="">Seleccione...</option>
                                @for($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="comission" class="control-label">Comisión</label>
                            <select name="comission" id="comission" class="form-control" required>
                                <option value="">Seleccione...</option>
                                @foreach(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K'] as $a)
                                    <option value="{{ $a }}">
                                        {{ $a }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="semester" class="control-label">Cuatrimestre</label>
                            <select name="semester" id="semester" class="form-control" required>
                                <option value="">Seleccione...</option>
                                @foreach(['1', '2'] as $a)
                                    <option value="{{ $a }}">
                                        {{ $a }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="year" class="control-label">Año (Calendario)</label>
                            <select name="year" id="year" class="form-control" required>
                                <option value="">Seleccione...</option>
                                @for($i = 2000; $i <= 2025; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>

            </form>
        </div>
    </div>
@endsection
