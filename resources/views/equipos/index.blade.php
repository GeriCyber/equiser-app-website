@extends('layouts.app')
@section('page-title', 'Equipos')
@section('content')
@section('title', __('msg.menu-equipments'))
@section('parent',  __('msg.menu-equipments'))
@section('breadcrumb_url', '/equipos')

    @include('layouts.header.guest')

    <div class="main" id="main">
    	<div class="container-fluid my-5">
            <h1 class="f-size-22 py-4 text-center equiser-color wow fadeInUp" data-wow-delay="0s">{{__('msg.available-equipments')}} <b>{{Session::get('country')=='usa' ? strtoupper(Session::get('country')) : ucfirst(Session::get('country'))}}</b></h1>
           <div class="row px-lg-5 px-xl-5 wow fadeInUp" data-wow-delay="0.2s">
            @if($equipos->count())
            @foreach($equipos as $equipo)
                <div class="col-sm-6">
                    <figure class="effect-jazz square">
                        <img class="square-img img-fluid" src="{{$equipo->featured_image_url}}" alt="img27">
                        <figcaption>
                            <h2 class="text-white"><span>@if(App::isLocale('es')){{str_limit($equipo->name, 20)}} @else {{str_limit($equipo->name_en, 20)}}@endif</span></h2>
                            <p class="text-white">@if(App::isLocale('es')){!! str_limit($equipo->description, 70) !!} @else {!! str_limit($equipo->description_en, 70) !!}@endif</p>
                            <a href="{{ LaravelLocalization::getLocalizedURL().'/'.$equipo->slug}}"></a>
                        </figcaption>
                    </figure>
                        
                </div>
            @endforeach
            @endif
            
            </div>
            <nav class="pt-5 pb-3 d-flex justify-content-center" aria-label="...">
                {{ $equipos->links() }}
            </nav>
        </div>
    </div>
@endsection