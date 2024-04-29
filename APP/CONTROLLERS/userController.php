<?php
require_once "../MODELS/userModel.php";

$function = $_GET['function'];

// Switch para usar las distintas funcionalidades //

switch ($function) {

    case "add":


        break;

    case "delete":



        break;

    case "obtain":

        obtainData();

        break;
}


//  Funcion que le asignamos al case obtener del switch  extrayendo datos a traves del metodo post//

function obtainData()
{
    $data = $_POST['data'];
    $result = (new user())->userData($data);
    echo json_encode($result);
}


?>