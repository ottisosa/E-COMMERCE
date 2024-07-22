<?php

require_once "config.php";

class Database {
    
    // Objeto de conexion MySQLi
    private $mysqli;
    
    //Instancia unica de la clase Database
    private static $instanceDB;
    
    // Metodo para establecer conexion a la base de datos
    public function connect(){
        
        //Crear una nueva conexion MySQLi
        $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
        
        // Verificar si existen errores en la conexion
        if ($this->mysqli->connect_error){
            // Lanzar una excepcion
            throw new Exception ('Error de conexion: ' . $this->mysqli->connect_error);
        }
    }
    
    // Metodo estatico para obtencion de la instancia de la clase Database
    public static function getInstanceDB(){
        
        //Verificar si la instancia NO existe
        if (!self::$instanceDB){
            // Crear nueva instancia de Database
            self::$instanceDB = new Database();
            //Establecer la conexion llamando al metodo connect()
            self::$instanceDB->connect();
        }
        //Retorna el bojeto mysqli para su uso
        return self::$instanceDB->mysqli;
    }
}

?>
