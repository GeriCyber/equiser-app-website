@extends('layouts.app')
@section('page-title', $obra->name)
@section('content')
@section('title', $obra->name)
@section('parent',  __('msg.menu-projects'))
@section('breadcrumb_url', '/obras')

    @include('layouts.header.guest')

    <div class="main" id="main">
    	<div class="container py-5">
            <div class="row py-5">
                <div class="col-md-6 order-2 order-sm-2 order-md-1 order-lg-1 order-xl-1 wow fadeInLeft" data-wow-delay="0s">
                    <h1 class="font-weight-bold pb-2">@if(App::isLocale('es')){{$obra->name}} @else {{$obra->name_en}}@endif</h1>
                    <h3 class="font-weight-bold">@if(App::isLocale('es')){{$obra->subtitle}}@else {{$obra->subtitle_en}}@endif</h3>
                    <hr class="pb-4">
                    <h2 class="font-weight-bold">{{__('msg.project')}}</h2><br>
                    <p>@if(App::isLocale('es')){{$obra->project}} @else {{$obra->project_en}}@endif</p>
                    <hr class="pb-4">
                    <h2 class="font-weight-bold">{{__('msg.menu-equipments')}}</h2><br>
                    <p>{!! $obra->equipos !!}</p>
                    <hr class="pb-4">
                    <h2 class="font-weight-bold">{{__('msg.available-countries')}}</h2><br>
                    <ul class="inline">
                        @if($obra->venezuela)
                            <li class="list-inline-item"><img class="country" src="{{asset('images')}}\iconos\venezuela.svg" alt="Equiser" width="60"></li>
                        @endif
                        @if($obra->colombia)
                            <li class="list-inline-item"><img class="country" src="{{asset('images')}}\iconos\colombia.svg" alt="Equiser" width="60"></li>
                        @endif
                        @if($obra->panama)
                            <li class="list-inline-item"><img class="country" src="{{asset('images')}}\iconos\panama.svg" alt="Equiser" width="60"></li>
                        @endif
                        @if($obra->usa)
                            <li class="list-inline-item"><img class="country" src="{{asset('images')}}\iconos\united-states.svg" alt="Equiser" width="60"></li>
                        @endif
                    </ul>
                    <p class="text-lg-left text-xl-left text-md-left text-center text-sm-center pt-5">
                        <a class="btn btn-primary btn-equiser-2 btn-action" href="{{url('/contacto')}}">{{__('msg.btn-info')}}</a>
                    </p>
                </div>
                <div class="col-md-6 wow fadeInRight order-1 order-sm-1 order-md-2 order-lg-2 order-xl-2" data-wow-delay="0.2s">
                    <a @if($obra->featured_image_url != '/images/default.png') class="fancybox" rel="ligthbox" href="{{$obra->featured_image_url}}" title="{{$obra->name}}" @endif>
                      <img class="img-fluid rounded square-img" src="{{$obra->featured_image_url}}" />
                    </a>
                    <div class="row no-gutters">
                        @foreach($images as $image)
                        <div class="col-4">
                            <a class="fancybox" rel="ligthbox" href="{{$image->url}}" title="{{$obra->name}}">
                                <img class="img-thumbnail" src="{{$image->url}}" />
                            </a>
                        </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
            
        </div>

        @if($relatedObras->count() > 0)
            <div class="container-fluid flex-features pt-4">
                <div class="container">
                    <h1 class="font-weight-bold py-5 text-left wow fadeInUp" data-wow-delay="0s">{{__('msg.related-projects')}}</h1>
                    <div class="row wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card-deck">
                            @foreach($relatedObras as $obra)
                                <div class="card">
                                    <a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.__('routes.projects').'/'.$obra->slug) }}"><img src="{{$obra->featured_image_url}}" class="card-img-top"></a>
                                    <div class="card-body">
                                      <h5 class="card-title text-center"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.__('routes.projects').'/'.$obra->slug) }}" class="equiser-color font-weight-bold">{{$obra->name}}</a></h5>
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