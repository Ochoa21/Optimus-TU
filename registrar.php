<?php
include('conexion.php');

$nombre = $_POST['nombre'];
$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "INSERT INTO usuarios (nombre, usuario, password) 
VALUES ('$nombre', '$user', '$pass')";

mysqli_query($conexion, $sql);

echo "<script>alert('Usuario creado'); window.location='index.html';</script>";
?>