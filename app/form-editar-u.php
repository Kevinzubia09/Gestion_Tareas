<?php
require_once '../config/database.php';
$id     = $_GET['id'];
$query  = "SELECT * FROM usuarios";
$result = $mysql->query($query);

$query2 = "SELECT * FROM usuarios WHERE ID=$id";
//echo $query2
$result2 = $mysql->query($query2);
$record  = $result2->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h1>Tareas<a href="interfaz.php" class="btn btn-dark">Regresar</a></h1>
            </div>
        </div>
        <form action="../models/editar_tabla_u.php" method="POST">
            <div class="row mt-5">
                <div class="col-6">
                    <label for="usuario" class="form-label">usuario</label>
                    <input type="text" class="form-control" name="usuario" id="usuario"
                        value="<?php echo $record['tarea']; ?>">
                </div>
                <div class="col-6">
                    <label for="rol_id" class="form-label">rol_id</label>
                    <select name="rol_id" id="" class="form-select">
                        <option value="0" selected>selecciona tu opción</option>
                        <?php
while ($row = $result->fetch_assoc()) {
 ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['rol_id']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-12 mb-3">
                    <label for="descripcion" class="form-label">descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion"
                        value="<?php echo $record['descripcion']; ?>">
                </div>
                <div class="col-12">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>