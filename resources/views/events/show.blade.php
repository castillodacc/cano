@extends('admin.layout')

@section('content')

<section class="content-header">
      <h1>
        Lista de
        <small>Eventos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('events.index') }}"><i class="fa fa-calendar"></i> Eventos</a></li>
        <li><a href="{{ route('gallery.index') }}"><i class="fa fa-photo"></i> Galerias</a></li> 
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">  
              
            <div class="box-body">
            	<div class="row no-print">
					<div class="col-xs-12">  
			          <a type="button" class="btn btn-primary pull-right" href="{{ route('events.create') }}">
			            <i class="fa fa-save"></i> Crear evento
			          </a>
				</div>
      		</div>
      		<br>
              <table class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Galería</th>
                  <th>Total de páginas</th>
                  <th>Fecha de creación</th>
                  <th>usuarios</th>  
                  <th>Acción</th>
                </tr>
                </thead>
                <tbody> 
			         @foreach($events->galleries AS $event)
                <tr> 
                    <td>{{ $event->name }}</td>   
                    <td>{{ $event->total }}</td>
                    <td>{{ $event->created_at }}</td> 
                    <td> </td>    
                    <td> </td>  
                </tr>  
			         @endforeach  
               <tfoot><th></th><th> @foreach($total as $t){{$t->total}}@endforeach</th></tfoot>
                </tbody> 
              </table>

            </div> 
          </div> 
        </div> 
      </div> 
    </section> 

@stop