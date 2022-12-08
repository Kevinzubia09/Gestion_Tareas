<?php
require_once 'database.php';
$id = $_GET['id'];

$query = "DELETE FROM proyectos WHERE id = '$id'";

$conn->query($query);

header("location: index.php");