<?php
    class Tutor {
        private string $nombre;
        private string $apellido;

        function __construct(string $nombre, string $apellido) {
            $this -> nombre = $nombre;
            $this -> apellido = $apellido;
        }

        public function getNombre(): string {
            return $this -> nombre;
        }
    
        public function getApellido(): string {
            return $this -> apellido;
        }

        public function setNombre(string $nombre): void {
            $this -> nombre = $nombre;
        }

        public function setApellido(string $apellido): void {
            $this -> apellido = $apellido;
        }

    }
?>