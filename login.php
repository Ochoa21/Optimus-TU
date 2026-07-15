<!-- login.php -->

<?php
session_start();
include("conexion.php");

if(isset($_POST['ingresar'])){

    $correo = trim($_POST['correo']);
    $clave = trim($_POST['clave']);

    // Buscar el usuario por el correo
    $consulta = mysqli_query($conexion,
    "SELECT * FROM usuarios WHERE correo='$correo'");

    if(mysqli_num_rows($consulta) > 0){

        $usuario = mysqli_fetch_assoc($consulta);

        // Verificar la contraseña
        if(password_verify($clave, $usuario['password'])){

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nombre'] = $usuario['nombre_completo'];
            $_SESSION['correo'] = $usuario['correo'];

            header("Location: inicio.php");
            exit();

        }else{

            echo "
            <script>
            alert('Correo o contraseña incorrectos');
            window.location='login.php';
            </script>";
        }

    }else{

        echo "
        <script>
        alert('Correo o contraseña incorrectos');
        window.location='login.php';
        </script>";
    }

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login | Optimus-Tu</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:
linear-gradient(rgba(0,0,0,.75),rgba(0,0,0,.75)),
url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070&auto=format&fit=crop')
center/cover;
overflow:hidden;
}

.login-box{

width:420px;
padding:45px;
border-radius:25px;

background:rgba(255,255,255,.06);
border:1px solid rgba(255,255,255,.1);

backdrop-filter:blur(12px);

box-shadow:0 0 40px rgba(0,229,255,.2);

color:white;
}

.logo{
text-align:center;
margin-bottom:30px;
}

.logo h1{
font-size:42px;
font-weight:700;
background:linear-gradient(to right,#00e5ff,#ff00d4);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
}

.logo p{
color:#d8d8d8;
font-size:14px;
letter-spacing:2px;
}

.login-box h2{
text-align:center;
margin-bottom:30px;
font-size:30px;
}

.input-box{
margin-bottom:25px;
}

.input-box input{

width:100%;
padding:16px;
border:none;
outline:none;
border-radius:14px;

background:rgba(255,255,255,.08);
color:white;
font-size:16px;

}

.input-box input::placeholder{
color:#ccc;
}

.btn{

width:100%;
padding:16px;
border:none;
border-radius:50px;

background:linear-gradient(90deg,#00bfff,#ff00cc);

color:white;
font-size:18px;
font-weight:600;
cursor:pointer;

transition:.3s;
}

.btn:hover{
transform:scale(1.03);
}

.register{
text-align:center;
margin-top:20px;
}

.register a{
color:#00e5ff;
text-decoration:none;
}

</style>
</head>
<body>

<div class="login-box">

<div class="logo">
<h1>Optimus-Tu</h1>
<p>DESCUBRE TU FUTURO</p>
</div>

<h2>Iniciar Sesión</h2>

<form method="POST">

<div class="input-box">
<input type="email" 
name="correo" 
placeholder="Correo electrónico"
required>
</div>

<div class="input-box">
<input type="password" 
name="clave" 
placeholder="Contraseña"
required>
</div>

<button type="submit" 
name="ingresar" 
class="btn">
Ingresar
</button>

</form>

<div class="register">
¿No tienes cuenta?
<a href="registro.php">Regístrate</a>
</div>

</div>

</body>
</html>