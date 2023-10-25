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
        <?php
          include 'Cproducto.php'; 
          include "Cbasedatos.php";
      
          if($_SERVER['REQUEST_METHOD']=='POST'){ 
              $id= $_POST['id'];
              $nombre= $_POST['nombre'];
              $precio= $_POST['precio'];
              $cantidad= $_POST['cantidad'];
              
              $new_producto= new Cproducto($id,$nombre,$precio,$cantidad);    
          }          
          $abm= new Cabm();
          $consulta=$abm->editar($new_producto);
          $resultados=$bd->consultar($consulta);
          echo "<br>Se ha editado el producto satisfactoriamente";        
      ?>
    </div>
    <footer>
        <p>Realizado por: Mariana Delgado - Clase 24 - 23 de octubre de 2023- Argentina Programa</p>
    </footer>
</body>
</html>
