@extends('layouts.app')
@section('page-title', 'Servicios')
@section('content')
@section('parent',  __('msg.menu-services'))
@section('title', 'Equiser')

	@include('layouts.header.guest')

    <div class="main" id="main">
    	<div class="flex-features">
    		<div class="container-fluid pt-5">
    			<div class="flex-split align-items-center">
                    <div class="f-left wow fadeInLeft" data-wow-delay="0s">
                        <div class="text-center text-center">
                            <img class="img-fluid" src="{{asset('images')}}\grua_2.jpg" width="600">
                        </div>
                    </div>
                    <div class="f-right wow fadeInRight" data-wow-delay="0.2s">
                        <div class="right-content">
                            <h2>{{__('msg.services-title-1')}}</h2>
                            <hr class="divider" align="left" width="7%">
                            <p>
                                @lang('msg.services-1')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex-split align-items-center py-0">
                    <div class="f-right">
                        <div class="right-content wow fadeInLeft" data-wow-delay="0.2s">
                            <h2>{{__('msg.services-title-2')}}</h2><hr class="divider" align="left" width="7%">
                            <p>
                                {{__('msg.services-2')}}
                            </p>
                        </div>
                    </div>
                    <div class="f-left">
                        <div class="text-center wow fadeInRight" data-wow-delay="0.3s">
                            <img class="img-fluid" src="{{asset('images')}}\montacargas.jpg" width="600">
                        </div>
                    </div>
                </div>
                <div class="flex-split align-items-center py-0 ">
                    <div class="f-left wow fadeInLeft justify-content-center d-none d-sm-none d-md-none d-lg-flex d-xl-flex" data-wow-delay="0s">
                        <div class="text-center">
                            <img class="img-fluid" src="{{asset('images')}}\equiser_gruas002.png" width="600">
                        </div>
                    </div>
                    <div class="f-right wow fadeInRight" data-wow-delay="0.2s">
                        <div class="right-content">
                            <h2>{{__('msg.services-title-3')}}</h2><hr class="divider" align="left" width="7%">
                            <p>
                                {{__('msg.services-3')}}
                            </p>
                        </div>
                    </div>
                    <div class="f-left wow justify-content-center fadeInLeft d-flex d-sm-flex d-md-none d-lg-none d-xl-none" data-wow-delay="0s">
                        <div class="text-center">
                            <img class="img-fluid" src="{{asset('images')}}\equiser_gruas002.png" width="600">
                        </div>
                    </div>
                </div>
                <div class="flex-split align-items-center py-4">
                    <div class="f-right">
                        <div class="right-content wow fadeInLeft" data-wow-delay="0.2s">
                            <h2>{{__('msg.services-title-4')}}</h2><hr class="divider" align="left" width="7%">
                            <p>
                            	@lang('msg.services-4')
                            </p>
                        </div>
                    </div>
                    <div class="f-left">
                        <div class="text-center wow fadeInRight" data-wow-delay="0.3s">
                            <img class="img-fluid" src="{{asset('images')}}\equiser_gruas001-7.png" width="600">
                        </div>
                    </div>
                </div>

                <div class="flex-split align-items-center py-0">
                    <div class="f-left justify-content-center wow fadeInLeft d-none d-sm-none d-md-none d-lg-flex d-xl-flex" data-wow-delay="0s">
                        <div class="text-center">
                            <img class="img-fluid" src="{{asset('images')}}\ingenieria.jpg" width="600">
                        </div>
                    </div>
                    <div class="f-right wow fadeInRight" data-wow-delay="0.2s">
                        <div class="right-content">
                            <h2>{{__('msg.services-title-5')}}</h2><hr class="divider" align="left" width="7%">
                            <p>
                                {{__('msg.services-5')}}
                            </p>
                        </div>
                    </div>
                    <div class="f-left wow justify-content-center fadeInLeft d-flex d-sm-flex d-md-none d-lg-none d-xl-none" data-wow-delay="0s">
                        <div class="text-center">
                            <img class="img-fluid" src="{{asset('images')}}\ingenieria.jpg" width="600">
                        </div>
                    </div>
                </div>

		    </div>
	    </div>
    </div>

@endsection