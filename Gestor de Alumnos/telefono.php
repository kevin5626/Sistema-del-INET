<?php
    require_once("tutor.php");

    class Telefono {
        private string $tipoTelefono;
        private int $codigoArea;
        private int $numero;
        private int $idTutor;

        public function __construct(string $tipoTelefono, int $codigoArea, int $numero, int $idTutor) {
            $this -> tipoTelefono = $tipoTelefono;
            $this -> codigoArea = $codigoArea;
            $this -> numero = $numero;
            $this -> idTutor = $idTutor;
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

        public function getIdTutor(): int {
            return $this -> idTutor;
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

        public function setIdTutor(int $idTutor): void {
          $this -> idTutor = $idTutor;
        }
    }
?>