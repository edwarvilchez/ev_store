
@extends('layouts.main')
@section('contenido')
<title>Crear Producto</title>

    <div class="container">
        <diw class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">                        
                        <h2>Crear Producto</h2>                                                                                            
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.save') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nombre</label>                                    
                                <input type="text" class="form-control" name="name" required>                                
                            </div>
                            <div class="form-group">
                                <label for="description">Descripción</label>                                    
                                <input type="text" class="form-control" name="description">                                
                            </div>
                             <div class="form-group">
                                <label for="price">Precio</label>                                    
                                <input type="number" class="form-control" name="price" required>                                
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>                                    
                                <input type="number" class="form-control" name="stock" required>                                
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