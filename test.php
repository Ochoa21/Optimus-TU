<?php session_start(); ?>

<link rel="stylesheet" href="style.css">

<div style="padding:40px;">
<h1>Test Vocacional</h1>

<form action="guardar_resultado.php" method="POST">
<select name="resultado">
<option value="Ingeniería de Sistemas">Tecnología</option>
<option value="Medicina">Salud</option>
<option value="Derecho">Leyes</option>
<option value="Administración">Negocios</option>
</select>

<button>Guardar</button>
</form>
</div>