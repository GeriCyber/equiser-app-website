@extends('layouts.app')
@section('page-title', 'Bienvenido a Equiser')
@section('content')
	<div class="container-fluid welcome" style="background-image: url('{{ asset('storage/images/equiser_gruas002x.png') }}');">
		<div class="container h-100">
			<div class="hero-content app-hero-content text-center pt-5">
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                    	<img class="logo wow fadeInUp" data-wow-delay="0s" src="{{asset('images')}}\logo.png" alt="Equiser" width="350">
                        <h1 class="wow fadeInUp text-white welcome-txt" data-wow-delay="0.2s">
                            {{__('msg.welcome-view-title')}}
                        </h1>
                        <p class="wow fadeInUp text-white equiser-color-2 font-weight-bold" data-wow-delay="0.3s">
                            {{__('msg.select-country')}}
                        </p>
                    </div>
                    <div class="col-md-12">
                    	<ul class="list-inline">
                        	<li class="list-inline-item">
                                <form action="{{ route('welcome.country', 'country') }}" method="post">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" id="country" name="country" value="venezuela">
                                    <button class="btn-transparent" type="submit" title="Venezuela"> <img src="{{asset('images')}}\iconos\venezuela.svg" width="100"></button>
                                </form>
                            </li>
	                        <li class="list-inline-item">
                                <form action="{{ route('welcome.country', 'country') }}" method="post">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" id="country" name="country" value="colombia">
                                    <button class="btn-transparent" type="submit" title="Colombia"> <img src="{{asset('images')}}\iconos\colombia.svg" width="100"></button>
                                </form>
                            </li>
	                        <li class="list-inline-item">
                                <form action="{{ route('welcome.country', 'country') }}" method="post">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" id="country" name="country" value="panama">
                                    <button class="btn-transparent" type="submit" title="Panamá"> <img src="{{asset('images')}}\iconos\panama.svg" width="100"></button>
                                </form>
                            </li>
	                        <li class="list-inline-item">
                                <form action="{{ route('welcome.country', 'country') }}" method="post">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" id="country" name="country" value="usa">
                                    <button class="btn-transparent" type="submit" title="Estados Unidos"> <img src="{{asset('images')}}\iconos\united-states.svg" width="100"></button>
                                </form>
                            </li>
	                    </ul>
                    </div>
                </div>
            </div>
		</div>
	</div>
@endsection