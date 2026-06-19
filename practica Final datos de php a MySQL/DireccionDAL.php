<?php
    require_once("Direccion.php");

    class DireccionDAL {
        private $usuario = 'root';
        private $contrasena = '1234';
        private $servidor = "localhost";
        private $basededatos = 'Factura';
    
        public function insertDireccion($direccion) {
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> contrasena) or die ("Error al conectar: ");
            mysqli_set_charset($conexion, 'utf8');
            $baseDatos = mysqli_select_db($conexion, $this -> basededatos) or die ("Error seleccionar la BD: ");

            $consulta = (sprintf("INSERT INTO direccion (calle, numero, piso, depto, localidad, codigo_postal, provincia, cuil) VALUES('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');",
            $direccion -> getCalle(), $direccion -> getNumero(), $direccion -> getPiso(), $direccion -> getDepto(), $direccion -> getLocalidad(), $direccion -> getCodigoPostal(), $direccion -> getProvincia(), $direccion -> getCuil()));

            mysqli_query($conexion, $consulta);
            mysqli_close($conexion);
        }

        public function getDirecciones(): array {
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> contrasena) or die ("Error al conectar: ");
            mysqli_set_charset($conexion, 'utf8');
            $baseDatos = mysqli_select_db($conexion, $this -> basededatos) or die ("Error seleccionar la BD: ");

            $consulta = (sprintf("SELECT * FROM direccion"));
            $resultado = mysqli_query($conexion, $consulta);
            $registros = array();

            while($registro = mysqli_fetch_array($resultado)) {
                $direccion = new Direccion ($registro["calle"], $registro["numero"], $registro["piso"], $registro["depto"], $registro["localidad"], $registro["codigo_postal"], $registro["provincia"], $registro["cuil"]);

                $registros[] = $direccion;
            } 
            
            mysqli_close($conexion);

            return $registros;
        }
    }
?>