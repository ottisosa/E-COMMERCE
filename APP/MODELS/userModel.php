<?php

require_once "../CORE/connection.php";


class user
{


    // Funcion para obtener los datos de la bd  //

    function userData()
    {

        $dbConn = new dataBaseConn();
        $conn = $dbConn->connection();
        $sql = "SELECT * FROM dataa";
        $response = $conn->query($sql);
        $data = $response->fetch_all(MYSQLI_ASSOC);
        return $data;
    }
}
