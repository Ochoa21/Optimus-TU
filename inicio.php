<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: index.html");
}
include('conexion.php');

$user = $_SESSION['usuario'];
$consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$user'");
$datos = mysqli_fetch_array($consulta);
?>

<link rel="stylesheet" href="style.css">

<div style="padding:40px;">
<h1>Bienvenido <?php echo $user; ?> 👋</h1>

<p>Resultado: <b><?php echo $datos['resultado'] ?? 'No realizado'; ?></b></p>

<a href="test.php">Test Vocacional</a>
<a href="becas.php">Becas</a>
<a href="universidades.php">Universidades</a>
<a href="panel.php">Usuarios</a>
<a href="logout.php">Cerrar sesión</a>
</div>