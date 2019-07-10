@extends('layouts.app')
@section('page-title', 'Administración de Equipos')
@section('content')
@section('parent', 'Administración')
@section('title', 'Equipos')
@section('breadcrumb_url', '/admin/dashboard')

    @include('layouts.header.guest')

    <div class="container py-5">
    	<span id="form_result"></span>
    	<div class="table-responsive">
    		<button type="button" class="btn btn-equiser-4 btn-primary btn-action btn-lg float-xl-right float-lg-right" name="create_record" id="create_record">Añadir Equipo</button>
	    	<table id="equipos" class="display nowrap table table-hover table-bordered table-striped" style="width: 100%">
	        <thead class="thead-dark">
	        <tr>
	            <th class="font-weight-bold">Id</th>
	            <th class="font-weight-bold">Nombre</th>
	            <th class="font-weight-bold">Descripción</th>
	            <th class="font-weight-bold text-center" width="150">Acciones</th>
	        </tr>
	        </thead>
	    	</table>
	    </div>
	</div>

	<div id="formModal" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
	 <div class="modal-dialog modal-lg">
	  <div class="modal-content">
	   <div class="modal-header bg-equiser">
	        <h4 class="modal-title text-left font-weight-bold text-white">Agregar Equipo</h4>
	    </div>
	    <div class="modal-body my-3">
	    	<span id="errors"></span>

        <!-- Nav tabs -->
        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
          <li class="nav-item text-white">
            <a class="nav-link-pills active" id="pills-spanish-tab" data-toggle="pill" href="#pills-spanish" role="tab" aria-controls="pills-spanish" aria-selected="true">Español</a>
          </li>
          <li class="nav-item text-white">
            <a class="nav-link-pills" id="pills-english-tab" data-toggle="pill" href="#pills-english" role="tab" aria-controls="pills-english" aria-selected="false">Ingles</a>
          </li>
        </ul>

        <form method="post" id="sample_form" class="form-horizontal">
            @csrf
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-spanish" role="tabpanel" aria-labelledby="pills-spanish-tab">
                <div class="form-group">
                  <label class="control-label col-md-12 equiser-color font-weight-bold" >Nombre de Equipo: </label>
                  <div class="col-md-12">
                   <input minlength="4" maxlength="190" type="text" placeholder="Escribe el nombre del equipo" name="Nombre" id="name" class="form-control" />
                  </div>
                 </div>
                 <div class="form-group">
                  <label class="control-label col-md-12 equiser-color font-weight-bold" >Subtitulo para el Equipo: </label>
                  <div class="col-md-12">
                   <input minlength="4" maxlength="190" type="text" placeholder="Escribe el subtitulo para el equipo" name="Subtitulo" id="subtitle" class="form-control" />
                  </div>
                 </div>
                 <div class="form-group">
                  <label class="control-label col-md-12 equiser-color font-weight-bold">Descripción de Equipo: </label>
                  <div class="col-md-12">
                    <textarea minlength="4" maxlength="1500" placeholder="Escribe una descripción para el equipo" class="form-control" name="Descripción" id="description" rows="5"></textarea>
                  </div>
                 </div>

                </div>
                <div class="tab-pane fade" id="pills-english" role="tabpanel" aria-labelledby="pills-english-tab">
                  <div class="form-group">
                    <label class="control-label col-md-12 equiser-color font-weight-bold" >Nombre de Equipo: </label>
                    <div class="col-md-12">
                     <input minlength="4" maxlength="190" type="text" placeholder="Escribe el nombre del equipo en ingles" name="Nombre_ingles" id="name_en" class="form-control" />
                    </div>
                   </div>
                   <div class="form-group">
                    <label class="control-label col-md-12 equiser-color font-weight-bold" >Subtitulo para el Equipo: </label>
                    <div class="col-md-12">
                     <input minlength="4" maxlength="190" type="text" placeholder="Escribe el subtitulo para el equipo" name="Subtitulo_ingles" id="subtitle_en" class="form-control" />
                    </div>
                   </div>
                   <div class="form-group">
                    <label class="control-label col-md-12 equiser-color font-weight-bold">Descripción de Equipo: </label>
                    <div class="col-md-12">
                      <textarea minlength="4" maxlength="1500" placeholder="Escribe una descripción para el equipo en ingles" class="form-control" name="Descripción_ingles" id="description_en" rows="5"></textarea>
                    </div>
                   </div>
                </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-12 equiser-color font-weight-bold mb-3">País: </label>
              <div class="col-md-12">
                <div class="custom-control custom-checkbox custom-control-inline mr-5">
                  <input type="checkbox" class="custom-control-input" id="venezuela" name="venezuela" value="venezuela">
                  <label class="custom-control-label mt-1" for="venezuela">Venezuela</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline mr-5">
                  <input type="checkbox" class="custom-control-input" id="colombia" name="colombia" value="colombia">
                  <label class="custom-control-label mt-1" for="colombia">Colombia</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline mr-5">
                  <input type="checkbox" class="custom-control-input" id="panama" name="panama" value="panama">
                  <label class="custom-control-label mt-1" for="panama">Panamá</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="usa" name="usa" value="usa">
                  <label class="custom-control-label mt-1" for="usa">USA</label>
                </div>
              </div>
             </div> <br>
             <div class="form-group" align="center">
              <input type="hidden" name="action" id="action" />
              <input type="hidden" name="hidden_id" id="hidden_id" />
              <input type="submit" name="action_button" id="action_button" class="btn btn-equiser-4 float-left ml-3 btn-primary btn-action" value="Agregar" />
             </div>
          </form>

	        </div>
	        <div class="modal-footer">
		        <button type="button" class="btn btn-secondary btn-equiser btn-action" id="close">Cerrar</button>
		    </div>
	     </div>
	    </div>
	</div>

	<div id="showModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
		  <div class="modal-content">
		   <div class="modal-header bg-equiser">
		        <h4 class="modal-title text-left font-weight-bold text-white">Equipo</h4>
		    </div>
		    <div class="modal-body my-3">
		        
		        <h2 class="font-weight-bold equiser-color mb-2">Nombre del equipo</h2>
		        <p id="name-show"></p> <br> <br>
            <h2 class="font-weight-bold equiser-color mb-2">Subtitulo del equipo</h2>
            <p id="subtitle-show"></p> <br> <br>
		        <h2 class="font-weight-bold equiser-color mb-2">Descripción del equipo</h2>
		        <p id="description-show"></p> <br><br>
		        
		     </div>
		     <div class="modal-footer">
		        <button type="button" class="btn btn-secondary btn-equiser-4 btn-action" data-dismiss="modal">Cerrar</button>
		    </div>
		    </div>
		</div>
	</div>

	<div id="confirmModal" class="modal fade" role="dialog">
	    <div class="modal-dialog modal-dialog-centered">
	        <div class="modal-content">
	            <div class="modal-header bg-equiser">
	                <h2 class="modal-title text-white font-weight-bold">Borrar Equipo</h2>
	            </div>
	            <div class="modal-body">
	                <h4 align="center" style="margin:0;">Estas seguro que quieres eliminar equipo seleccioando?</h4>
	            </div>
	            <div class="modal-footer">
	             <button type="button" name="ok_button" id="ok_button" class="btn btn-equiser-4 btn-primary btn-action">Borrar</button>
	                <button type="button" class="btn btn-secondary btn-equiser btn-action" data-dismiss="modal">Cancelar</button>
	            </div>
	        </div>
	    </div>
	</div>
 
