@extends('layouts.app')
@section('page-title', 'Panel de Control')
@section('content')
@section('parent', 'Administración')
@section('title', 'Dashboard')

    @include('layouts.header.guest')
    <div class="container">
        <div class="jumbotron mt-5">
          <h1 class="display-4">Gestión de Obras y Equipos </h1>
          <p class="lead">Aquí podrás administrar todas las obras y equipos.</p>
          <hr class="my-4">
          <p>
            <a class="btn btn-primary btn-equiser-2 btn-action mr-3" href="{{url('admin/obras')}}" role="button">Obras</a>
            <a class="btn btn-primary btn-equiser-2 btn-action" href="{{url('admin/equipos')}}" role="button">Equipos</a>
          </p>
        </div>
    </div>
@endsection
