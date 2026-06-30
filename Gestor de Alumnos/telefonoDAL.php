<?php
    require_once("telefono.php");

    class TelefonoDAL {
        private $usuario = 'root';
        private $contrasena = '1234';
        private $servidor = "localhost";
        private $basededatos = 'Factura';
    
        public function insertTelefono($telefono) {
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> contrasena) or die ("Error al conectar: ");
            mysqli_set_charset($conexion, 'utf8');
            $baseDatos = mysqli_select_db($conexion, $this -> basededatos) or die ("Error seleccionar la BD: ");

            $consulta = (sprintf("INSERT INTO telefonos (tipo_telefono, codigo_area, numero, id_tutor) VALUES('%s', '%s', '%s', '%s');",
            $telefono -> getTipoTelefono(), $telefono -> getCodigoArea(), $telefono -> getNumero(), $telefono -> getIdTutor()));

            mysqli_query($conexion, $consulta);
            mysqli_close($conexion);
        }

        public function getTelefonos(): array {
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> contrasena) or die ("Error al conectar: ");
            mysqli_set_charset($conexion, 'utf8');
            $baseDatos = mysqli_select_db($conexion, $this -> basededatos) or die ("Error seleccionar la BD: ");

            $consulta = (sprintf("SELECT * FROM telefonos"));
            $resultado = mysqli_query($conexion, $consulta);
            $registros = array();

            while($registro = mysqli_fetch_array($resultado)) {
                $telefono = new Telefono ($registro["tipo_telefono"], $registro["codigo_area"], $registro["numero"], $registro["id_tutor"]);

                $registros[] = $telefono;
            } 
            
            mysqli_close($conexion);

            return $registros;
        }
    }
?>