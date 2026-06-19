<?php
    require_once("TelefonoDeContacto.php");

    class telefonoDeContactoDAL {
        private $usuario = 'root';
        private $contrasena = '1234';
        private $servidor = "localhost";
        private $basededatos = 'Factura';
    
        public function insertTelefonoDeContacto($telefonoDeContacto) {
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> contrasena) or die ("Error al conectar: ");
            mysqli_set_charset($conexion, 'utf8');
            $baseDatos = mysqli_select_db($conexion, $this -> basededatos) or die ("Error seleccionar la BD: ");

            $consulta = (sprintf("INSERT INTO telefono_de_contacto (id_telefono, tipo_telefono, codigo_area, numero, cuil) VALUES('%s', '%s', '%s', '%s', '%s');",
            $telefonoDeContacto -> getIdTelefono(), $telefonoDeContacto -> getTipoTelefono(), $telefonoDeContacto -> getCodigoArea(), $telefonoDeContacto -> getNumero(), $telefonoDeContacto -> getCuil()));

            mysqli_query($conexion, $consulta);
            mysqli_close($conexion);
        }

        public function getTelefonos(): array {
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> contrasena) or die ("Error al conectar: ");
            mysqli_set_charset($conexion, 'utf8');
            $baseDatos = mysqli_select_db($conexion, $this -> basededatos) or die ("Error seleccionar la BD: ");

            $consulta = (sprintf("SELECT * FROM telefono_de_contacto"));
            $resultado = mysqli_query($conexion, $consulta);
            $registros = array();

            while($registro = mysqli_fetch_array($resultado)) {
                $telefonoDeContacto = new TelefonoDeContacto ($registro["id_telefono"], $registro["tipo_telefono"], $registro["codigo_area"], $registro["numero"], $registro["cuil"]);

                $registros[] = $telefonoDeContacto;
            } 
            
            mysqli_close($conexion);

            return $registros;
        }
    }
?>