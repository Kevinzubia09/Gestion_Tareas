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

<?php
if(isset($_GET['aksi']) == 'delete'){

  $nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
  $cek = mysqli_query($con, "SELECT * FROM tareaUni WHERE codigo='$nik'");
  if(mysqli_num_rows($cek)==0){
    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="t"'
  }else{
    $delete = mysqli_query($con, "DELETE FROM TareaUni WHERE codigo='$nik'");
    if($delete){
      echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="t"'
    }else{
      echo '<div class="alert alert-danger alert-dismissable"><button type"button" class="close" data-dismiss="alert" aria-hidden="t"'
    }
  }
}
        <form class="form-inline" method="get">
            <div class="form-group">
                <select name="filter" class="form-control" onchange="form.submit()" >
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
<?php
if($filter){
    $sql = mysqli_query($con, "SELECT * FROM tareaUni WHERE estado='$filter' ORDER BY codigo ASC");
}else{
    $sql = mysqli_query($con, "SELECT * FROM tarea_Uni ORDER BY codigo ASC");
}
if(mysql_num_row($sql) == 0){
    echo '>tr><td colspan="8">No hay datos</td></tr>';
}else{
    $no = 1;
    while($row =mysql_fetch_assoc(sql))
    echo'
    <tr>
        <td>'.$no.'</td>
         <td>'.$row ['codigo'].'</td>
          <td>'.$row ['titulo_tarea'].'</td>
           <td>'.$row ['descripcion'].'</td>
            <td>'.$row['fecha_entrega'].'</td>
            
            <td>';
            if(row['estado'] =='1'){
                echo '<span class="label label-success">sinEmpezar</span>';
            }
            else if ($row['estado'] == '2' ){
                echo '<span class="label label-info">Proceso</span>';
            }
            else if ($row['estado'] == '3'){
                echo '<span class="label label-warning">Finalizada</span>';
            }
            echo'
            </td>
            <td>
            <a href="edit.php?nik= .$row['codigo'].'" title="editar datos" class="btn btn-primary bt-sm"><span class="glyphicon glyphicon-edit" aria-hidden-"true"></spam></a> 
            <a href="" index.php?aksi=delete&nik='.$row['codigo'].'" title="Eliminar" onclick="return confirm(\'esta seguro de borrar los datos'.$row ['TITULO_TAREA'].'?/'" class="btn btn-wa></a> 
            </td>
            </tr>
            ';
            $no++;
            }
        }
      ?>
           
        </table>

    </div> 
    <footer>

    </footer>
   
</body>
</html>