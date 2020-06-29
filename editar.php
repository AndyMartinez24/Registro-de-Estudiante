<?php

include "helper.php";

if ($_POST) {
    $estado = isset($_POST["Status"]);
    if ($estado == false) {
        $estado = false;
    }
    $estudiante = [
        "Nombre" => $_POST["Nombre"],
        "Apellido" => $_POST["Apellido"],
        "Status" => $estado,
        "Carrera" => $_POST["Carrera"]
    ];

    unset($_SESSION["Estudiantes"][$_GET['matricula']]);
    $_SESSION["Estudiantes"][$_GET['matricula']] = $estudiante;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de estudiantes</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="crear.php">Crear estudiante <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container">
        <h2>Editando al estudiante,matricula #<?php echo $_GET['matricula'] ?></h2>
        <form action="editar.php?matricula=<?php echo $_GET['matricula'] ?>" method="POST">
            <div class="form-group">
                <label>Nombre</label>
                <input name="Nombre" type="text" class="form-control" value='<?php echo $_SESSION["Estudiantes"][$_GET['matricula']]["Nombre"] ?>'>
            </div>
            <div class="form-group">
                <label>Apellido</label>
                <input name="Apellido" type="text" class="form-control" value='<?php echo $_SESSION["Estudiantes"][$_GET['matricula']]["Apellido"] ?>'>
            </div>
            <div class="form-group">
                <label>Carrera</label>
                <input name="Carrera" type="text" class="form-control" value='<?php echo $_SESSION["Estudiantes"][$_GET['matricula']]["Carrera"] ?>'>
            </div>
            <div class="form-group form-check">
                <input name="Status" type="checkbox" class="form-check-input">
                <label>Carrera</label>
            </div>
            <button type="submit" class="btn btn-warning">Guardar cambios</button>|
            <a href='eliminar.php?matricula=<?php echo $_GET['matricula'] ?>' class="btn btn-danger">Eliminar</a>|
            <a href="index.php" class="btn btn-success">Regresar a inicio</a>
        </form>
    </div>
</body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</html>