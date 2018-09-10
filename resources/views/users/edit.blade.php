@extends('admin.layout')

@section('content')

	 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Editar usuario</h3>
            </div>
            <form method="post" action="{{ route('users.update', $users->id) }}">
            	{{ csrf_field() }}
              {{ method_field('PUT') }}
            <div class="box-body">
              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" name="name" placeholder="Nombre de usuario" value="{{ $users->name }}">
              </div>
              <br> 

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" name="email" placeholder="Correo" value="{{ $users->email }}">
              </div>
              <br>

			 <div class="input-group">
			  <div class="input-group-addon">
				<i class="fa fa-phone"></i>
			  </div>
				<input type="text" class="form-control" name="phone"  placeholder="Teléfono" value="{{ $users->phone }}">
			  </div>
        <br> 
        <div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-key"></i>
				</div>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Clave" value="{{ $users->password }}">
			  </div> 
			  <br>

			  <div class="form-group"> 
                  <select class="form-control" name="role_id">
                  	<option value="{{ $users->role->id }}">{{ $users->role->name }}</option>
                  	@foreach($roles AS $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>  
                    @endforeach
                  </select>
              </div>
              <br>

              <div class="box-footer">
                <a type="button" class="btn btn-default" href="{{ route('users.index') }}">Atrás</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
              
 		</div>
 	</form>
 	</div>
@stop