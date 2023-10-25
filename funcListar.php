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
  
    <div class="DivCuerpo">
        <div class="DivContenido" id="DivListar">
            <h2>Productos de la base de datos</h2>
            <?php
                include 'Cproducto.php'; //incluir archivo de productos
                include "Cbasedatos.php";
                
                $abm= new Cabm();
                $consulta=$abm->listar();
                $resultados=$bd->consultar($consulta);

                if (count($resultados) > 0) {
                    foreach ($resultados as $row) {                    
                        echo '<div class="producto">';
                        echo 'ID: ' . $row['id'] . ' | Nombre: ' . $row['nombre'].' | Precio: $' . $row['precio'] .' | cantidad: ' . $row['cantidad'];
                        echo '</div>';
                    }
                }
                else {
                    echo 'No hay productos disponibles.';
                }
            ?>
        </div>        
    </div>

    <footer>
        <p>Realizado por: Mariana Delgado - Clase 24 - 23 de octubre de 2023- Argentina Programa</p>
    </footer>
</body>
</html>



