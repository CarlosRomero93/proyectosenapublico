<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Café Diamante</title>    
    <link rel="icon" href="/img/icono.png">
    <link rel="stylesheet" href="//localhost/proyectosena/assets/estilos.css">
</head>
<body class="body">
    <div class="incab">
    <header class="header">
        <div class="cab">
        <img class="logo" src="//localhost/proyectosena/img/logo.png" alt="logocafediamante">
        </div>
    </header>
    </div>
    <nav class="nav">
        <ul class="ul_nav">
            <li class="nav_li"><a href="index.php" class="nav_a">Inicio</a></li>
            <li class="nav_li"><a href="historia.php" class="nav_a">Nuestra Historia</a></li>
            <li class="nav_li"><a href="#" class="nav_a">Productos</a></li>
            <li class="nav_li"><a href="#" class="nav_a">Compras en linea</a></li>
            <li class="nav_li"><a href="#" class="nav_a">Suscribete</a></li>
        </ul>
    </nav>  

    <form method="post" class="form_sus">
        <h1 class="h1_sus">¡Suscribete!</h1>
    	<input class="input_sus" type="text" name="name" placeholder="Nombre completo">
    	<input class="input_sus" type="email" name="email" placeholder="Email"> 
    	<input class="input_sus" type="submit" name="register">
    </form>

<?php
    include("registrar.php")
?>
    
</body>
</html>