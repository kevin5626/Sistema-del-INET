<?php
    require_once("Cliente.php");

    class Direccion {
        private string $calle;
        private int $numero;
        private int $piso;
        private int $depto;
        private string $localidad;
        private int $codigoPostal;
        private string $provincia;
        private int $cuil;

        public function __construct(string $calle, int $numero, int $piso, int $depto, string $localidad, int $codigoPostal, string $provincia, int $cuil) {
            $this -> calle = $calle;
            $this -> numero = $numero;
            $this -> piso = $piso;
            $this -> depto = $depto;
            $this -> localidad = $localidad;
            $this -> codigoPostal = $codigoPostal;
            $this -> provincia = $provincia;
            $this -> cuil = $cuil;
        }

        public function getCalle(): string {
            return $this -> calle;
        } 

        public function getNumero(): int {
            return $this -> numero;
        } 

        public function getPiso(): int {
            return $this -> piso;
        } 

        public function getDepto(): int {
            return $this -> depto;
        } 

        public function getLocalidad(): string {
            return $this -> localidad;
        } 

        public function getCodigoPostal(): int {
            return $this -> codigoPostal;
        } 

        public function getProvincia(): string {
            return $this -> provincia;
        } 

        public function getCuil(): int {
            return $this -> cuil;
        } 

        public function setCalle(string $calle): void {
          $this -> calle = $calle;
        }

        public function setNumero(int $numero): void {
          $this -> numero = $numero;
        }

        public function setPiso(int $piso): void {
          $this -> piso = $piso;
        }

        public function setDepto(int $depto): void {
          $this -> depto = $depto;
        }

        public function setLocalidad(string $localidad): void {
          $this -> localidad = $localidad;
        }

        public function setCodigoPostal(int $codigoPostal): void {
          $this -> codigoPostal = $codigoPostal;
        }

        public function setProvincia(string $provincia): void {
          $this -> provincia = $provincia;
        }

        public function setCuil(int $cuil): void {
          $this -> cuil = $cuil;
        }
    }
?>