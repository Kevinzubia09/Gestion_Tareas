<?php
include_once 'config/database.php';
include_once 'models/projects.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/inter.css">
    <title>interfaz</title>
</head>

<body>
    <div class="container">
        <h1 class="ti-menu">SISTEMA DE GESTION DE PROYECTOS BRYDAKEAL </h1>
    </div>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Proyectos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Crear Proyecto</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Proyectos finalizados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled">Proyectos en Proceso</a>
        </li>
    </ul>


    <br />
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col">
                <h1>Opción <a href="../../form-insert.php" class="btn btn-primary">añadir</a></h1>
            </div>
        </div>
        <div class="container">
            <div class="row mt-0">
                <div class="col">
                    <h1>gastos<a href="../index.php" class="btn btn-dark">Regresar</a></h1>
                </div>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Id</th>
                        <th>tarea</th>
                        <th>Categoria</th>
                        <th>asignado</th>
                        <th>Descripción</th>
                        <th>Hora de Registro</th>
                        <th>Status</th>
                        <th>Fechas de vencimiento</th>
                        <th>Tiempo de la tarea</th>

                    </tr>
                </table>
                <div class="container-fluid">
                    <div class="row mt-5">
                        <div class="col">
                            <h1>Opción <a href="../../form-insert.php" class="btn btn-primary">Eliminar</a></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>



</body>

</html>