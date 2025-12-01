
@extends('layouts.main')
@section('contenido')
<title>Editar Producto</title>
 
    <div class="container">
        <diw class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">                        
                        <h2>Editar Producto</h2>                                                                                            
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="name">Nombre</label>                                    
                                <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>                                
                            </div>
                            <div class="form-group">
                                <label for="description">Descripción</label>                                    
                                <input type="text" class="form-control" name="description" value="{{ $product->description }}">                                
                            </div>
                             <div class="form-group">
                                <label for="price">Precio</label>                                    
                                <input type="number" class="form-control" name="price" vale="{{ $product->price }}" required>                                
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>                                    
                                <input type="number" class="form-control" name="stock" value="{{ $product->stock }}" required>                                
                            </div>
                            <br>
                            <div class="btn-group" role="group">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Guardar
                                </button>
                                <a href="{{ route('products.index') }}" class="btn btn-danger btn-sm">
                                    Cancelar
                                </a>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection