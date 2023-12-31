@extends('layouts.app')
@section('css')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">

@endsection
@section('content')
<div class="container">
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <div class="card">
  

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label style="font-size:15px" for="email" class="col-md-4 col-form-label text-md-right">Email:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="font-size:15px" for="password" class="col-md-4 col-form-label text-md-right">Contraseña:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <!--
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                       Recordar contraseña
                                    </label>
                                    !-->
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    INGRESAR
                                </button>
                              <!---
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                       ¿Olvidaste tu contraseña?
                                    </a>
                                @endif
                                !-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div id="logologin" >
                    <img  id="imglogologin" src="{{ asset('img/logo.png') }}">
             </div>
        </div>
    </div>
</div>
@endsection
