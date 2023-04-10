
@extends('problemas.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Lista de problemas</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('create-data-problem') }}"> Create Nuevo problema</a>
        </div>
    </div>
</div>
@if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
@endif

<table class="table table-light">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th>Creado por</th>
        <th>Plataforma</th>
        <th>Cliente</th>
        <th>Descripción</th>
        <th>Imagen</th>
        <th>Solución</th>
        <th>Fecha creación</th>
        <th>Solucionado por</th>
        <th>Acciones</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach($problemas as $problema)
        <tr>
            <td>{{$problema->id}}</td>
            <td>{{$problema->creado_por}}</td>
            <td>{{$problema->plataforma_id}}</td>
            <td>{{$problema->cliente->nombre}}</td>
            <td>{{$problema->descripcion}}</td>
            <td><img src="{{ asset('storage').'/'.$problema->img_error }}" width="100"></td> 
            <td><button type="button" class="btn btn-primary">Ver solución</button></td>
            <td>{{$problema->fecha_creacion}}</td>
            <td>{{$problema->solucionado_por}}</td>
            <td> <button type="button" class="btn btn-primary">Ingresar solución</button> |
                <form action="{{route('delete-data-problem',$problema->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                        <button type="submit"  class="btn btn-danger" onclick="return confirm('¿Quieres borrar?')" value="Borrar">Borrar</button>
                </form>
            
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection