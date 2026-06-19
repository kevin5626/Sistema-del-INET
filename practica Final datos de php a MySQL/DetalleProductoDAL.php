<?php
    require_once("DetalleProducto.php");

    class DetalleProductoDAL {
        private $usuario = 'root';
        private $contrasena = '1234';
        private $servidor = "localhost";
        private $basededatos = 'Factura';
    
        public function insertDetalleProducto($detalleProducto) {
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> contrasena) or die ("Error al conectar: ");
            mysqli_set_charset($conexion, 'utf8');
            $baseDatos = mysqli_select_db($conexion, $this -> basededatos) or die ("Error seleccionar la BD: ");

            $consulta = (sprintf("INSERT INTO detalle_producto (id_detalle_producto, cantidad, codigo_producto) VALUES('%s', '%s', '%s');",
            $detalleProducto -> getIdDetalleProducto(), $detalleProducto -> getCantidad(), $detalleProducto -> getCodigoProducto()));

            mysqli_query($conexion, $consulta);
            mysqli_close($conexion);
        }

        public function getDetalleProductos(): array {
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> contrasena) or die ("Error al conectar: ");
            mysqli_set_charset($conexion, 'utf8');
            $baseDatos = mysqli_select_db($conexion, $this -> basededatos) or die ("Error seleccionar la BD: ");

            $consulta = (sprintf("SELECT * FROM detalle_producto"));
            $resultado = mysqli_query($conexion, $consulta);
            $registros = array();

            while($registro = mysqli_fetch_array($resultado)) {
                $detalleProducto = new DetalleProducto ($registro["id_detalle_producto"], $registro["cantidad"], $registro["codigo_producto"]);

                $registros[] = $detalleProducto;
            } 
            
            mysqli_close($conexion);

            return $registros;
        }
    }
?>