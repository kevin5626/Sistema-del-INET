<?php
    require_once("Cliente.php");

    class ClienteDAL {
        private $usuario = 'root';
        private $contrasena = '1234';
        private $servidor = "localhost";
        private $basededatos = 'Factura';
    
        public function insertCliente($cliente) {
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> contrasena) or die ("Error al conectar: ");
            mysqli_set_charset($conexion, 'utf8');
            $baseDatos = mysqli_select_db($conexion, $this -> basededatos) or die ("Error seleccionar la BD: ");

            $consulta = (sprintf("INSERT INTO cliente (cuil, nombre, apellido) VALUES('%s', '%s', '%s');",
            $cliente -> getCuil(), $cliente -> getNombre(), $cliente -> getApellido()));

            mysqli_query($conexion, $consulta);
            mysqli_close($conexion);
        }

        public function getClientes(): array {
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> contrasena) or die ("Error al conectar: ");
            mysqli_set_charset($conexion, 'utf8');
            $baseDatos = mysqli_select_db($conexion, $this -> basededatos) or die ("Error seleccionar la BD: ");

            $consulta = (sprintf("SELECT * FROM cliente"));
            $resultado = mysqli_query($conexion, $consulta);
            $registros = array();

            while($registro = mysqli_fetch_array($resultado)) {
                $cliente = new Cliente ($registro["cuil"], $registro["nombre"], $registro["apellido"]);

                $registros[] = $cliente;
            } 
            
            mysqli_close($conexion);

            return $registros;
        }
    }
?>