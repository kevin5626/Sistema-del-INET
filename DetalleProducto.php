<?php
    require_once("Producto.php");

    class DetalleProducto {
        private int $idDetalleProducto;
        private int $cantidad;
        private Producto $producto;

        public function __construct(int $idDetalleProducto, int $cantidad) {
            $this -> idDetalleProducto = $idDetalleProducto;
            $this -> cantidad = $cantidad;
        }

        public function getIdDetalleProducto(): int {
            return $this -> idDetalleProducto;
        } 

        public function getCantidad(): int {
            return $this -> cantidad;
        } 

        public function getProducto(): Producto {
            return $this -> producto;
        } 

        public function setIdDetalleProducto(int $idDetalleProducto): void {
          $this -> idDetalleProducto = $idDetalleProducto;
        } 

        public function setCantidad(int $cantidad): void {
          $this -> cantidad = $cantidad;
        }

        public function setProducto(Producto $producto): void {
          $this -> producto = $producto;
        }
    }
?>