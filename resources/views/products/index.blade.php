<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Listado de Productos</title>
</head>
<body>

    <br>
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
                        ...
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>