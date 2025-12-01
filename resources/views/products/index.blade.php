
@extends('layouts.main')
@section('contenido')

  <title>Listado de Productos</title>
    <div class="container">
        <diw class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2>Listado de Productos</h2>
                        <a href="{{ route('products.create' )}}" class="btn btn-success btn-sm ms-auto">
                            Nuevo Producto
                        </a>                                                                      
                    </div>
                    <div class="card-body">
                <!--mostramos el mensaje de que el producto se creó exitosamente, usando mensajes flash-->
                    @if(session('info'))
                        <div class="alert alert-success">
                            {{session('info') }}
                        </div>                        
                    @endif
                        <table class="table table-hover table-sm">
                            <thead>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->stock }}</td>  
                                    <td>
                                        <a href="{{ route('products.edit' , $product->id ) }}" class="btn btn-warning btn-sm">Editar</a>
                                        <form id="delete-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?')">
                                                Eliminar
                                            </button>
                                        </form>
                                    </td>                             
                                </tr> 
                                @endforeach                               
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        Bienvenido {{ auth()->user()->name }}
                        <a href="javascript: document.getElementById('logout').submit()" class="btn btn-danger btn-sm  ms-auto">
                            Cerrar Sesión
                        </a>
                        <form action="{{ route('logout') }}" id="logout" style="display-none" method="POST">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
