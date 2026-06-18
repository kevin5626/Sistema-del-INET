<?php
    class Producto {
        private int $codigoProducto;
        private string $nombre;
        private int $precioUnitario;

        public function __construct(int $codigoProducto, string $nombre, int $precioUnitario) {
            $this -> codigoProducto = $codigoProducto;
            $this -> nombre = $nombre;
            $this -> precioUnitario = $precioUnitario;
        }
        
        public function getCodigoProducto(): int {
            return $this -> codigoProducto;
        } 

        public function getNombre(): string {
            return $this -> nombre;
        } 

        public function getPrecioUnitario(): int {
            return $this -> precioUnitario;
        } 

        public function setCodigoProducto(int $codigoProducto): void {
          $this -> codigoProducto = $codigoProducto;
        } 

        public function setNombre(string $nombre): void {
          $this -> nombre = $nombre;
        } 

        public function setPrecioUnitario(int $precioUnitario): void {
          $this -> precioUnitario = $precioUnitario;
        } 

    }
?>