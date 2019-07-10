@extends('layouts.app')
@section('page-title', 'Imágenes de '.$equipo->name)
@section('content')
@section('title', 'Imágenes de '.$equipo->name)
@section('parent', 'Administración')
@section('breadcrumb_url', '/admin/dashboard')

    @include('layouts.header.guest')

    <div class="container my-5">

      <form class="mb-5" method="POST" action="" enctype="multipart/form-data" autocomplete="off">
        @csrf

        @if (count($errors) > 0)
          <div class="alert alert-danger mt-5">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif


        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block mt-5">
            <button type="button" class="close" data-dismiss="alert">×</button>
                {{ $message }}
        </div>
        @endif

        <div class="row">
          <div class="col-md-12">
              <h1 class="equiser-color"><b>Agregar Imágen</b></h1>
              <input type="file" name="archivo" class="form-control" required autofocus>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 d-flex justify-content-lg-end justify-content-xl-end">
              <button type="submit" class="btn btn-equiser-4 btn-primary btn-action mr-3">Agregar</button>
              <a class="btn btn-equiser btn-primary btn-action" href="{{url('/admin/equipos')}}">Equipos</a>
          </div>
        </div>

      </form> 

      <span class="equiser-color font-weight-bold mt-5">{{$images->count()}} imágenes</span>
      <div class="row mt-4">
        @if($images->count())
            @foreach($images as $image)
            <div class="col-12 col-md-6 col-lg-4 col-xl-4 mt-4">
              <div class="panel panel-default">
                <div class="panel-body text-center">
                  <a class="fancybox" rel="ligthbox" href="{{$image->url}}" title="{{$equipo->name}}">
                      <img class="img-fluid rounded square-img" src="{{$image->url}}" />
                  </a>
                  <form action="" method="POST">
                  <input type="hidden" name="image_id" value="{{ $image->id }}">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button type="submit" class="close-icon btn btn-danger"><i class="fa fa-trash"></i></button>
                  </form>

                  <a href="{{ url('/admin/equipos/imagenes/'.$equipo->id.'/destacar/'.$image->id) }}" class="featured-icon btn btn-equiser-4"><i class="fa fa-star"></i></a>
                </div>
              </div>
            </div> <!-- col-6 / end -->
            @endforeach
          @endif
        </div> <!-- row / end -->
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