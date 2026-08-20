<?php
require_once("alumno.php");
require_once("tutor.php");

class AlumnoYTutor {
        private int $dni;
        private int $id_tutor;

        function __construct(int $dni, int $id_tutor) {
            $this -> dni = $dni;
            $this -> id_tutor = $id_tutor;
        }
            
        public function getDni(): int {
            return $this -> dni;
        }

        public function getIdTutor(): int {
            return $this -> id_tutor;
        }
    
        public function setDni(int $dni): void {
            $this -> dni = $dni;
        }
        
        public function setIdTutor(int $id_tutor): void {
            $this -> id_tutor = $id_tutor;
        }
    }
?>