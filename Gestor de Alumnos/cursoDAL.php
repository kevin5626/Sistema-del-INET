<?php
    require_once("Curso.php");

    class CursoDAL {
        private $usuario = 'root';
        private $contrasena = '1234';
        private $servidor = "localhost";
        private $basededatos = 'Factura';
    
        public function insertCurso($curso) {
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> contrasena) or die ("Error al conectar: ");
            mysqli_set_charset($conexion, 'utf8');
            $baseDatos = mysqli_select_db($conexion, $this -> basededatos) or die ("Error seleccionar la BD: ");

            $consulta = (sprintf("INSERT INTO cursos (anio, division, turno) VALUES('%s', '%s', '%s');",
            $curso -> getAnio(), $curso -> getDivision(), $curso -> getTurno()));

            mysqli_query($conexion, $consulta);
            mysqli_close($conexion);
        }

        public function getCursos(): array {
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> contrasena) or die ("Error al conectar: ");
            mysqli_set_charset($conexion, 'utf8');
            $baseDatos = mysqli_select_db($conexion, $this -> basededatos) or die ("Error seleccionar la BD: ");

            $consulta = (sprintf("SELECT * FROM cursos"));
            $resultado = mysqli_query($conexion, $consulta);
            $registros = array();

            while($registro = mysqli_fetch_array($resultado)) {
                $curso = new Curso ($registro["anio"], $registro["division"], $registro["turno"]);

                $registros[] = $curso;
            } 
            
            mysqli_close($conexion);

            return $registros;
        }
    }
?>