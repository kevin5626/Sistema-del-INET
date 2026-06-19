<?php
    require_once("Producto.php");

    class ProductoDAL {
        private $usuario = 'root';
        private $contrasena = '1234';
        private $servidor = "localhost";
        private $basededatos = 'Factura';
    
        public function insertProducto($producto) {
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> contrasena) or die ("Error al conectar: ");
            mysqli_set_charset($conexion, 'utf8');
            $baseDatos = mysqli_select_db($conexion, $this -> basededatos) or die ("Error seleccionar la BD: ");

            $consulta = (sprintf("INSERT INTO producto (codigo_producto, nombre, precio_unitario) VALUES('%s', '%s', '%s');",
            $producto -> getCodigoProducto(), $producto -> getNombre(), $producto -> getPrecioUnitario()));

            mysqli_query($conexion, $consulta);
            mysqli_close($conexion);
        }

        public function getProductos(): array {
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> contrasena) or die ("Error al conectar: ");
            mysqli_set_charset($conexion, 'utf8');
            $baseDatos = mysqli_select_db($conexion, $this -> basededatos) or die ("Error seleccionar la BD: ");

            $consulta = (sprintf("SELECT * FROM producto"));
            $resultado = mysqli_query($conexion, $consulta);
            $registros = array();

            while($registro = mysqli_fetch_array($resultado)) {
                $producto = new Producto ($registro["codigo_producto"], $registro["nombre"], $registro["precio_unitario"]);

                $registros[] = $producto;
            } 
            
            mysqli_close($conexion);

            return $registros;
        }
    }
?>