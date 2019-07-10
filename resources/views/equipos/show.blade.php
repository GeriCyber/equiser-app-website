@extends('layouts.app')
@section('page-title', $equipo->name)
@section('content')
@section('title', $equipo->name)
@section('parent',  __('msg.menu-equipments'))
@section('breadcrumb_url', '/equipos')

    @include('layouts.header.guest')

    <div class="main" id="main">
    	<div class="container py-5">
            <div class="row pb-5">
                <div class="col-md-6 wow fadeInLeft" data-wow-delay="0s">
                    <a @if($equipo->featured_image_url != '/images/default.png') class="fancybox" rel="ligthbox" href="{{$equipo->featured_image_url}}" title="{{$equipo->name}}" @endif>
                      <img class="img-fluid rounded square-img" src="{{$equipo->featured_image_url}}" />
                    </a>
                    <div class="row no-gutters">
                        @foreach($images as $image)
                        <div class="col-4">
                            <a class="fancybox" rel="ligthbox" href="{{$image->url}}" title="{{$equipo->name}}">
                                <img class="img-thumbnail" src="{{$image->url}}" />
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-delay="0.2s">
                    <h1 class="font-weight-bold">@if(App::isLocale('es')){{$equipo->name}} @else {{$equipo->name_en}}@endif</h1>
                    <h3 class="font-weight-bold">@if(App::isLocale('es')){{$equipo->subtitle}}@else {{$equipo->subtitle_en}}@endif</h3>
                    <hr class="pb-4">
                    <p>@if(App::isLocale('es')){!! $equipo->description !!}@else {!! $equipo->description_en !!}@endif</p>
                    <hr class="pb-4">
                    <h2 class="font-weight-bold">{{__('msg.available-countries')}}</h2><br>
                    <ul class="inline">
                        @if($equipo->venezuela)
                            <li class="list-inline-item"><img class="country" src="{{asset('images')}}\iconos\venezuela.svg" alt="Equiser" width="60"></li>
                        @endif
                        @if($equipo->colombia)
                            <li class="list-inline-item"><img class="country" src="{{asset('images')}}\iconos\colombia.svg" alt="Equiser" width="60"></li>
                        @endif
                        @if($equipo->panama)
                            <li class="list-inline-item"><img class="country" src="{{asset('images')}}\iconos\panama.svg" alt="Equiser" width="60"></li>
                        @endif
                        @if($equipo->usa)
                            <li class="list-inline-item"><img class="country" src="{{asset('images')}}\iconos\united-states.svg" alt="Equiser" width="60"></li>
                        @endif
                    </ul>
                    <p class="text-lg-right text-xl-right text-md-right text-center text-sm-center pt-5">
                        <a class="btn btn-primary btn-equiser-2 btn-action" href="{{url('/contacto')}}">{{__('msg.btn-info')}}</a>
                    </p>
                </div>
            </div>
            
        </div>

        @if($relatedEquipos->count() > 0)
            <div class="container-fluid flex-features pt-4">
                <div class="container">
                    <h1 class="font-weight-bold py-5 text-left wow fadeInUp" data-wow-delay="0s">{{__('msg.related-equipments')}}</h1>
                    <div class="row wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card-deck">
                            @foreach($relatedEquipos as $equipo)
                                <div class="card">
                                    <a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.__('routes.equipments').'/'.$equipo->slug) }}"><img src="{{$equipo->featured_image_url}}" class="card-img-top"></a>
                                    <div class="card-body">
                                      <h5 class="card-title text-center"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.__('routes.equipments').'/'.$equipo->slug) }}" class="equiser-color font-weight-bold">@if(App::isLocale('es')){{$equipo->name}}@else {{$equipo->name_en}}@endif</a></h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

@push('fancybox')
  <script type="text/javascript" src="{{asset('extra-pages')}}\landingpage\assets\js\jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="{{asset('extra-pages')}}\landingpage\assets\js\jquery.fancybox-buttons.js"></script>
  <script type="text/javascript" src="{{asset('extra-pages')}}\landingpage\assets\js\jquery.fancybox-media.js"></script>
  <script>
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
  </script>
@endpush