<?php
    class Cliente {
        private string $cuil;
        private string $nombre;
        private string $apellido;

        function __construct(int $cuil, string $nombre, string $apellido) {
            $this -> cuil = $cuil;
            $this -> nombre = $nombre;
            $this -> apellido = $apellido;
        }
            
        public function getCuil(): int {
            return $this -> cuil;
        }

        public function getNombre(): string {
            return $this -> nombre;
        }
    
        public function getApellido(): string {
            return $this -> apellido;
        }
    
        public function setCuil(int $cuil): void {
            $this -> cuil = $cuil;
        }
        
        public function setNombre(string $nombre): void {
            $this -> nombre = $nombre;
        }

        public function setApellido(string $apellido): void {
            $this -> apellido = $apellido;
        }

    }
?>