@extends('layouts.app')
@section('page-title', 'Empresa')
@section('content')
@section('parent',  __('msg.menu-about'))
@section('title', 'Equiser')

    @include('layouts.header.guest')

    <div class="main" id="main">
    	<div class="flex-features">
            <div class="container-fluid pt-5">
                <div class="flex-split align-items-center">
                    <div class="f-left wow fadeInLeft" data-wow-delay="0s">
                        <div class="left-content">
                            <img class="img-fluid" src="{{asset('images')}}\grua_3_short.jpg">
                        </div>
                    </div>
                    <div class="f-right wow fadeInRight" data-wow-delay="0.2s">
                        <div class="right-content">
                            <h2>Equiser</h2>
                            <hr class="divider" align="left" width="7%">
                            @lang('msg.about-msg-1')
                        </div>
                    </div>
                </div>
                <div class="flex-split align-items-center pt-0 pt-lg-5 pt-xl-5">
                    <div class="f-right">
                        <div class="right-content wow fadeInLeft" data-wow-delay="0.2s">
                            <h2>{{__('msg.mision-title')}}</h2><hr class="divider" align="left" width="8%">
                            <p>
                                {{__('msg.mision')}}
                            </p>
                            <h2>{{__('msg.vision-title')}}</h2><hr class="divider" align="left" width="8%">
                            <p>
                                {{__('msg.vision')}}
                            </p>
                        </div>
                    </div>
                    <div class="f-left">
                        <div class="left-content wow fadeInRight" data-wow-delay="0.3s">
                            <img class="img-fluid" src="{{asset('images')}}\equiser_gruas004-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="flex-split">
                    <div class="justify-content-center f-left wow fadeInLeft d-none d-sm-none d-md-none d-lg-flex d-xl-flex" data-wow-delay="0s">
                        <div class="left-content">
                            <img class="img-fluid" src="{{asset('images')}}\equiser-gruas-petronomanas8.jpg" alt="">
                        </div>
                    </div>
                    <div class="f-right wow fadeInRight" data-wow-delay="0.2s">
                        <div class="right-content">
                            <h2>{{__('msg.quality-policy-title')}}</h2><hr class="divider" align="left" width="10%">
                            <p>
                                @lang('msg.quality-policy')
                            </p>
                            <h2>{{__('msg.ambient-policy-title')}}</h2><hr class="divider" align="left" width="10%">
                            <p>
                                @lang('msg.ambient-policy')
                            </p>
                            <h2>{{__('msg.security-policy-title')}}</h2><hr class="divider" align="left" width="10%">
                            <p>
                                @lang('msg.security-policy')
                            </p>
                        </div>
                    </div>
                    <div class="justify-content-center f-left wow fadeInLeft d-flex d-sm-flnoneex d-md-none d-lg-none d-xl-none" data-wow-delay="0s">
                        <div class="left-content">
                            <img class="img-fluid" src="{{asset('images')}}\equiser-gruas-petronomanas8.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="flex-split align-items-center">
                    <div class="f-right">
                        <div class="right-content wow fadeInLeft" data-wow-delay="0.2s">
                            <h2>{{__('msg.philosophy')}}</h2><hr class="divider" align="left" width="10%">
                            <p>
                            	@lang('msg.philosophy-msg')
                            </p>
                        </div>
                    </div>
                    <div class="f-left">
                        <div class="left-content wow fadeInRight" data-wow-delay="0.3s">
                            <img class="img-fluid" src="{{asset('images')}}\equiser_gruas002x.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection