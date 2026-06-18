<?php
    require_once("Cliente.php");
    require_once("ClienteDAL.php");
    $dal = new ClienteDAL();

    // $cliente = new Cliente(1213434356, "Kevin", "Berón");
    // $dal -> insertCliente($cliente);

    // $cliente = new Cliente(4234324356, "Thomas", "Verón");
    // $dal -> insertCliente($cliente);

    $clientesArray = $dal -> getClientes();
    echo "Array: " .count($clientesArray), "\n";

    foreach($clientesArray as $item) {
        echo $item -> getNombre(). " ". $item -> getApellido() ." " .$item -> getCuil() ."\n";
        echo "<br>";
    }
?>