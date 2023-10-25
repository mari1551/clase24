<?php
// Creación de una clase "ABM". ● Crear una clase "ABM" con los métodos "agregar", "editar", "eliminar" y
// "listar" utilizando la clase "Producto" y la clase "BaseDeDatos". ● Agregar un método "menu" para presentar las opciones disponibles al usuario.
class CAbm{
    public function agregar($producto){
        $nom='"'.$producto->get_nombre().'"';
        $pre=$producto->get_precio();
        $can=$producto->get_cantidad();
        $consulta_sql = "INSERT INTO tabla_productos (nombre, precio, cantidad) VALUES ($nom, $pre,$can)";            
        return $consulta_sql;
    }
    public function editar($producto){
        $id=$producto->get_id();
        $nom='"'.$producto->get_nombre().'"';
        $pre=$producto->get_precio();
        $can=$producto->get_cantidad();
        $consulta_sql = "UPDATE tabla_productos SET nombre=$nom, precio=$pre, cantidad=$can WHERE id=$id";            
        return $consulta_sql;
    }
    public function eliminar($id){
        $consulta_sql="DELETE FROM tabla_productos WHERE id = $id";
        return $consulta_sql;
    }
    public function listar(){
        $consulta_sql = "SELECT * FROM tabla_productos";              
        return $consulta_sql;
    }
    public function menu(){
        echo '<a href="index.php">Inicio</a>'." -";
        echo '<a href="FormAgregar.php">Agregar Producto</a>'." -";
        echo '<a href="FormEditar.php">Editar Producto</a>'." - ";
        echo '<a href="FormEliminar.php">Eliminar Producto</a>'." - ";
        echo '<a href="FuncListar.php">Listar y mostrar Producto</a>';
    }
}
$abm= new CAbm();
$abm->menu();
?>