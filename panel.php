<?php
session_start();
include('conexion.php');
?>

<link rel="stylesheet" href="style.css">

<div style="padding:40px;">
<h2>Usuarios</h2>

<table border="1">
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Usuario</th>
<th>Resultado</th>
<th>Acción</th>
</tr>

<?php
$res = mysqli_query($conexion, "SELECT * FROM usuarios");

while($row = mysqli_fetch_array($res)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['nombre']; ?></td>
<td><?php echo $row['usuario']; ?></td>
<td><?php echo $row['resultado']; ?></td>
<td><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
</tr>
<?php } ?>
</table>
</div>