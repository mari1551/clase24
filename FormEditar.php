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
        <div class="DivContenido" id="DivEditar">            
            <form id="formEditar" method="post" action="funcEditar.php">
                <h2>Editar un producto de la base de datos</h2>
                Id del Producto a editar: <input type="number" name="id" id="idP"><br>
                nombre del producto: <input type="text" name="nombre" id="nombreP"><br>
                precio del producto: <input type="number" name="precio" id="precioP"><br>
                cantidad del producto: <input type="number" name="cantidad" id="cantidadP"><br>
                <input type="submit" value="Editar" id="btn_editar">
            </form>
        </div> 
    </div>

    <footer>
        <p>Realizado por: Mariana Delgado - Clase 24 - 23 de octubre de 2023- Argentina Programa</p>
    </footer>
</body>
</html>