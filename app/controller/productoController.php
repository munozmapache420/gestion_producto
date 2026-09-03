<?php
require_once __DIR__ . '/../model/producto.php';

class productoController {

 public function index() {

    $producto = new producto();
    $productos = $producto->getAll();

    require_once __DIR__ . '/../views/producto/index.php';
}

};