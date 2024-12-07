<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container" style="border:1px solid;">
        <div class="row">
            <div class="col-lg-4" style="border:1px solid;">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-center">Registro de productos</h3>
                    </div>
                    <div class="class-body">
                        <form action="" method="post" id="frm">
                            <div class="form-group">
                                <input type="hidden" name="idp" id="idp" value="">
                                <label for="codigo">Código</label>
                                <br>
                                <input type="text" name="codigo" id="codigo" placeholder="Código..." class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="producto">Producto</label>
                                <br>
                                <input type="text" name="producto" id="producto" placeholder="Producto..."class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="precio">Precio</label>
                                <br>
                                <input type="text" name="precio" id="precio" placeholder="Precio..."class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="cantidad">Cantidad</label>
                                <br>
                                <input type="text" name="cantidad" id="cantidad" placeholder="Cantidad..."class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="button" value="Registrar" id="registrar" class="btn btn-primary btn-block"class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8" style="border:1px solid;">
                <div class="row">
                    <div class="col-lg-12" style="border:1px solid">
                        <form action="" method="post" id="frmbusqueda">
                            <div class="form-group">
                                <label for="buscar">Buscar: </label>
                                <br>
                                <input type="text" name="buscar" id="buscar" placeholder="Buscar..." class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12" style="border:1px solid">
                        <table class="table table-hover table-responsive">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Artistas</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="resultado">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>