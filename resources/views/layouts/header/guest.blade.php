<div class="header-section app-hero" style="background-image: url('{{ asset('storage/images/grua1.jpg') }}');">
    <div class="container">
        <div class="hero-content app-hero-content text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <h1 class="f-size-24 wow fadeInUp text-white" data-wow-delay="0s">@yield('title')</h1>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-transparent justify-content-center">
                        <li class="breadcrumb-item active">
                            <a href="{{url('/inicio')}}" class="equiser-color-2">
                                {{__('msg.breadcrumb-home')}}
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="@yield('breadcrumb_url')" class="equiser-color-2">
                                @yield('parent')
                            </a>
                        </li>
                        <!--<li class="breadcrumb-item active " >
                            <a href="{{url('/admin/dashboard')}}" class="equiser-color-2">
                                Panel de control
                            </a>
                        </li>-->
                        <li aria-current="page" class="text-white breadcrumb-item">
                            @yield('title')
                        </li>
                      </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>