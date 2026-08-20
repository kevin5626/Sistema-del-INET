<?php
    class Tutor {
        private ?int $id_tutor = null;
        private string $nombre;
        private string $apellido;

        function __construct(?int $id_tutor, string $nombre, string $apellido) {
            $this -> id_tutor = $id_tutor;
            $this -> nombre = $nombre;
            $this -> apellido = $apellido;
        }

        public function getIdTutor(): ?int {
            return $this -> id_tutor;
        }

        public function getNombre(): string {
            return $this -> nombre;
        }
    
        public function getApellido(): string {
            return $this -> apellido;
        }

        public function setIdTutor(?int $id_tutor): void {
            $this -> id_tutor = $id_tutor;
        }

        public function setNombre(string $nombre): void {
            $this -> nombre = $nombre;
        }

        public function setApellido(string $apellido): void {
            $this -> apellido = $apellido;
        }
    }
?>