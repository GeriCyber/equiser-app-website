@extends('layouts.app')
@section('page-title', 'Equiser')
@section('content')

    <div class="main" id="main">
        <!-- Main Section-->
        <div class="hero-section app-hero" style="background-image: url('{{ asset('storage/images/colombia-2-banner.jpg') }}');">
            <div class="container">
                <div class="hero-content app-hero-content text-center">
                    <div class="row justify-content-md-center">
                        <div class="col-md-10">
                            <h1 class="wow fadeInUp text-white" data-wow-delay="0s">@lang('msg.header-title')</h1>
                            <p class="wow fadeInUp text-white" data-wow-delay="0.2s">
                                @lang('msg.header-msg')
                            </p>
                            <a class="btn btn-primary btn-equiser btn-action smoth-scroll" data-wow-delay="0.2s" href="#destacadas">{{__('msg.header-btn')}}</a>
                        </div>
                        <div class="col-md-12">
                            <div class="hero-image">
                                <img class="img-fluid" src="{{asset('extra-pages')}}\landingpage\assets\images\app_hero_1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="services-section text-center" id="services">
            <div class="container">
                <div class="row  justify-content-md-center">
                    <div class="col-md-8">
                        <div class="services-content">
                            <h1 class="wow fadeInUp titles" data-wow-delay="0s">{{__('msg.featured-services-title')}}</h1> <hr class="divider" width="10%">
                            <p class="wow fadeInUp pt-2" data-wow-delay="0.2s">
                                {{__('msg.featured-services-text')}}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="services">
                            <div class="row">
                                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="services-icon">
                                        <img src="{{asset('images')}}\Alquiler-de-Gruas-y-Maquinaria-de-izamiento.png" height="120" width="120" alt="Service">
                                    </div>
                                    <div class="services-description pt-1">
                                        <h1>@lang('msg.featured-service-1-title')</h1>
                                        <p>
                                            {{__('msg.featured-service-1-msg')}}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="services-icon">
                                        <img class="icon-2" src="{{asset('images')}}\Servicio-de-Montacargas.png" height="120" width="120" alt="Service">
                                    </div>
                                    <div class="services-description">
                                        <br>
                                        <h1>{{__('msg.featured-service-2-title')}}</h1>
                                        <p>
                                            {{__('msg.featured-service-2-msg')}}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="services-icon">
                                        <img class="icon-3" src="{{asset('images')}}\Carga-sobredimensionada.png" height="120" width="120" alt="Service">
                                    </div>
                                    <div class="services-description">
                                        <br>
                                        <h1>{{__('msg.featured-service-3-title')}}</h1>
                                        <p>
                                            {{__('msg.featured-service-3-msg')}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary btn-equiser-2 btn-action" data-wow-delay="0.2s" href="{{url('/servicios')}}">{{__('msg.featured-services-btn')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if($obras->count())
            <div class="flex-features" id="destacadas">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="pricing-intro text-center">
                                <h1 class="wow fadeInUp pt-5" data-wow-delay="0s">{{__('msg.featured-projects-title')}}</h1><hr class="divider" width="5%">
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="row px-xl-5 px-lg-5 wow fadeInUp" data-wow-delay="0.2">
                        
                        @foreach($obras as $obra)
                        <div class="col-sm-6">
                            <figure class="effect-duke square">
                            <img class="square-img img-fluid" src="{{$obra->featured_image_url}}" alt="img27">
                            <figcaption>
                                <h2 class="text-white"><span>@if(App::isLocale('es')){{str_limit($obra->name, 40)}} @else {{str_limit($obra->name_en, 40)}}@endif</span></h2>
                                <p class="text-white">
                                    @if(App::isLocale('es')){{str_limit($obra->project, 100)}}@else {{str_limit($obra->project_en, 100)}} @endif
                                </p>
                                <a href="{{ url('/obras/'.$obra->slug) }}">Ver Obra</a>
                            </figcaption>
                        </figure>
                        </div>
                        @endforeach
                        

                        <div class="col-sm-12 text-center pt-5">
                            <a href="{{url('/obras')}}" class="btn btn-primary btn-equiser-2 btn-action btn-fill wow fadeInDown" data-wow-delay="0.2s">{{__('msg.featured-projects-btn')}}</a>
                        </div>
                    
                    </div>
                    
                </div>
            </div>
        @endif
       
        <!-- Counter Section -->
        <div class="counter-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0s">
                        <div class="counter-up">
                            <div class="counter-icon">
                                <i class="ion-android-download"></i>
                            </div>
                            <h3><span class="counter">25</span>+</h3>
                            <div class="counter-text">
                                <h4>{{__('msg.experience-years')}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3  wow fadeIn" data-wow-delay="0.2s">
                        <div class="counter-up">
                            <div class="counter-icon">
                                <i class="ion-cube"></i>
                            </div>
                            <h3><span class="counter">1000</span>+</h3>
                            <div class="counter-text">
                                <h4>{{__('msg.completed-projects')}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3  wow fadeIn" data-wow-delay="0.4s">
                        <div class="counter-up">
                            <div class="counter-icon">
                                <i class="ion-ios-people"></i>
                            </div>
                            <h3><span class="counter">230</span>+</h3>
                            <div class="counter-text">
                                <h4>{{__('msg.satisfied-customers')}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3  wow fadeIn" data-wow-delay="0.6s">
                        <div class="counter-up">
                            <div class="counter-icon">
                                <i class="ion-ios-paper"></i>
                            </div>
                            <h3><span class="counter">60</span>+</h3>
                            <div class="counter-text">
                                <h4>{{__('msg.equipments')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Section Ends -->


        <div class="container pricing-intro pt-4 pb-5">
            <h1 class="wow fadeInUp text-center" data-wow-delay="0s">{{__('msg.certificates')}}</h1><hr class="divider" width="5%">
            <div class="row pt-4 pb-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img class="img-iso" src="{{asset('images')}}\marcas\iso_9001.jpg" width="200">
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img class="img-iso" src="{{asset('images')}}\marcas\iso_18000.jpeg" width="300">
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img class="img-iso" src="{{asset('images')}}\marcas\iso_14000.jpg" width="200">
                </div>
            </div>
        </div>

        <div class="flex-features" id="features">
                <div class="container-fluid pt-sm-5 pt-5 pt-md-0 pt-lg-0 pt-xl-0">
                    <div class="flex-split">
                        <div class="f-left wow fadeInUp" data-wow-delay="0s">
                            <div class="left-content">
                                <img class="img-fluid" src="{{asset('images')}}\alquilar.jpg" alt="">
                            </div>
                        </div>
                        <div class="f-right wow fadeInUp d-flex align-items-center" data-wow-delay="0.2s">
                            <div class="right-content pricing-intro">
                                <h1>{{__('msg.rent-equipment-1')}}</h1><hr class="divider" width="17%" align="left">
                                <p>
                                    {{__('msg.rent-equipment-msg-1')}}
                                </p>
                                <a href="{{url('/equipos')}}" class="btn btn-primary btn-equiser-2 btn-action btn-fill">{{__('msg.rent-equipment-btn')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-split">
                        <div class="f-right">
                            <div class="right-content wow fadeInUp pricing-intro" data-wow-delay="0.2s">
                                <h1>{{__('msg.rent-equipment-2')}}</h1><hr class="divider" width="17%" align="left">
                                    @lang('msg.rent-equipment-msg-2')
                            </div>
                        </div>
                        <div class="f-left">
                            <div class="left-content wow fadeInUp" data-wow-delay="0.3s">
                                <div class="videoWrapper"><iframe width="560" height="315" src="https://www.youtube.com/embed/S9wiWUpJkws?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

         <div class="testimonial-section" id="reviews">
            <div class="container">
                <h1 class="wow fadeInUp text-center font-weight-bold" data-wow-delay="0s">{{__('msg.cliets-testimonial')}}</h1><hr class="divider" width="8%">
                <div class="row text-center wow fadeIn" data-wow-delay="0.3">
                    <div class="col-md-12">
                        <div class="testimonials owl-carousel owl-theme">
                            <div class="testimonial-single"><img class="" src="{{asset('images')}}\testimonios\CHEC.jpg">
                                <div class="testimonial-text">
                                    <p>@lang('msg.client-testimonial-2')
                                    </p>
                                    <h3 class="font-weight-bold">{{__('msg.client-testimonial-company-2')}}</h3><br>
                                    <h4 class="text-muted">{{__('msg.client-testimonial-years-2')}}</h4>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                </div>
                            </div>
                            <div class="testimonial-single"><img class="" src="{{asset('images')}}\testimonios\ingenieria-tm.jpg" alt="Client Testimonoal">
                                <div class="testimonial-text">
                                    <p>@lang('msg.client-testimonial-3')
                                    </p>
                                    <h3 class="font-weight-bold">{{__('msg.client-testimonial-company-3')}}</h3><br>
                                    <h4 class="text-muted">{{__('msg.client-testimonial-years-3')}}</h4>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Marcas Section -->
        <div class="testimonial-section">
            <div class="container text-center pb-5">
                <h1 class="wow fadeInUp text-center font-weight-bold" data-wow-delay="0s">{{__('msg.partners')}}</h1><hr class="divider" width="10%">
                <div class="clients owl-carousel owl-theme wow fadeInUp pt-5" data-wow-delay="0.3">
                    <div class="single">
                        <img src="{{asset('images')}}\marcas\demag-gruas-logo-113x75.jpg" alt="">
                    </div>
                    <div class="single">
                        <img src="{{asset('images')}}\marcas\grove-gruas-logo-113x75.jpg" alt="">
                    </div>
                    <div class="single">
                        <img src="{{asset('images')}}\marcas\krupp-Gruas-logo-113x75.jpg" alt="">
                    </div>
                    <div class="single">
                        <img src="{{asset('images')}}\marcas\Liebherr-gruas-113x75.jpg" alt="">
                    </div>
                    <div class="single">
                        <img src="{{asset('images')}}\marcas\Manitowoc-gruas-113x75.jpg" alt="">
                    </div>
                    <div class="single">
                        <img src="{{asset('images')}}\marcas\terex-gruas-1-113x75.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Main Section -->

@endsection