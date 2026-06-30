<?php
    require_once("alumno.php");

    class AlumnoDAL {
        private $usuario = 'root';
        private $contrasena = '1234';
        private $servidor = "localhost";
        private $basededatos = 'Factura';
    
        public function insertAlumno($alumno) {
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> contrasena) or die ("Error al conectar: ");
            mysqli_set_charset($conexion, 'utf8');
            $baseDatos = mysqli_select_db($conexion, $this -> basededatos) or die ("Error seleccionar la BD: ");

            $consulta = (sprintf("INSERT INTO alumnos (dni, nombre, apellido) VALUES('%s', '%s', '%s');",
            $alumno -> getDni(), $alumno -> getNombre(), $aumno -> getApellido()));

            mysqli_query($conexion, $consulta);
            mysqli_close($conexion);
        }

        public function getAlumnos(): array {
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> contrasena) or die ("Error al conectar: ");
            mysqli_set_charset($conexion, 'utf8');
            $baseDatos = mysqli_select_db($conexion, $this -> basededatos) or die ("Error seleccionar la BD: ");

            $consulta = (sprintf("SELECT * FROM alumnos"));
            $resultado = mysqli_query($conexion, $consulta);
            $registros = array();

            while($registro = mysqli_fetch_array($resultado)) {
                $alumno = new Alumno ($registro["dni"], $registro["nombre"], $registro["apellido"]);

                $registros[] = $alumno;
            } 
            
            mysqli_close($conexion);

            return $registros;
        }
    }
?>