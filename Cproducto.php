<?php

//Creación de una clase "Producto". ● Crear una clase "Producto" con las propiedades "id", "nombre", "precio" y
//"cantidad". ● Agregar métodos para obtener y establecer los valores de las propiedades. ● Implementar el constructor y los métodos "guardar", "editar", "eliminar" y listar" utilizando SQL.

class Cproducto{
    private $id;
    private $nombre;
    private $precio;
    private $cantidad;
    public function __construct($id,$nombre,$precio,$cantidad){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->cantidad=$cantidad;
    }

    public function get_id(){
        return $this->id;
    }

    public function get_nombre(){
        return $this->nombre;
    }
    public function get_precio(){
        return $this->precio;
    }

    public function get_cantidad(){
        return $this->cantidad;
    }

    public function guardar() {
        $consulta_sql = "INSERT INTO tabla_productos (nombre, precio, cantidad) VALUES ('$this->nombre', '$this->precio','$this->cantidad')";
        return $consulta_sql;
    }
    
    public function editar() {
        // Implementa la lógica para actualizar el producto en la base de datos utilizando SQL
    }
    
    public function eliminar() {
        // Implementa la lógica para eliminar el producto de la base de datos utilizando SQL
    }
    
    public static function listar() {
        // Implementa la lógica para listar todos los productos desde la base de datos utilizando SQL
    }
}

?>