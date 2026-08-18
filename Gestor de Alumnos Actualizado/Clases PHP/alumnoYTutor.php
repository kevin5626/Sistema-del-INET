<?php
require_once("alumno.php");
require_once("tutor.php");

class AlumnoYTutor {
        private Alumno $dni;
        private Tutor $id_tutor;

        function __construct(Alumno $dni, Tutor $id_tutor) {
            $this -> dni = $dni;
            $this -> id_tutor = $id_tutor;
        }
            
        public function getDni(): Alumno {
            return $this -> dni;
        }

        public function getIdTutor(): Tutor {
            return $this -> id_tutor;
        }
    
        public function setDni(Alumno $dni): void {
            $this -> dni = $dni;
        }
        
        public function setIdTutor(Tutor $id_tutor): void {
            $this -> id_tutor = $id_tutor;
        }
    }
?>