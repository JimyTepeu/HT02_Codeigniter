<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Menú</title>
</head>
<body>

    <div>
        <h1>Menú de Inicio</h1>
        <hr>
        <ul>
            <li> <a href="<?=base_url('ver_nivel')?>" class="btn btn-outline-primary">Niveles Academicos</a></li>
            <li> <a href="<?=base_url('ver_ciudadano')?>" class="btn btn-outline-primary">Ciudadanos</a></li>
            <li> <a href="<?=base_url('ver_municipio')?>" class="btn btn-outline-primary">Municipios</a></li>
            <li> <a href="<?=base_url('ver_departamento')?>" class="btn btn-outline-primary">Departamentos</a></li>
            <li> <a href="<?=base_url('ver_region')?>" class="btn btn-outline-primary">Regiones</a></li>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>