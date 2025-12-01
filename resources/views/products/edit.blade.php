<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Producto</title>
</head>
<body>

    <br>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>