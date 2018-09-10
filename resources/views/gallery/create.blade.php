@extends('admin.layout')

@section('content')

	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Guardar usuario</h3>
            </div>
            <form method="post" action="{{ route('gallery.store') }}">
            	{{ csrf_field() }}
            <div class="box-body"> 
              <div class="form-group"> 
                <select class="form-control select2" style="width: 100%;" name="events_id">
                  <option selected="selected">Seleccione el evento</option> 
                  @foreach($events AS $event)
                  	<option value="{{ $event->id}}">{{ $event->name }}</option>
                  @endforeach
                </select>
              </div>
              <br> 
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-picture-o"></i></span>
                <input type="text" class="form-control" name="name" placeholder="Nombre de Galeria">
              </div>
              <br> 

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-hourglass-start"></i></span>
                <input type="text" maxlength="2" class="form-control" name="start" placeholder="Página Inicial">
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-hourglass-end"></i></span>
                <input type="text" maxlength="3" class="form-control" name="end" placeholder="Página Final">
              </div>
              <br> 

              <div>
                <textarea name="note" class="form-control" style="width: 100%" placeholder="Ingrese alguna observación"></textarea>
              </div>
              <br>  

              <div class="box-footer">
              	<a type="button" class="btn btn-default" href="{{ route('gallery.index') }}">Atrás</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
              
 		</div>
 	</form>
 	</div>

@stop