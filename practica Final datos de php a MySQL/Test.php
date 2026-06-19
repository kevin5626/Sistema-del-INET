<?php
    require_once("Cliente.php");
    require_once("ClienteDAL.php");

    require_once("TelefonoDeContacto.php");
    require_once("TelefonoDeContactoDAL.php");

    require_once("Direccion.php");
    require_once("DireccionDAL.php");
    
    require_once("Producto.php");
    require_once("ProductoDAL.php");
    
    require_once("DetalleProducto.php");
    require_once("DetalleProductoDAL.php");

    $dal = new ClienteDAL();
    $dalTelefonoDeContacto = new TelefonoDeContactoDAL();
    $dalDireccion = new DireccionDAL();
    $dalProducto = new ProductoDAL();
    $dalDetalleProducto = new DetalleProductoDAL();

    $cliente1 = new Cliente(1213434356, "Kevin", "Berón");
    $dal -> insertCliente($cliente1);

    $cliente2 = new Cliente(4234324356, "Thomas", "Verón");
    $dal -> insertCliente($cliente2);

    $clientesArray = $dal -> getClientes();
    echo "Array: " .count($clientesArray), "\n";

    foreach($clientesArray as $item) {
        echo $item -> getNombre(). " ". $item -> getApellido() ." " .$item -> getCuil() ."\n";
    }

    $telefono1 = new TelefonoDeContacto(9, "Fijo", 100, 11224556, $cliente1 -> getCuil());
    $dalTelefonoDeContacto -> insertTelefonoDeContacto($telefono1);

    $telefono2 = new TelefonoDeContacto(4, "Linea", 250, 46587239, $cliente1 -> getCuil());
    $dalTelefonoDeContacto -> insertTelefonoDeContacto($telefono2);

    $telefonosDeContactosArray = $dalTelefonoDeContacto -> getTelefonos();
    echo "Array: " .count($telefonosDeContactosArray), "\n";

    foreach($telefonosDeContactosArray as $item) {
        echo $item -> getIdTelefono(). " ". $item -> getTipoTelefono() ." " .$item -> getCodigoArea() ." " .$item -> getNumero()  ." " .$item -> getCuil() ."\n";
    }

    $direccion1 = new Direccion("Chiguama", 150, 1, 2, "Belén de Escobar", 1620, "Checoslovaquia", $cliente1 -> getCuil());
    $dalDireccion -> insertDireccion($direccion1);

    $direccion2 = new Direccion("Del viso", 150, 2, 8, "No se", 1620, "Checoslovaquia", $cliente1 -> getCuil());
    $dalDireccion -> insertDireccion($direccion2);

    $direccionesArray = $dalDireccion -> getDirecciones();
    echo "Array: " .count($direccionesArray), "\n";

    foreach($direccionesArray as $item) {
        echo $item -> getCalle(). " ". $item -> getNumero() ." " .$item -> getPiso() ." " .$item -> getDepto()  ." " .$item -> getLocalidad()  ." " .$item -> getCodigoPostal()  ." " .$item -> getProvincia()  ." " .$item -> getCuil() ."\n";
    }

    $producto1 = new Producto(9, "Album Mundial 2026", 100);
    $dalProducto -> insertProducto($producto1);

    $producto2 = new Producto(4, "Album Mundial Tapa Dura 2026", 250);
    $dalProducto -> insertProducto($producto2);

    $productosArray = $dalProducto -> getProductos();
    echo "Array: " .count($productosArray), "\n";

    foreach($productosArray as $item) {
        echo $item -> getCodigoProducto(). " ". $item -> getNombre() ." " .$item -> getPrecioUnitario() ."\n";
    }

    $detalleProducto1 = new DetalleProducto(9, 30, 1);
    $dalDetalleProducto -> insertDetalleProducto($detalleProducto1);

    $detalleProducto2 = new DetalleProducto(4, 20, 2);
    $dalDetalleProducto -> insertDetalleProducto($detalleProducto2);

    $detalleProductosArray = $dalDetalleProducto -> getDetalleProductos();
    echo "Array: " .count($detalleProductosArray), "\n";

    foreach($detalleProductosArray as $item) {
        echo $item -> getIdDetalleProducto(). " ". $item -> getCantidad() ." " .$item -> getCodigoProducto() ."\n";
    }
?>