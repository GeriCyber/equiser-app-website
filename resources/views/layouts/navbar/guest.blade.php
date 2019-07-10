<div class="container">
     <nav class="navbar navbar-expand-lg navbar-light navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid px-lg-4 px-xl-4">
            <a class="navbar-brand page-scroll" href="{{url('/inicio')}}">
                <img class="img-w" src="{{asset('images')}}\logo.png" alt="Equiser" width="200">
            </a>
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-mobile" aria-controls="menu-mobile" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}
            <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
                <div class="dropdown ">
                  <button class="btn btn-sm btn-warning btn-equiser dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item equiser-color" href="{{url('/inicio')}}">{{__('msg.menu-home')}}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item equiser-color" href="{{url('/empresa')}}">{{__('msg.menu-about')}}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item equiser-color" href="{{url('/servicios')}}">{{__('msg.menu-services')}}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item equiser-color" href="{{url('/obras')}}">{{__('msg.menu-projects')}}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item equiser-color" href="{{url('/equipos')}}">{{__('msg.menu-equipments')}}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item equiser-color" href="{{url('/contacto')}}">{{__('msg.menu-contact')}}</a>
                    <div class="dropdown-divider"></div>
                     @if(auth()->user())
                        <h6 class="dropdown-header equiser-color-2">{{auth()->user()->name}}</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item equiser-color fs-14 pl-3" href="{{url('/admin/dashboard')}}"><i class="fa fa-desktop equiser-color-2"></i>&nbsp;&nbsp;{{__('msg.administration')}}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item equiser-color fs-14 pl-3" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{route('logout')}}"><i class="fa fa-sign-out equiser-color-2"></i>&nbsp;&nbsp;{{__('msg.logout')}}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endif
                    <button type="button" data-toggle="modal" data-target=".bd-example-modal-sm" class="country-btn nav-link text-white" href="#">
                        <img class="country" @if(Session::get('country') == 'venezuela') src="{{asset('images')}}\iconos\venezuela.svg" @endif @if(Session::get('country') == 'colombia')src="{{asset('images')}}\iconos\colombia.svg" @endif @if(Session::get('country') == 'panama')src="{{asset('images')}}\iconos\panama.svg" @endif @if(Session::get('country') == 'usa')src="{{asset('images')}}\iconos\united-states.svg" @endif alt="Equiser" width="40">
                    </button>
                    <li class="nav-item">
                        <ul>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li class="nav-item pl-3">
                                    <a class="equiser-color-2" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $localeCode }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                  </div>
                </div>
            </div>
            <div class="d-lg-block d-xl-block d-none d-sm-none">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav my-2 my-lg-0 d-flex align-items-center">
                    <li class="nav-item mr-lg-3 mr-xl-3">
                        <a class="nav-link page-scroll" href="{{url('/inicio')}}">{{__('msg.menu-home')}}</a>
                    </li>
                    <li class="nav-item mr-lg-3 mr-xl-3">
                        <a class="nav-link page-scroll" href="{{url('/empresa')}}">{{__('msg.menu-about')}}</a>
                    </li>
                    <li class="nav-item mr-lg-3 mr-xl-3">
                        <a class="nav-link page-scroll" href="{{url('/servicios')}}">{{__('msg.menu-services')}}</a>
                    </li>
                    <li class="nav-item mr-lg-3 mr-xl-3">
                        <a class="nav-link page-scroll" href="{{url('/obras')}}">{{__('msg.menu-projects')}}</a>
                    </li>
                    <li class="nav-item mr-lg-3 mr-xl-3">
                        <a class="nav-link page-scroll" href="{{url('/equipos')}}">{{__('msg.menu-equipments')}}</a>
                    </li>
                    <li class="nav-item mr-lg-2 mr-xl-2">
                        <a class="nav-link" href="{{url('/contacto')}}">{{__('msg.menu-contact')}}</a>
                    </li>
                    @if(auth()->user())
                    <li class="nav-item mr-lg-2 mr-xl-2">
                        <div class="dropdown">
                          <button class="btn btn-sm btn-equiser-3 dropdown-toggle" type="button" id="dropdown-auth" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{auth()->user()->name}}
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdown-auth">
                            <h6 class="dropdown-header font-weight-bold">Bienvenido!</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item equiser-color fs-14 pl-3" href="{{url('/admin/dashboard')}}"><i class="fa fa-desktop equiser-color-2"></i>&nbsp;&nbsp;{{__('msg.administration')}}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item equiser-color fs-14 pl-3" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{route('logout')}}"><i class="fa fa-sign-out equiser-color-2"></i>&nbsp;&nbsp;{{__('msg.logout')}}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                          </div>
                        </div>
                    </li>
                    @endif
                    <li class="nav-item">
                        <button type="button" data-toggle="modal" data-target=".bd-example-modal-sm" class="country-btn nav-link text-white" href="#">
                            <img class="country" @if(Session::get('country') == 'venezuela') src="{{asset('images')}}\iconos\venezuela.svg" @endif @if(Session::get('country') == 'colombia')src="{{asset('images')}}\iconos\colombia.svg" @endif @if(Session::get('country') == 'panama')src="{{asset('images')}}\iconos\panama.svg" @endif @if(Session::get('country') == 'usa')src="{{asset('images')}}\iconos\united-states.svg" @endif alt="Equiser" width="40">
                        </button>
                    </li>
                    <li class="nav-item">
                        <ul>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li class="nav-item">
                                    <a class="equiser-color-2" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $localeCode }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content bg-equiser">
        <div class="modal-header">
            <h2 class="modal-title text-white">{{__('msg.select-country')}}</h2>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body bg-white">
            <ul class="nav text-center list-inline justify-content-center">
              <li class="nav-item list-inline-item">
                <form action="{{ route('welcome.country', 'country') }}" method="post">
                    @csrf
                    @method('put')
                    <input type="hidden" id="country" name="country" value="venezuela">
                    <button class="btn-transparent" type="submit" title="Venezuela"> <img class="country" src="{{asset('images')}}\iconos\venezuela.svg" width="45"></button>
                </form>
              </li>
              <li class="nav-item list-inline-item">
                <form action="{{ route('welcome.country', 'country') }}" method="post">
                    @csrf
                    @method('put')
                    <input type="hidden" id="country" name="country" value="colombia">
                    <button class="btn-transparent" type="submit" title="Colombia"> <img class="country" src="{{asset('images')}}\iconos\colombia.svg" width="45"></button>
                </form>
              </li>
              <li class="nav-item list-inline-item">
                <form action="{{ route('welcome.country', 'country') }}" method="post">
                    @csrf
                    @method('put')
                    <input type="hidden" id="country" name="country" value="panama">
                    <button class="btn-transparent" type="submit" title="Panamá"> <img class="country" src="{{asset('images')}}\iconos\panama.svg" width="45"></button>
                </form>
              </li>
              <li class="nav-item list-inline-item">
                <form action="{{ route('welcome.country', 'country') }}" method="post">
                    @csrf
                    @method('put')
                    <input type="hidden" id="country" name="country" value="usa">
                    <button class="btn-transparent" type="submit" title="Estados Unidos"> <img class="country" src="{{asset('images')}}\iconos\united-states.svg" width="45"></button>
                </form>
              </li>
            </ul>
        </div>
    </div>
  </div>
</div>