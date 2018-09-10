@extends('admin.layout')

@section('content')

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Editar evento</h3>
            </div>
            <form method="post" action="{{ route('events.update', $events->id) }}">
            	{{ method_field('PUT') }}
            	{{ csrf_field() }} 
            <div class="box-body">
              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" name="name" placeholder="Nombre del evento" value="{{ $events->name }}">
              </div>
              <br> 
              <div class="box-footer">
              	<a type="button" class="btn btn-default" href="{{ route('events.index') }}">Atrás</a>
                <button type="submit" class="btn btn-primary">Editar</button>
              </div>
              
 		</div>
 	</form>
 	</div>

@stop