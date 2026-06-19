<?php
    require_once("Cliente.php");

    class TelefonoDeContacto {
        private int $idTelefono;
        private string $tipoTelefono;
        private int $codigoArea;
        private int $numero;
        private int $cuil;

        public function __construct( int $idTelefono, string $tipoTelefono, int $codigoArea, int $numero, int $cuil) {
            $this -> idTelefono = $idTelefono;
            $this -> tipoTelefono = $tipoTelefono;
            $this -> codigoArea = $codigoArea;
            $this -> numero = $numero;
            $this -> cuil = $cuil;
        }

        public function getIdTelefono(): int {
            return $this -> idTelefono;
        } 

        public function getTipoTelefono(): string {
            return $this -> tipoTelefono;
        } 

        public function getCodigoArea(): int {
            return $this -> idTelefono;
        } 

        public function getNumero(): int {
            return $this -> numero;
        } 

        public function getCuil(): int {
            return $this -> cuil;
        } 

        public function setIdTelefono(int $idTelefono): void {
          $this -> idTelefono = $idTelefono;
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

        public function setCuil(int $cuil): void {
          $this -> cuil = $cuil;
        }
    }
?>