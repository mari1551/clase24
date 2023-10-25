<?php
//Creación de una clase "BaseDeDatos". ● Crear una clase "BaseDeDatos" que tenga como propiedad un objeto PDO
//para conectarse a la base de datos. ● Agregar un método "conectar" para realizar la conexión. ● Agregar métodos para ejecutar consultas SQL y devolver los resultados

class CBaseDeDatos{
    private $conexion;
    public function conectar($host, $nombreBD, $usuario, $contrasena){
        try {
            $dsn = "mysql:host=$host;dbname=$nombreBD";
            $this->conexion = new PDO($dsn, $usuario, $contrasena);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexión exitosa a la base de datos.";
        } catch (PDOException $e) {
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }
    public function consultar($consulta_sql) {
        try {
            $consulta = $this->conexion->query($consulta_sql);
    
            if ($consulta) {        
                $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);
                return $resultados;
            } 
            else {
                echo '1. Error en la consulta: ' . $this->conexion->errorInfo()[2];
            }
        } 
        catch (PDOException $e) {
            echo '2. Error en la consulta: ' . $e->getMessage();
        }
    }
}
$bd = new CBaseDeDatos();
$bd->conectar("localhost", "bd_clase24", "root", "");
?>