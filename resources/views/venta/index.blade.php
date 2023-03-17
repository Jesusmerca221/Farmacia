@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="ventas/create" class="btn btn-primary">Nueva venta</a>
<a href="dashboard" class="btn btn-primary">Inicio</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Código</th>
      <th scope="col">id_cliente</th>
      <th scope="col">Nombre Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      
    </tr>
  </thead>
  <tbody>    
    @foreach ($ventas as $venta)
    <tr>
        <td>{{$venta->id}}</td>
        <td>{{$venta->codigo}}</td>
        <td>{{$venta->id_cliente}}</td>
        <td>{{$venta->nombre_producto}}</td>
        <td>{{$venta->cantidad}}</td>
        <td>{{$venta->precio}}</td>
        
    </tr>
    @endforeach
    
  </tbody>
</table>
        <td>
         <form action="{{ route('ventas.destroy',$venta->id) }}" method="POST">
         <a href="ventas/create" class="btn btn-primary">Agregar</a>
          <a href="/ventas/{{$venta->id}}/edit" class="btn btn-info">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
         </form>          
        </td>        

@endsection

