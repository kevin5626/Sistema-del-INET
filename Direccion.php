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
        private Cliente $cliente;

        public function __construct(string $calle, int $numero, int $piso, int $depto, string $localidad, int $codigoPostal, string $provincia) {
            $this -> calle = $calle;
            $this -> numero = $numero;
            $this -> piso = $piso;
            $this -> depto = $depto;
            $this -> localidad = $localidad;
            $this -> codigo_postal = $codigoPostal;
            $this -> provincia = $provincia;
        }

        public function getCalle(): string {
            return $this -> calle;
        } 

        public function getNumero(): int {
            return $this -> calle;
        } 

        public function getPiso(): int {
            return $this -> calle;
        } 

        public function getDepto(): int {
            return $this -> calle;
        } 

        public function getLocalidad(): string {
            return $this -> calle;
        } 

        public function getCodigoPostal(): int {
            return $this -> calle;
        } 

        public function getProvincia(): string {
            return $this -> calle;
        } 

        public function getCliente(): Cliente {
            return $this -> cliente;
        } 

        public function setCalle(string $calle): void {
          $this -> calle = $calle;
        }

        public function setNumero(int $calle): void {
          $this -> calle = $calle;
        }

        public function setPiso(int $calle): void {
          $this -> calle = $calle;
        }

        public function setDepto(int $calle): void {
          $this -> calle = $calle;
        }

        public function setLocalidad(string $calle): void {
          $this -> calle = $calle;
        }

        public function setCodigoPostal(int $calle): void {
          $this -> calle = $calle;
        }

        public function setProvincia(string $calle): void {
          $this -> calle = $calle;
        }

        public function setCliente(Cliente $cliente): void {
          $this -> cliente = $cliente;
        }
    }
?>