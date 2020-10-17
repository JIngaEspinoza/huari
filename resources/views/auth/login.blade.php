@extends('layouts.app')

@section('styles')
  <!-- Font Awesome -->
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
@endsection

@section('css')
  input:focus, input.form-control:focus {

    outline:none !important;
    outline-width: 0 !important;
    box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
  }
@endsection

@section('content')
<div class="d-flex justify-content-center align-items-center flex-column" style="min-height: 100vh;">
  <div class="card">
    <div class="card card-header card-primary h4" style="background:#0088CC; color: #FFF;">
      <p class="card-title text-center ">Acceso al Sistema</p>
    </div>

    <div class="card-body" style="width:480px;">
      <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="form-group mb-3">
          <label>Correo electrónico</label>
          <div class="input-group">
              <input id="email" type="email" class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
              <span class="input-group-append">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
              </span>
          </div>
          @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
      </div>

      <div class="form-group mb-3 {{ $errors->has('password') ? ' is-invalid' : '' }}">
          <label>Contraseña</label>
          <div class="input-group">
            <input id="password" type="password" class="form-control form-control-lg" name="password" required>
            <span class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-lock"></i>
              </span>
            </span>                
          </div>
          @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
      </div>

      <div class="row">
          <div class="col-sm-8">
            <div class="checkbox-custom checkbox-default">
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">Recordarme</label>
            </div>
          </div>
          <div class="col-sm-4 text-right">
            <button type="submit" class="btn btn-primary mt-2 mr-0" style="background:#0088CC;">Iniciar sesión</button>
          </div>
      </div>

      {{--         <div class="form-group row mb-0">
          <div class="col-md-8 offset-md-4">
              <button type="submit" class="btn btn-primary">
                  {{ __('Ingresar') }}
              </button>

              @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Olvidaste tu contraseña?') }}
                  </a>
              @endif
          </div>
      </div> --}}
      </form>
    </div>
  </div>
  <p class="text-center text-muted mt-3 mb-3">&copy; Copyright {{ date('Y') }}. Todos los derechos reservados</p>
</div>
@endsection
