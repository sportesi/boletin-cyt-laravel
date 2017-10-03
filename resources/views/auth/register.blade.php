@extends('layouts.app')

@section('section', 'Registrarse')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Nombre</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
                               autofocus>
                        @if ($errors->has('name'))
                            <span class="help-block"> <strong>{{ $errors->first('name') }}</strong> </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                               required>
                        @if ($errors->has('email'))
                            <span class="help-block"> <strong>{{ $errors->first('email') }}</strong> </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Contraseña</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block"> <strong>{{ $errors->first('password') }}</strong> </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="turn" class="col-md-4 control-label">Turno</label>
                    <div class="col-md-6">
                        <select name="turn" id="turn" class="form-control" required>
                            <option value="">Seleccione...</option>
                            <option value="1">TM</option>
                            <option value="2">TT</option>
                            <option value="3">TN</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="campus" class="col-md-4 control-label">Sede</label>
                    <div class="col-md-6">
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

                <div class="form-group">
                    <label for="comission" class="col-md-4 control-label">Comisión</label>
                    <div class="col-md-6">
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

                <div class="form-group">
                    <label for="year" class="col-md-4 control-label">Año</label>
                    <div class="col-md-6">
                        <select name="year" id="year" class="form-control" required>
                            <option value="">Seleccione...</option>
                            @for($i = 2010; $i <= 2025; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Registrarse
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
