@extends('admin.layout')

@section('content')

		<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Guardar usuario</h3>
            </div>
            <form method="post" action="{{ route('gallery.update', $gallerys->id) }}">
            	{{ csrf_field() }}
            	{{ method_field('PUT') }}
            <div class="box-body"> 
              <div class="form-group"> 
                <select class="form-control select2" style="width: 100%;" name="events_id">
                  <option value="{{ $gallerys->events->id }}" selected="selected">{{ $gallerys->events->name }}</option> 
                  @foreach($events AS $event)
                  	<option value="{{ $event->id}}">{{ $event->name }}</option>
                  @endforeach
                </select>
              </div>
              <br> 
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-picture-o"></i></span>
                <input type="text" class="form-control" name="name" placeholder="Nombre de Galeria" value="{{ $gallerys->name }}">
              </div>
              <br> 

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-hourglass-start"></i></span>
                <input type="text" maxlength="2" class="form-control" name="start" placeholder="Página Inicial" value="{{ $gallerys->start }}">
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-hourglass-end"></i></span>
                <input type="text" maxlength="3" class="form-control" name="end" placeholder="Página Final" value="{{ $gallerys->end }}">
              </div>
              <br> 

              <div>
                <textarea name="note" class="form-control" style="width: 100%" placeholder="Ingrese alguna observación">{{ $gallerys->note }}</textarea>
              </div>
              <br>  

              <div class="box-footer">
              	<a type="button" class="btn btn-default" href="{{ route('gallery.index') }}">Atrás</a>
                <button type="submit" class="btn btn-primary">Editar</button>
              </div>
              
 		</div>

@stop