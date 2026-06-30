<?php
    class Curso {
        private int $anio;
        private int $division;
        private string $turno;

        function __construct(int $anio, int $division, string $turno) {
            $this -> anio = $anio;
            $this -> division = $division;
            $this -> turno = $turno;
        }
            
        public function getAnio(): int {
            return $this -> anio;
        }

        public function getDivision(): int {
            return $this -> division;
        }
    
        public function getTurno(): string {
            return $this -> turno;
        }
    
        public function setAnio(int $anio): void {
            $this -> anio = $anio;
        }
        
        public function setDivision(int $division): void {
            $this -> division = $division;
        }

        public function setTurno(string $turno): void {
            $this -> turno = $turno;
        }

    }
?>