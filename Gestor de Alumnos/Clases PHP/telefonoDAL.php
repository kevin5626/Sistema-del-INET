<?php
    require_once("telefono.php");

    class TelefonoDAL {
        private $usuario = 'root';
        private $contrasena = '1234';
        private $servidor = "localhost";
        private $basededatos = 'gestor_alumnos';
    
        public function insertTelefono($telefono) {
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> contrasena) or die ("Error al conectar: ");
            mysqli_set_charset($conexion, 'utf8');
            $baseDatos = mysqli_select_db($conexion, $this -> basededatos) or die ("Error seleccionar la BD: ");

            $consulta = (sprintf("INSERT INTO telefonos (tipo_telefono, codigo_area, numero, Id_Tutor) VALUES('%s', '%s', '%s', '%s');",
            $telefono -> getTipoTelefono(), $telefono -> getCodigoArea(), $telefono -> getNumero(), $telefono -> getIdTutor1()));

            mysqli_query($conexion, $consulta);

            $idTelefono = mysqli_insert_id($conexion);
            $telefono -> setIdTelefono($idTelefono);

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
                $telefono = new Telefono ($registro["Id_Telefono"], $registro["tipo_telefono"], $registro["codigo_area"], $registro["numero"], $registro["Id_Tutor"]);

                $registros[] = $telefono;
            } 
            
            mysqli_close($conexion);

            return $registros;
        }
    }
?>