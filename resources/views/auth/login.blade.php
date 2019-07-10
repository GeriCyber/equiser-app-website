@extends('layouts.app')
@section('page-title', 'Iniciar Sesión')
@section('content')
@section('title', 'Iniciar Sesión')
@section('parent', 'Iniciar Sesión')
@section('breadcrumb_url', '/login')

    @include('layouts.header.guest')
    <div class="main" id="main">
        <div class="container">
            <div class="row h-100 d-flex align-items-center justify-content-center py-5">
                <div class="col-md-8">

                    <div class="text-center pb-4">
                        <img class="" src="{{asset('images')}}\logo.png" alt="Equiser" width="220">
                    </div>
                    <h5 class="text-center font-weight-bold pb-4">Completa el formulario para iniciar sesión</h5>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <input id="email" type="email" class="mb-2 form-control @error('email') is-invalid @enderror" name="email" placeholder="Correo Electrónico" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control mb-3 @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6 text-center">
                                <button type="submit" class="btn btn-equiser-4">
                                    {{ __('Iniciar Sesión') }}
                                </button> 
                            </div>    
                        </div>

                    </form>
                    
            </div>
        </div>
    </div>
@endsection
