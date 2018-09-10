@extends('admin.layout')

@section('content')
 
    <section class="content-header">
      <h1>
        Tabla
        <small>Usuarios</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Usuarios</a></li> 
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
                <a type="button" class="btn btn-primary pull-right" href="{{ route('users.create') }}">
                  <i class="fa fa-save"></i> Crear usuario
                </a>
        </div>
          </div>
          <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Teléfono</th>
                  <th>Correo</th>
                  <th>Rol</th>
                  <th>Acción</th>
                </tr>
                </thead>
                <tbody>
			@foreach($users AS $user)
                <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->phone }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->role->name }}</td>
                  <td>
                    <a class="btn btn-primary flat btn-xs" href="{{ route('users.edit',$user->id) }}">Editar</a>
                    <form method="post" action="{{ route('users.destroy', $user->id) }}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE')}}
                      <input class="btn btn-danger flat btn-xs" type="submit" value="Eliminar">
                    </form>
                  </td>
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