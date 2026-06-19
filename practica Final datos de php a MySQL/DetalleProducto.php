<?php
    require_once("Producto.php");

    class DetalleProducto {
        private int $idDetalleProducto;
        private int $cantidad;
        private int $codigoProducto;

        public function __construct(int $idDetalleProducto, int $cantidad, int $codigoProducto) {
            $this -> idDetalleProducto = $idDetalleProducto;
            $this -> cantidad = $cantidad;
            $this -> codigoProducto = $codigoProducto;
        }

        public function getIdDetalleProducto(): int {
            return $this -> idDetalleProducto;
        } 

        public function getCantidad(): int {
            return $this -> cantidad;
        } 

        public function getCodigoProducto(): int {
            return $this -> codigoProducto;
        } 

        public function setIdDetalleProducto(int $idDetalleProducto): void {
          $this -> idDetalleProducto = $idDetalleProducto;
        } 

        public function setCantidad(int $cantidad): void {
          $this -> cantidad = $cantidad;
        }

        public function setCodigoProducto(int $codigoProducto): void {
          $this -> codigoProducto = $codigoProducto;
        }
    }
?>