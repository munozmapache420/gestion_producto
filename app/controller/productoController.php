<?php

require_once __DIR__ . '/../model/producto.php';

class productoController
{
    public function index()
    {
        $producto = new Producto();

        $productos = $producto->getAll();

        $productoConsultado = $producto->getByid(5);

        require_once __DIR__ . '/../views/producto/index.php';
    }
}