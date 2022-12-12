<?php
require_once '../config/database.php';
$query  = "SELECT g.id, g.tarea, g.asignado, g.descripcion, g.hora_de_registro, g.fecha_de_vencimiento, c.nombre  FROM proyectos g LEFT JOIN materias c ON g.categoria = c.id";
$result = $mysql->query($query);
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
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/inter.css">
    <title>interfaz</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="ti-menu">SISTEMA DE GESTION DE PROYECTOS BRYDAKEAL </h1>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <a class="btn btn-dark" href="../index.php">Regresar</a>
            </div>
            <div class="col">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Proyectos en Proceso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Proyectos finalizados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Proyectos-2022-2023</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h1 class="interfaz">Tareas</h1>
                            </div>
                            <div class="col">
                                <a class="btn btn-dark float-end" href="anadir.php">Crear Nuevo Proyecto</a>
                            </div>
                        </div>
                    </div>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>tarea</th>
                                <th>Categoria</th>
                                <th>asignado</th>
                                <th>Descripción</th>
                                <th>Hora de Registro</th>
                                <th>Status</th>
                                <th>Fechas de vencimiento</th>
                                <th>materia</th>
                                <th>Tiempo de la tarea</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
while ($row = $result->fetch_assoc()) {
 ?>
                            <tr>
                                <td> <?php echo $row["id"]; ?> </td>
                                <td> <?php echo $row['tarea']; ?> </td>
                                <td> <?php echo $row['categoria']; ?> </td>
                                <td> <?php echo $row['asignado']; ?> </td>
                                <td> <?php echo $row['descripcion']; ?> </td>
                                <td> <?php echo $row['hora_de_registro']; ?> </td>
                                <td> <?php echo $row['status']; ?> </td>
                                <td> <?php echo $row['fecha_de_vencimiento']; ?> </td>
                                <td> <?php echo $row['nombre']; ?> </td>
                                <td> <?php echo $row['tiempo']; ?> </td>
                                <td>
                                    <a href="form-editar.php?id=<?php echo $row['id']; ?>"
                                        class="btn btn-dark float-end">Editar</a>
                                    <a href="../models/borrar_tarea.php?id=<?php echo $row['id']; ?>"
                                        class="btn btn-dark float-end">Eliminar</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>