<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ciudadanos</title>
</head>
<body>
    <h1>Ciudadanos</h1>
    <br>

    <!-- Button para agregar Nivel Academico -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar Ciudadanos
        </button>

        <!-- Ventana para agregar Nivel Academico -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nivel Ciudadano</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <!-- Formulario para ingreso de datos -->
                <form action="<?=base_url('guardar_Ciudadano')?>" method="post">
                    
                    <!-- DPI -->
                    <div class="mb-3">
                        <label for="txt_dpi" class="form-label">Nuevo DPI</label>
                        <input type="text" class="form-control" id="txt_dpi" name="txt_dpi" placeholder="Nuevo DPI">
                    </div>
                    
                    <!-- Apellido -->
                    <div class="mb-3">
                        <label for="txt_apellido" class="form-label">Nuevo Apellido</label>
                        <input type="text" class="form-control" id="txt_apellido" name="txt_apellido" placeholder="Nuevo Apellido">
                    </div>
                    
                    <!-- Nombre -->
                    <div class="mb-3">
                        <label for="txt_nombre" class="form-label">Nuevo Nombre</label>
                        <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nuevo Nombre">
                    </div>
                    
                    <!-- Direccion -->
                    <div class="mb-3">
                        <label for="txt_direccion" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="txt_direccion" name="txt_direccion" placeholder="Direccion">
                    </div>
                    
                    <!-- Telefono de casa -->
                    <div class="mb-3">
                        <label for="txt_telcasa" class="form-label">Telefono de casa</label>
                        <input type="text" class="form-control" id="txt_telcasa" name="txt_telcasa" placeholder="Telefono de casa">
                    </div>
                    
                    <!-- Telefono movil -->
                    <div class="mb-3">
                        <label for="txt_telmovil" class="form-label">Telefono Movil</label>
                        <input type="text" class="form-control" id="txt_telmovil" name="txt_telmovil" placeholder="Telefono Movil">
                    </div>
                    
                    <!-- e-mail -->
                    <div class="mb-3">
                        <label for="txt_email" class="form-label">Nuevo e-Mail</label>
                        <input type="text" class="form-control" id="txt_email" name="txt_email" placeholder="Nuevo e-Mail">
                    </div>
                    
                    <!-- Fecha de Nacimiento -->
                    <div class="mb-3">
                        <label for="txt_fechanac" class="form-label">Fecha de Nacimiento</label>
                        <input type="text" class="form-control" id="txt_fechanac" name="txt_fechanac" placeholder="Fecha de Nacimiento">
                    </div>
                    
                    <!-- Codigo Nivel Academico -->
                    <div class="mb-3">
                        <label for="txt_nivelaca" class="form-label">Codigo Nivel Academico</label>
                        <input type="text" class="form-control" id="txt_nivelaca" name="txt_nivelaca" placeholder="Codigo Nivel Academico">
                    </div>
                    
                    <!-- Codigo Municipio -->
                    <div class="mb-3">
                        <label for="txt_codmun" class="form-label">Codigo Municipio</label>
                        <input type="text" class="form-control" id="txt_codmun" name="txt_codmun" placeholder="Codigo Municipio">
                    </div>
                    

                    <input type="submit" class="btn btn-primary" id="btn_guardar" name="btn_guardar" value="Agregar Nuevo Ciudadano">
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
            </div>
        </div>
        </div>

    <br><br>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>DPI</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono de casa</th>
                <th>Telefono Movil</th>
                <th>e-Mail</th>
                <th>Fecha de Nacimiento</th>
                <th>Codigo Nivel Academico</th>
                <th>Codigo Municipio</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($ciudadanobd as $registros):
            ?>
            <tr>
                <td> <?php echo $registros['dpi'] ?> </td>
                <td> <?php echo $registros['apellido'] ?> </td>
                <td> <?php echo $registros['nombre'] ?> </td>
                <td> <?php echo $registros['direccion'] ?> </td>
                <td> <?php echo $registros['tel_casa'] ?> </td>
                <td> <?php echo $registros['tel_movil'] ?> </td>
                <td> <?php echo $registros['email'] ?> </td>
                <td> <?php echo $registros['fechanac'] ?> </td>
                <td> <?php echo $registros['cod_nivel_acad'] ?> </td>
                <td> <?php echo $registros['cod_muni'] ?> </td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>