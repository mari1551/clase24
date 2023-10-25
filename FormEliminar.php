<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion ABM</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <div id="titulo">
            <h1>Ejercicios Clase 24</h1>
        </div>         
    </header>
    <nav>
        <?php
           include "CABM.php"
        ?>
    </nav>
  
    <div class="DivCuerpo" >
        <div class="DivContenido" id="DivEliminar">               
            <form id="formEliminar" method="post" action="funcEliminar.php">
                <h2>Eliminar un producto de la base de datos</h2>
                Id del Producto a eliminar: <input type="number" name="id" id="idP"><br>
                <input type="submit" value="Eliminar" id="btn_eliminar">
            </form>   
            </div>     
    </div>

    <footer>
        <p>Realizado por: Mariana Delgado - Clase 24 - 23 de octubre de 2023- Argentina Programa</p>
    </footer>
</body>
</html>