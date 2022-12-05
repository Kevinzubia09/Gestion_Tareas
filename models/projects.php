<?php

include_once 'config/database.php';

$queryAllProjects  = "SELECT * FROM proyectos";
$resultAllProjects = $mysql->query($queryAllProjects);
$allProjects       = mysqli_fetch_assoc($resultAllProjects);