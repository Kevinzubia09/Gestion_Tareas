<!DOCTYPE html>
<html lang="es">

<head>
    <title>inicio</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h1>gastos<a href="index.php" class="btn btn-dark">Regresar</a></h1>
            </div>
        </div>
        <form action="config/insert_spending.php" method="POST">
            <div class="row mt-5">
                <div class="col-6">
                    <label for="cantidad" class="form-label">Tarea</label>
                    <input type="text" class="form-control" name="cantidad">
                </div>
                <div class="col-6">
                    <label for="categoria" class="form-label">categoria</label>
                    <select class="form-select" name="categoria" id="categoria">
                        <option value="0" selected>selecciona tu opcion</option>

                    </select>
                </div>
                <div class="col-12 mb-3">
                    <label for="descripcion" class="form-label">descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion">
                </div>
                <div class="col mb-12">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </form>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>

</html>