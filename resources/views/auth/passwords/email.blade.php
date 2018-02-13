@extends('frontend.layouts.app')

@section('section', 'Reiniciar Contraseña')

@section('content')
    <div class="card">
        <div class="card-header">
            ¿Olvidaste tu contraseña?
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}

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

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Enviar link de reinicio de contraseña
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
