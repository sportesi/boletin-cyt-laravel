@extends('frontend.layouts.app')


@section('content')

    <div class="d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Iniciar Sesión
                </div>

                <div class="card-body">
                    <form class="px-4 py-3" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                                   placeholder="email@ejemplo.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormPassword1">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password"
                                   placeholder="Contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    </form>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('register') }}">¿Sos nuevo por aquí? ¡Registrate!</a>
                    <a class="dropdown-item" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                </div>
            </div>
        </div>
    </div>



@endsection