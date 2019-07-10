@extends('layouts.app')
@section('page-title', '404')
@section('content')
@section('title', 'Error 404')
	<div class="header-section app-hero" style="background-position: center bottom; background-image: url('{{ asset('storage/images/colombia-3-banner.jpg') }}');">
	    <div class="container">
	        <div class="hero-content app-hero-content text-center">
	            <div class="row justify-content-md-center">
	                <div class="col-md-10">
	                    <h1 class="wow fadeInUp text-white" data-wow-delay="0s">@yield('title')</h1>
	                    <nav aria-label="breadcrumb">
	                      <ol class="breadcrumb bg-transparent justify-content-center">
	                        <li class="breadcrumb-item active">
	                            <a href="{{url('/')}}" class="equiser-color-2">
	                                Inicio
	                            </a>
	                        </li>
	                      </ol>
	                    </nav>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<div class="main" id="main">
		<div class="container py-5 text-center">
			<h1 class="mb-5 font-weight-bold">¡La página que estas buscando no existe!</h1>
			<a class="btn btn-primary btn-equiser btn-action smoth-scroll" href="{{url('/')}}">Volver a la página principal</a>
		</div>
    </div>
@endsection