@endsection


@push('datatable')
	<script src="{{asset('extra-pages')}}\landingpage\assets\js\jquery.dataTables.min.js"></script>
    <script src="{{asset('extra-pages')}}\landingpage\assets\js\datatables.min.js"></script>
    <script src="{{asset('extra-pages')}}\landingpage\assets\js\dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $('#equipos').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{route('equipos.index')}}'
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'description', name: 'description'},
                    {data: 'action', name: 'action', orderable: false}
                ],
                "language": {
                    "lengthMenu": "Mostrar _MENU_ equipos",
                    "zeroRecords": "Sin resultados.",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay equipos cargados.",
                    "search":         "Buscar Equipo:",
                    "loadingRecords": "Cargando...",
                    "processing":     "Procesando...",
                    "infoFiltered": "(filtrado de _MAX_ resultados)",
                    "paginate": {
                        "first":      "Primero",
                        "last":       "Ultimo",
                        "next":       "<i class='fa fa-angle-right'></i>",
                        "previous":   "<i class='fa fa-angle-left'></i>"
                    },
                }
            });
        });

        $('#close').click(function() {
            $('#sample_form')[0].reset();
            $('#formModal').modal('hide');
        });

        $('#create_record').click(function(){
          $('.modal-title').text("Argregar Equipo");
             $('#action_button').val("Agregar");
             $('#action').val("Agregar");
             $('#formModal').modal('show');
         });

        $('#sample_form').on('submit', function(event){
          event.preventDefault();
          if($('#action').val() == 'Agregar')
          {
            $.ajax({
                url:"{{ route('equipos.store') }}",
                method:"POST",
                data: new FormData(this),
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                beforeSend:function() {
                    $('#action_button').val('Agregando...');
                },
                success:function(data)
                {
                 var html = '';
                 var errors = '';
                 if(data.errors)
                 {
                  errors = '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                  for(var count = 0; count < data.errors.length; count++)
                  {
                   errors += '<p class="mb-2">' + data.errors[count] + '</p>';
                  }
                  errors += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                  $('#errors').html(errors);
                  $('#action_button').val('Agregar');
                 }
                 if(data.success)
                 {
                  html = '<div class="alert alert-success alert-dismissible fade show" role="alert">' + data.success + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

                  setTimeout(function() {
                    $('#sample_form')[0].reset();
                     $('#equipos').DataTable().ajax.reload();
                     $('#formModal').modal('hide');
                     $('#form_result').html(html);
                     $('#action_button').val("Agregar");
                    }, 500);
                 }
                }
            });
          }
          if($('#action').val() == "Editar")
          {
            $.ajax({
                url:"{{ route('equipos.update') }}",
                method:"POST",
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType:"json",
                beforeSend:function() {
                    $('#action_button').val('Editando...');
                },
                success:function(data)
                {
                 var html = '';
                 var errors = '';
                 if(data.errors)
                 {
                  errors = '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                  for(var count = 0; count < data.errors.length; count++)
                  {
                   errors += '<p class="mb-2">' + data.errors[count] + '</p>';
                  }
                  errors += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                  $('#errors').html(errors);
                  $('#action_button').val('Editar');
                 }
                 if(data.success)
                 {
                    html = '<div class="alert alert-success alert-dismissible fade show" role="alert">' + data.success + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                    setTimeout(function() {
                        $('#sample_form')[0].reset();
                        $('#equipos').DataTable().ajax.reload();
                        $('#formModal').modal('hide');
                        $('#form_result').html(html);
                        $('#action_button').val("Editar");
                    }, 500);
                 }
                }
            });
          }
    });

    $(document).on('click', '.edit', function(){
      var id = $(this).attr('id');
      $('#form_result').html('');
      $.ajax({
       url:"/admin/equipos/"+id+"/edit",
       dataType:"json",
       success:function(html) {
        $('#name').val(html.data.name);
        $('#subtitle').val(html.data.subtitle);
        $('#subtitle_en').val(html.data.subtitle_en);
        $('#description').val(html.data.description);
        $('#name_en').val(html.data.name_en);
        $('#description_en').val(html.data.description_en);
        if(html.data.venezuela == true) {
          $('#venezuela').prop('checked', true);
        }
        if(html.data.colombia == true) {
          $('#colombia').prop('checked', true);
        }
        if(html.data.panama == true) {
          $('#panama').prop('checked', true);
        }
        if(html.data.usa == true) {
          $('#usa').prop('checked', true);
        }
        $('#hidden_id').val(html.data.id);
        $('.modal-title').text("Editar Equipo");
        $('#action_button').val("Editar");
        $('#action').val("Editar");
        $('#formModal').modal('show');
       }
      })
    });

    $(document).on('click', '.show', function() {
        var id = $(this).attr('id');
        $.ajax({
           url:"/admin/equipos/show/"+id,
           dataType:"json",
           success:function(html) {
                $('#name-show').text(html.data.name);
                $('#subtitle-show').text(html.data.subtitle);
                $('#description-show').html(html.data.description);
                $('#showModal').modal('show');
                $('.modal-title').text(html.data.name);
            }
        });
    });

    var id;

     $(document).on('click', '.delete', function(){
        $('.modal-title').text("Borrar Equipo");
        id = $(this).attr('id');
        $('#confirmModal').modal('show');
     });

     $('#ok_button').click(function(){
      $.ajax({
       url:"/admin/equipos/destroy/"+id,
       beforeSend:function() {
        $('#ok_button').text('Borrando...');
       },
       success:function(data)
       {
        setTimeout(function(){
         $('#confirmModal').modal('hide');
         $('#equipos').DataTable().ajax.reload();
         $('#ok_button').text('Borrar');
        }, 500);
       }
      })
     });

     $(".alert-success").fadeTo(5000, 500).fadeOut(500, function(){
      $(".alert-success").fadeOut(500);
    });

    $(".alert-danger").fadeTo(5000, 500).fadeOut(500, function(){
      $(".alert-danger").fadeOut(500);
    });
    </script>
@endpush