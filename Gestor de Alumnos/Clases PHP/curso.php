<?php
    class Curso {
        private int $anio;
        private int $division;
        private string $comision;
        private string $especialidad;
        private string $turno;
        private string $ciclo;

        function __construct(int $anio, int $division, string $comision, string $especialidad, string $turno, string $ciclo) {
            $this -> anio = $anio;
            $this -> division = $division;
            $this -> comision = $comision;
            $this -> especialidad = $especialidad;
            $this -> turno = $turno;
            $this -> ciclo = $ciclo;
        }
            
        public function getAnio(): int {
            return $this -> anio;
        }

        public function getDivision(): int {
            return $this -> division;
        }
    
        public function getComision(): string {
            return $this -> comision;
        }

        public function getEspecialidad(): string {
            return $this -> especialidad;
        }

        public function getTurno(): string {
            return $this -> turno;
        }

        public function getCiclo(): string {
            return $this -> ciclo;
        }
    
        public function setAnio(int $anio): void {
            $this -> anio = $anio;
        }
        
        public function setDivision(int $division): void {
            $this -> division = $division;
        }

        public function setComision(string $comision): void {
            $this -> comision = $comision;
        }

        public function setEspecialidad(string $especialidad): void {
            $this -> especialidad = $especialidad;
        }
        
        public function setTurno(string $turno): void {
            $this -> turno = $turno;
        }

        public function setCiclo(string $ciclo): void {
            $this -> ciclo = $ciclo;
        }
    }
?>