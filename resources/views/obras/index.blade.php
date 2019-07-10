@extends('layouts.app')
@section('page-title', 'Obras')
@section('content')
@section('title', __('msg.menu-projects'))
@section('parent',  __('msg.menu-projects'))
@section('breadcrumb_url', '/obras')

    @include('layouts.header.guest')

    <div class="main" id="main">
    	<div class="container-fluid my-5">
            <h1 class="f-size-22 py-4 text-center equiser-color wow fadeInUp" data-wow-delay="0s">{{__('msg.available-projects')}} <b>{{Session::get('country')=='usa' ? strtoupper(Session::get('country')) : ucfirst(Session::get('country'))}}</b></h1>
           <div class="row px-lg-5 px-xl-5 wow fadeInUp" data-wow-delay="0.2s">
            @if($obras->count())
            @foreach($obras as $obra)
                <div class="col-sm-6">
                    <figure class="effect-duke square">
                        <img class="square-img img-fluid" src="{{$obra->featured_image_url}}" alt="img27">
                        <figcaption>
                            <h2 class="text-white"><span>@if(App::isLocale('es')){{str_limit($obra->name, 40)}} @else {{str_limit($obra->name_en, 40)}}@endif</span></h2>
                            <p class="text-white">
                                @if(App::isLocale('es')){{str_limit($obra->project, 100)}} @else {{str_limit($obra->project_en, 100)}} @endif
                            </p>
                            <a href="{{ LaravelLocalization::getLocalizedURL().'/'.$obra->slug}}">Ver Obra</a>
                        </figcaption>
                    </figure>
                        
                </div>
            @endforeach
            @else
                <div class="col-md-12 text-center pt-4">
                    <img src="{{asset('images')}}\iconos\wip.png" width="250">
                </div>
            @endif
            
            </div>
            <nav class="pt-5 pb-3 d-flex justify-content-center" aria-label="...">
                {{ $obras->links() }}
            </nav>
        </div>
    </div>
@endsection