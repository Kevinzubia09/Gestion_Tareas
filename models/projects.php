<?php

include_once dirname(__DIR__) . '/config/database.php';

// obtener todos los proyectos
$queryAllProjects  = "SELECT * FROM proyectos";
$resultAllProjects = $mysql->query($queryAllProjects);
$allProjects       = [];

while ($row = $resultAllProjects->fetch_assoc()) {
 $allProjects[] = $row;
}