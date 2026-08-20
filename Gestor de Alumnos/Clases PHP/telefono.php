<?php
    class Telefono {
        private ?int $id_telefono = null;
        private string $tipoTelefono;
        private int $codigoArea;
        private int $numero;
        private int $id_tutor;

        public function __construct(?int $id_telefono, string $tipoTelefono, int $codigoArea, int $numero, int $id_tutor) {
            $this -> id_telefono = $id_telefono;
            $this -> tipoTelefono = $tipoTelefono;
            $this -> codigoArea = $codigoArea;
            $this -> numero = $numero;
            $this -> id_tutor = $id_tutor;
        }

        public function getIdTelefono(): ?int {
            return $this -> id_telefono;
        }

        public function getTipoTelefono(): string {
            return $this -> tipoTelefono;
        } 

        public function getCodigoArea(): int {
            return $this -> codigoArea;
        } 

        public function getNumero(): int {
            return $this -> numero;
        } 

        public function getIdTutor1(): int {
            return $this -> id_tutor;
        } 

        public function setIdTelefono(?int $id_telefono): void {
          $this -> id_telefono = $id_telefono;
        }

        public function setTipoTelefono(string $tipoTelefono): void {
          $this -> tipoTelefono = $tipoTelefono;
        }

        public function setCodigoArea(int $codigoArea): void {
          $this -> codigoArea = $codigoArea;
        }

        public function setNumero(int $numero): void {
          $this -> numero = $numero;
        }

        public function setIdTutor(int $id_tutor): void {
          $this -> id_tutor = $id_tutor;
        }
    }
?>