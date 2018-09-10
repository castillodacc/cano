@extends('admin.layout')

@section('content')

<section class="content-header">
      <h1>
        Tabla
        <small>Galerias</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('events.index') }}"><i class="fa fa-dashboard"></i> Eventos</a></li>
        <li><a href="#">Tables</a></li> 
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">  
             
          <div class="box"> 
            <div class="box-body">
            	<div class="row no-print">
					<div class="col-xs-12">  
			          <a type="button" class="btn btn-primary pull-right" href="{{ route('assign.create') }}">
			            <i class="fa fa-save"></i> Crear Galeria
			          </a>
				</div>
      		</div>
      		<br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr> 
                  <th>Galeria</th>
                  <th>Cantidad de páginas</th> 
                  <th>Acción</th>
                </tr>
                </thead>
                <tbody>
			@foreach($assign AS $assi)
                <tr> 
                  <td>{{ $assi->name }}- {{ $assi->name }}</td> 
                  <div class="text-center">
	                  <td>
	                  	<a class="btn btn-primary flat btn-xs" href="{{ route('events.edit', ['id' => $event->id]) }}">Editar</a>
	                  <form method="POST" action="{{ route('events.destroy', $event->id) }}">
	                  	{{ method_field('DELETE') }}
	                  	{!! csrf_field() !!} 
	                  	<input class="btn btn-danger flat btn-xs" type="submit" value="Eliminar">
	                  </td>
	                  </form>
                  </div>
                </tr> 
			@endforeach
                </tbody> 
              </table>

            </div> 
          </div> 
        </div> 
      </div> 
    </section> 

@stop