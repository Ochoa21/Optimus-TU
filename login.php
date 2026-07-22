<?php
session_start();
include('conexion.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

$consulta = "SELECT * FROM usuarios WHERE usuario='$user' AND password='$pass'";
$resultado = mysqli_query($conexion, $consulta);

if(mysqli_num_rows($resultado) > 0){
    $_SESSION['usuario'] = $user;
    header("Location: inicio.php");
} else {
    echo "<script>alert('Datos incorrectos'); window.location='index.html';</script>";
}
?>