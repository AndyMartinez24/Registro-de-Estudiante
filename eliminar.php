<?php


include "helper.php";

if ($_POST) {
    unset($_SESSION["Estudiantes"][$_POST['id']]);
    header('Location: index.php');
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
        <h2>Estas seguro de eliminar al estudiante,matricula #<?php echo $_GET['matricula'] ?> ?</h2>
        <form action="eliminar.php" method="POST">
            <input type="text" value='<?php echo $_GET['matricula'] ?>' name="id" hidden>
            <button type="submit" class="btn btn-danger">Eliminar</button>|
            <a href='editar.php?matricula=<?php echo $_GET['matricula'] ?>' class="btn btn-primary">Regresar</a>|
            <a href="index.php" class="btn btn-success">Regresar a inicio</a>
        </form>
    </div>
</body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</html>
