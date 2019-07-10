@extends('layouts.app')
@section('page-title', 'Contacto')
@section('content')
@section('parent',  __('msg.menu-contact'))
@section('title', __('msg.menu-contact'))

    @include('layouts.header.guest')

    <div class="main" id="main">
        <div class="cta-sub no-color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 pb-4">
                        <h1 class="wow fadeInUp text-left" data-wow-delay="0.2s">{{__('msg.contact-msg-1')}}</h1>
                        <p class="wow fadeInUp text-left" data-wow-delay="0.3s">{{__('msg.contact-msg-2')}}
                        </p>
                        <div class="form wow fadeInLeft" data-wow-delay="0.4s">
                          @if(Session::has('success'))
                               <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                                 {{ Session::get('success') }}
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                               </div>
                            @endif
                            @if(Session::has('errors'))
                               <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                                 <ul>
                                    @foreach ($errors as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                               </div>
                            @endif
                            <form class="subscribe-form wow zoomIn text-left" method="post" action="{{ route('email') }}" autocomplete="off" id="contactForm">
                              @csrf
                              <input type="hidden" id="lang" value="{{App::getLocale()}}">
                                <div class="form-group text-left">
                                    <label for="nombre" class="equiser-color font-weight-bold">{{__('msg.contact-name')}}</label>
                                    <input type="text" class="form-control" id="nombre" name="name" aria-describedby="emailHelp" placeholder="{{__('msg.contact-name')}}">
                                  </div>
                                  <div class="form-group text-left">
                                    <label for="email" class="equiser-color font-weight-bold">{{__('msg.contact-mail')}}</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="{{__('msg.contact-mail-placeholder')}}">
                                  </div>
                                  <div class="form-group">
                                    <label for="asunto" class="equiser-color font-weight-bold">{{__('msg.contact-subject')}}</label>
                                    <input type="text" class="form-control" id="asunto" name="subject" placeholder="{{__('msg.contact-subject')}}">
                                  </div>
                                   <div class="form-group">
                                    <label for="mensaje" class="equiser-color font-weight-bold">{{__('msg.contact-message')}}</label>
                                    <textarea placeholder="{{__('msg.contact-message-placeholder')}}" class="form-control" id="mensaje" rows="3" name="message"></textarea>
                                  </div>
                                  <button  data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Enviando" type="button" id="send" class="btn btn-equiser-2 btn-action">{{__('msg.contact-btn')}}</button>
                            </form>
                            <div class="success-message pt-2 font-weight-bold"></div>
                            <div class="error-message pt-2 font-weight-bold"></div>
                        </div>
                        
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-delay="0.4s">
                        <!-- Nav tabs -->
                          <ul class="nav nav-pills nav-fill fadeInRight wow mb-3" id="pills-tab" role="tablist" data-wow-delay="0.3s">
                          <li class="nav-item text-white">
                            <a class="nav-link-pills @if(Session::get('country') == 'venezuela')active @endif" id="pills-venezuela-tab" data-toggle="pill" href="#pills-venezuela" role="tab" aria-controls="pills-venezuela" aria-selected="true">Venezuela</a>
                          </li>
                          <li class="nav-item text-white">
                            <a class="nav-link-pills @if(Session::get('country') == 'colombia')active @endif" id="pills-colombia-tab" data-toggle="pill" href="#pills-colombia" role="tab" aria-controls="pills-colombia" aria-selected="false">Colombia</a>
                          </li>
                          <li class="nav-item text-white">
                            <a class="nav-link-pills @if(Session::get('country') == 'panama')active @endif" id="pills-panama-tab" data-toggle="pill" href="#pills-panama" role="tab" aria-controls="pills-panama" aria-selected="false">Panamá</a>
                          </li>
                          <li class="nav-item text-white">
                            <a class="nav-link-pills @if(Session::get('country') == 'usa')active @endif" id="pills-usa-tab" data-toggle="pill" href="#pills-usa" role="tab" aria-controls="pills-usa" aria-selected="false">{{__('msg.united-states')}}</a>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade @if(Session::get('country') == 'venezuela')show active @endif" id="pills-venezuela" role="tabpanel" aria-labelledby="pills-venezuela-tab">
                              <div style="width: 100%"><iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&height=300&hl=es&q=Equiser%20venezuela+(Equiser%20Venezuela)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
                              <p><b class="equiser-color">{{__('msg.address')}}:</b> <br>
                                Autopista Puerto Cabello Morón, sector la Paragüita, diagonal a Planta Centro. Morón estado Carabobo.</p>
                                <p><b class="equiser-color">{{__('msg.phone')}}:</b><br>
                                +58 (0242) 372 34 40 / 3721238 +58 (0414) 481 56 84 / 0414 3432882</p>
                                <b class="equiser-color">{{__('msg.emails')}}:</b> <br> <br>
                                <ul>
                                    <li>costos@equiser.net</li>
                                    <li>direcciontecnica@equiser.net</li>
                                    <li>direccionoperaciones@equiser.net</li>
                                </ul>
                          </div>
                          <div class="tab-pane fade @if(Session::get('country') == 'colombia')show active @endif" id="pills-colombia" role="tabpanel" aria-labelledby="pills-colombia-tab">
                            <div style="width: 100%"><iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&height=300&hl=es&q=Equiser%20colombia+(Equiser%20Colombia)&ie=UTF8&t=&z=15&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
                            <p><b class="equiser-color">{{__('msg.address')}}:</b><br>
                            Barrio Policarpa Km 5 via variante Mamonal - Gambote  Carrera 67 Bodega 2 Cartagena de Indias - Bolívar.</p>
                            <p><b class="equiser-color">Teléfonos:</b><br>
                            +57 (300) 244 35 25 / +57 (300) 343 27 37</p>
                            <b class="equiser-color">Correos:</b> <br><br>
                                <ul>
                                    <li>direccionoperacionescolombia@equiser.net</li>
                                    <li>administracioncolombia@equiser.net</li>
                                    <li>direccioncomercial@equiser.net</li>
                                </ul>
                          </div>
                          <div class="tab-pane fade @if(Session::get('country') == 'panama')show active @endif" id="pills-panama" role="tabpanel" aria-labelledby="pills-panama-tab">
                              <div style="width: 100%"><iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&height=300&hl=es&q=Equiser%20panama+(Equiser%20Panam%C3%A1)&ie=UTF8&t=&z=15&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
                              <p><b class="equiser-color">{{__('msg.address')}}:</b><br>
                                Vía Panamericana, hacia la 24 de Diciembre, al lado de Office Bodega, antes de KFC de Plaza Las Américas, Santa Eduviges, Panamá, Rep. De Panamá.</p>
                                <p><b class="equiser-color">Teléfonos:</b><br>
                                +(507) 6379-6662 / +(507) 209-7193 / +(507)-6949-5710</p>
                                <b class="equiser-color">Correos:</b> <br> <br>
                                    <ul>
                                        <li>j.lozada@equiser.net</li>
                                        <li>jlozadaguerrero@gmail.com</li>
                                        <li>administracionpanama@equiser.net</li>
                                    </ul>
                          </div>
                          <div class="tab-pane fade @if(Session::get('country') == 'usa')show active @endif" id="pills-usa" role="tabpanel" aria-labelledby="pills-usa-tab">
                            <div style="width: 100%"><iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&height=300&hl=es&q=11047%20NW%20122th%20Street%20Medley%2C%20FL%2033178.%20Miami-Florida+(Equiser%20USA)&ie=UTF8&t=&z=15&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
                            <p><b class="equiser-color">{{__('msg.address')}}:</b><br>
                                11047 NW 122th Street Medley, FL 33178. Miami-Florida.</p>
                                <p><b class="equiser-color">{{__('msg.phone')}}:</b><br>
                                +1 (305) 8739560 / +1 (954)707 3222</p>
                                <b class="equiser-color">{{__('msg.emails')}}:</b> <br> <br>
                                    <ul>
                                        <li>mercadeo@equiser.net</li>
                                    </ul>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('sendEmail')
  <script>
    $(document).ready(function(){
      $('#send').click(function () {
        if($('#nombre').val() != '' && 
          $('#email').val() != '' && 
          $('#asunto').val() != '' &&
          $('#message').val() != '') {
            $('.error-message').hide("fast");
            if($('#lang').val() == 'es')
              $('.success-message').text('Enviando...');
            else
              $('.success-message').text('Sending...');
            $("#contactForm").submit();
        } else {
          if($('#lang').val() == 'es')
            $('.error-message').text('¡Completa los campos!');
          else
            $('.error-message').text('Complete all the fields!');
        }
        
      });
    });
  </script>
@endpush