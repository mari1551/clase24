<?php
class ConexionBD{
    private static $instancia=null;
    private $conexion;
    private function __construct(){
       // Constructor privado para evitar la creación de instancias desde fuera de la clase.
       $this->conexion = new mysqli('localhost', 'usuario', 'contraseña', 'mi_basededatos');
       if ($this->conexion->connect_error) {
           die("Error de conexión: " . $this->conexion->connect_error);
       }
    }
    public static function getConexion() {
        if (self::$instancia === null) {
            self::$instancia = new self();
        }
        return self::$instancia->conexion;
    }
}

$conexion1 = ConexionBD::getConexion();
$conexion2 = ConexionBD::getConexion();

?>