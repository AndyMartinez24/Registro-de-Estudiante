<?php

include "helper.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de estudiantes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="index.php?filtro=Redes">Redes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?filtro=Software">Software</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?filtro=Multimedia">Multimedia</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?filtro=Seguridad">Seguridad informática</a>
        </li>
    </ul>
    <br>
    <div class="container">
        <div class="row">
            <?php if (isset($_SESSION["Estudiantes"])) : ?>

                <?php foreach ($_SESSION["Estudiantes"] as $key => $value) : ?>
                    <?php if (!isset($_GET["filtro"])) : ?>
                        <?php
                                    $tipo = "";
                                    if ($_SESSION["Estudiantes"][$key]["Status"] == true) {
                                        $tipo = "info";
                                    } else {
                                        $tipo = "dark";
                                    }

                                    ?>
                        <div class="col-md-4 p-3 mb-2 bg-<?php echo $tipo ?> text-white">
                            <h3>Nombre</h3>
                            <P><?php echo $_SESSION["Estudiantes"][$key]["Nombre"] ?></P>
                            <hr>
                            <h3>Apellido</h3>
                            <P><?php echo $_SESSION["Estudiantes"][$key]["Apellido"] ?></P>
                            <hr>
                            <h3>Carrera</h3>
                            <P><?php echo $_SESSION["Estudiantes"][$key]["Carrera"] ?></P>
                            <hr>
                            <h3>Estado</h3>
                            <?php

                                        if ($_SESSION["Estudiantes"][$key]["Status"] == true) {
                                            echo "<P>Activo</P>";
                                        } else {
                                            echo "<P>Inactivo</P>";
                                        }
                                        ?>
                            <br>
                            <a role="button" href='editar.php?matricula=<?php echo $key ?>' class="btn btn-success">Editar</a>
                        </div>
                    <?php endif ?>

                    <?php if (isset($_GET["filtro"]) && strcasecmp($_GET["filtro"],$_SESSION["Estudiantes"][$key]["Carrera"]) == 0) : ?>
                        <?php
                                    $tipo = "";
                                    if ($_SESSION["Estudiantes"][$key]["Status"] == true) {
                                        $tipo = "info";
                                    } else {
                                        $tipo = "dark";
                                    }

                                    ?>
                        <div class="col-md-4 p-3 mb-2 bg-<?php echo $tipo ?> text-white">
                            <h3>Nombre</h3>
                            <P><?php echo $_SESSION["Estudiantes"][$key]["Nombre"] ?></P>
                            <hr>
                            <h3>Apellido</h3>
                            <P><?php echo $_SESSION["Estudiantes"][$key]["Apellido"] ?></P>
                            <hr>
                            <h3>Carrera</h3>
                            <P><?php echo $_SESSION["Estudiantes"][$key]["Carrera"] ?></P>
                            <hr>
                            <h3>Estado</h3>
                            <?php

                                        if ($_SESSION["Estudiantes"][$key]["Status"] == true) {
                                            echo "<P>Activo</P>";
                                        } else {
                                            echo "<P>Inactivo</P>";
                                        }
                                        ?>
                            <br>
                            <a role="button" href='editar.php?matricula=<?php echo $key ?>' class="btn btn-success">Editar</a>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            <?php endif ?>

        </div>
    </div>
</body>

</html>
