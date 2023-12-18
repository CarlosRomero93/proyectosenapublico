<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Café Diamante</title>    
    <link rel="icon" href="/img/icono.png">
    <link rel="stylesheet" href="//localhost/proyectosena/estilos/estilos.css">
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
            <li class="nav_li"><a href="#" class="nav_a">Nuestra Historia</a></li>
            <li class="nav_li"><a href="#" class="nav_a">Productos</a></li>
            <li class="nav_li"><a href="#" class="nav_a">Compras en linea</a></li>
        </ul>
    </nav>

<div class="div1_container">
    <article class="article_1">
        <h2 class="div1_h1">Conoce la historia del mejor cafe del Huila </h2>
        <img class="img_article1" src="//localhost/proyectosena/img/cafe1.jpg" alt="imagen del cafe">
        <p>Café Diamante surgió como una idea familiar, ya que el Sr. Silverio Leguizamo heredó una finca en la zona de Arrayanes del municipio de Teruel de su padre. Desde entonces, se ha dedicado a la cosecha de café durante más de 30 años. Las cosechas en esta región del país ocurren anualmente en los meses de abril, mayo y junio. Durante estos tiempos, trabajadores de varios departamentos de Colombia también llegan a trabajar. Se trata de un negocio con una estructura jerárquica, liderado por el propietario de la finca. A continuación se encuentra la hija del propietario, quien actúa como administradora y contadora. Luego están los cosechadores de café, quienes tienen un líder que supervisa su trabajo y reporta al propietario de la finca.
        </p>
    </article>

    <aside class="aside">

        <form class="form" action="#">
            <h1>Tu pedido rapido</h1>

            <label for="name">Nombre</label>
            <input type="text" id="name"><br>

            <label for="meil">Correo Electronico</label>
            <input type="text" name="correo_electronico"> <br>

            <label for="tipo_cafe">Tipo de Café:</label>
                <select id="tipo_cafe" name="tipo_cafe" required="Seleecione un tipo">
                    <option value="cafe_espresso">Café Colombia</option>
                    <option value="cafe_americano">Café Tipica</option>
                </select><br>

            <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" min="1" max="10 k" alt="Cantidad"><br>
                <input type="submit" value="Enviar Pedido">

        </form>
        
    </aside>
</div>

<script src="script.js/script.js"></script>
    
</body>

