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
            <li class="nav_li"><a href="suscribete.php" class="nav_a">Suscribete</a></li>
        </ul>
    </nav>  

<div class="div1_container">
    <article class="article_1">
        <img class="img_article1" src="//localhost/proyectosena/img/cafe1.jpg" alt="imagen del cafe">
        <h2 class="div1_h1">Conoce la historia del mejor cafe del Huila </h2>
        <p class="div1_p"><a class="a_div1_p" href="historia.html"><b>Ver mas</b></a></p>
    </article>

    <aside class="aside">

        <form method="post" action="">
            <h1>Realiza tu pedido</h1>

            <label for="name">Nombre</label>
            <input type="text" name="name" placeholder="Escriba su nombre"><br>

            <label for="">Direccion</label>
            <input type="text" name="direccion" placeholder="Luegar donde recebira"> <br>

            <label for="tipo_cafe">Tipo de Café:</label>
                <select id="tipo_cafe" name="tipo_cafe" required="Seleecione un tipo">
                    <option value="cafe_espresso">Café Colombia</option>
                    <option value="cafe_americano">Café Tipica</option>
                </select><br>

            <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" min="1" max="10 k" alt="Cantidad"><br>
                <input type="submit" value="Enviar Pedido" name="register">

        </form>
    </aside>
</div>

<div class="container">
    <div class="div_producto1">    
        <img class="img_producto1" src="//localhost/proyectosena/img/Producto1.png" alt="Variedad arabica colombia">
        <h3 class="h3_div">Variedad Arabica Colombia</h3>
        <p class="p_h3">Se cultiva en las regiones montañosas de Colombia, <br>
            aprovechando la altitud y el clima adecuados para <br>
            su crecimiento. Este café se caracteriza por tener <br>
            un sabor suave y afrutado.</p>
            <h3 class="h3_divp">$45.000.00</h3>
    </div>
    
    <div class="div_producto2">    
        <img class="img_producto2" src="//localhost/proyectosena/img/Producto2.png" alt="Variedad arabica colombia">
        <h3 class="h3_div">Variedad Arabica Tipica</h3>
        <p class="p_h3">Sus plantas suelen tener un crecimiento vigoroso <br>
            y un porte vertical. Los granos de café Typica son <br>
            redondos y uniformes, y producen una taza de café con <br>
            notas de nueces, chocolate y un cuerpo medio. </p>
        <h3 class="h3_divp">$35.000.00</h3>
    </div>

    <div class="div_producto3">    
        <img class="img_producto1" src="//localhost/proyectosena/img/Producto3.png" alt="Variedad arabica colombia">
        <h3 class="h3_div">Detalles</h3>
        <p class="p_h3">Lleva los mejores detalles de la marca Diamante <br>
        sorprende a los tuyos con nuestros sabores y <br>
        con detalles como vasos personalizados y tarros <br>
        para echar el cafe y poder disfrutarlo donde quieras.</p>
        <h3 class="h3_divp"><b>$60.000.00</b></h3>
        
    </div>

</div>

<footer class="footer">
    <div class="contenedor_footer1">
    <h3 class="h3_footer">Cafe Dimante</h3>
    <p class="p1_footer">todos los derechos reservados</p>
    </div>

    <div class="contenedor2_footer">
        <p class="p2_footer">
            Estamosubicadosen Teruel,Huila, VeredaArrayanes
            Contacto - 3112211223
            Correoeléctronico -
            cafediamante@gmail.com
        </p>
    </div>
</footer>

<?php
    include("registrar.php")
?>

<?php
    include("formulariopedido.php")
?>

</body>
</html>