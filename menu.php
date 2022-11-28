<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="styles.style.css">    
<title>Document</title>
</head>
<body>
    <header class="header">
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
    <a class="nav-link" href="#">Perfil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">Disabled</a>
  </li>
</ul>
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">sistema de tareas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Perfil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Proyectos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">Disabled</a>
  </li>
</ul>
    
    </header>
    <main>
    
    <section>
        <form class="form-inline" method="get">
            <div class="form-group">
                <select name="filter" class="form-control" onvhange="form.submit()" >
                    <option value="0">Filtro de datos de tarea</option>
                    <?php $filter = (isset($_GET['filter'])? strtolower($_GET['filter']) :NULL ); ?>
                    <option value="1" <?php if($filter == 'without starting'){echo 'selected';} ?>>sin Empezar </option>
                    <option value="2" <?php if($filter == 'process'){echo 'selected';} ?>>proceso </option>
                    <option value="3" <?php if($filter == 'finished'){echo 'selected';} ?>>finalizada </option>   
                </select>

            </div>

        </form>
        <br />
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <tr>
            <th>No</th>
            <th>Codigo</th>
            <th>Titulo Tarea</th>
            <th>Descripcion</th>
            <th>Fecha Entrega</th>
            <th>Estado</th>
            <th>Acciones</th>
</tr>

        </table>

    </div> 
    <footer>

    </footer>
    </main>
</body>
</html>