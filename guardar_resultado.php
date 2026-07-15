<?php
session_start();
include('conexion.php');

$user = $_SESSION['usuario'];
$resultado = $_POST['resultado'];

mysqli_query($conexion, "UPDATE usuarios SET resultado='$resultado' WHERE usuario='$user'");

echo "<script>alert('Resultado guardado'); window.location='inicio.php';</script>";
?>