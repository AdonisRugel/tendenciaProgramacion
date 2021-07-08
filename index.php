<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Proyecto BLOG</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" media="screen" type="text/css" href="./assets/css/style.css">
    </head>
    <body>
<!--        CABECERA-->
        <header>
            <div id="cabececar">
                <div id="logo">
                    <a href="index.php">BLOG ISTJBA</a>
                </div>
            </div>
<!--             MENU-->
            <div id="menu">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="index.php">blog1</a></li>
                    <li><a href="index.php">blog2</a></li>
                    <li><a href="index.php">Contactenos</a></li>
                    <li><a href="index.php">Cerrar</a></li>
                </ul>
            </div>
        <div class="clearfix"></div>
        </header>
<!--         CONTENEDOR-->
        <div id="contenedor">
<!--          LATERAL  -->
        <aside id="sidebar">
            <div id='buscador' class="bloque">
                <h3> BUSCAR </h3>
                <form action="buscar.php" method="POST">
                    <label for="busqueda">Busqueda</label>
                    <input type="text" name="busqueda">
                    <input type="submit" value='Buscar'> 
                </form>
            </div>
            <div id='usuario_logueado' class="bloque">
                <h3> LOGIN </h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password">
                    <input type="submit" value='Entrar'>
                </form>
            </div>
            <div id='register' class="bloque">
                <h3> REGISTRO </h3>
                <form action="registro.php" method="POST">
                    <label for="nombre">nombre</label>
                    <input type="text" name="nombre">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos">
                    <label for="email">Correo</label>
                    <input type="email" name="correo">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password">
                    <input type="submit" value='Entrar'>
                </form>
            </div>
        </aside>
        <div id="principal">
            <article class="entrada">
                <a  href="#"><h2>Titulo del Articulo</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p></a>
                <a  href="#"><h2>Titulo del Articulo</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p></a>
                <a  href="#"><h2>Titulo del Articulo</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p></a>
            </article>
        </div>
</div>
<footer id="pie">
    <p>Instituto Tecnológico Superior Juan Bautizta Aguirre &copy; </p>
</footer>
    </body>
</html>