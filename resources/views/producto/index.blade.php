@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<style>
.row {
  size: 2px;
}


</style>

<div class="row">
  <div class="col-md-8">
    <table class="table">
      <!-- Contenido de la tabla -->
      <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Código</th>
      <th scope="col">Descripción</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($productos as $producto)
    <tr>
        <td>{{$producto->id}}</td>
        <td>{{$producto->codigo}}</td>
        <td>{{$producto->descripcion}}</td>
        <td>{{$producto->cantidad}}</td>
        <td>{{$producto->precio}}</td>
        <td>
         <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
          <a href="/productos/{{$producto->id}}/edit" class="btn btn-info">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
         </form>          
        </td>        
    </tr>
    @endforeach
  </tbody>
    </table>
    @endsection
  </div>
  <div class="col-md-4">
  <div class="row">
  <a href="dashboard" class="btn btn-primary btn-custom">Inicio</a>
  <a href="productos/create" class="btn btn-secondary btn-custom">Crear</a>


  </div>
</div>


