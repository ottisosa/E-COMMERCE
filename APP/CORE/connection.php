<?php

class dataBaseConn{



  //  Funcion para la conexion de la base de datos  //

    function connection()
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $db = "";
        $port = 3306;
        $conn = new mysqli($host, $username, $password, $db, $port);



        // Para verificar la conexion //

        if ($conn->connect_error) {
            die("Failed connection: ".$conn->connect_error);
        } else {
            echo "Succesful connection !";
        }

        return $conn;
    }
}





?>